<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/cars-db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/wishlist-db.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Function to get the correct image for a car
function getCarImage($carName) {
    $imageMap = [
        'Toyota Yaris' => 'car_0.svg',
        'Volkswagen Polo' => 'Volkswagen Polo.jpg',
        'Ford Transit' => 'Ford Transit.jpg',
        'Skoda Octavia' => 'car_2.svg',
        'Peugeot 208' => 'Peugeot 208.avif',
        'Mercedes-Benz Sprinter' => 'car_6.svg', // Using fallback SVG since photo is missing
        'Audi A4' => 'car_4.svg',
        'BMW X5' => 'car_5.svg',
        'Renault Clio' => 'car_6.svg',
        'Porsche 911' => 'car_7.svg',
        'Fiat 500' => 'car_8.svg',
        'Volkswagen Transporter' => 'Volkswagen Transporter.jpg',
        'Tesla Model 3' => 'car_9.svg',
        'Volvo XC40' => 'car_10.svg',
        'Renault Master' => 'Renault Master.jpg',
        'Kia Niro' => 'car_11.svg',
        'Hyundai KONA Electric' => 'car_0.svg',
        'Opel Vivaro' => 'Opel Vivaro.webp',
        'Nissan Leaf' => 'Nissan Leaf.avif',
        'Citroën C3' => 'car_2.svg',
        'Ford Focus' => 'Ford Focus.jpg',
        'Ford Transit Custom' => 'Ford Transit Custom.webp',
        'Citroën Jumper' => 'Citroën Jumper.jpg',
        'Peugeot Boxer' => 'Peugeot Boxer.jpg',
        'Iveco Daily' => 'Iveco Daily.jpg',
        'Fiat Ducato' => 'Fiat Ducato.WebP',
        'Toyota Proace' => 'Toyota Proace.jpg',
        'Nissan NV400' => 'Nissan NV400.jpeg',
        'MAN TGE' => 'MAN TGE.webp',
        'Volkswagen Crafter' => 'Volkswagen Crafter.jpg',
        'Mercedes-Benz Citan' => 'Mercedes-Benz Citan.jpg',
        'Renault Kangoo' => 'Renault kangaroo.png',
        'Ford Transit Connect' => 'Ford Transit Connect.webp',
        'Opel Combo' => 'Opel Combo.webp',
        'Peugeot Partner' => 'Peugeot Partner.avif',
        'Citroën Berlingo Van' => 'Citroën Berlingo Van.avif',
        'Fiat Talento' => 'Fiat Talento.jpg',
        'Nissan NV300' => 'Nissan NV300.jpg',
        'Toyota Hilux' => 'Toyota Hilux.jpg',
        'Ford Ranger' => 'Ford Ranger.jpeg',
        'Volkswagen Amarok' => 'Volkswagen Amarok.jpg'
    ];
    
    // Check if we have a specific image for this car
    if (isset($imageMap[$carName])) {
        return '/assets/images/products/' . $imageMap[$carName];
    }
    
    // Fallback to generic car image
    return '/assets/images/products/car_0.svg';
}

$userId = $_SESSION['id'] ?? null;
$userWishlist = [];
if ($userId) {
    $userWishlist = getWishlistByUser($userId);
}

// Handle liking/unliking a car
if (isset($_GET['like']) && is_numeric($_GET['like'])) {
    $carIdToToggle = (int)$_GET['like'];

    if (!$userId) {
        // User is not logged in, redirect to login page
        $_SESSION['message'] = "U moet ingelogd zijn om een auto te liken.";
        $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
        header("Location: /pages/login-form.php");
        exit;
    }

    // Toggle the car in the wishlist
    toggleWishlist($userId, $carIdToToggle);

    // Redirect to the same page without the 'like' parameter to prevent re-toggling on refresh
    $redirectUrl = '/pages/ons-aanbod.php';
    if (isset($_GET['category'])) {
        $redirectUrl .= '?category=' . urlencode($_GET['category']);
    }
    header("Location: " . $redirectUrl);
    exit;
}

// Fetch all car types for the filter dropdown
$all_cars_for_types = getCars(false, false); // Get all cars to build the type filter
$all_types = array_unique(array_column($all_cars_for_types, 'Type'));

// Filter cars based on selected category
$selectedCategory = $_GET['category'] ?? '';
if (!empty($selectedCategory)) {
    $cars = searchCars(null, $selectedCategory);
} else {
    $cars = getCars(); // Get available cars by default
}

?>

<main>
    <div class="aanbod-container">
        <div class="aanbod-sidebar">
            <div class="filter">
                <h2>Filter ons aanbod</h2>
                <form action="/pages/ons-aanbod.php" method="GET">
                    <div class="filter-group">
                        <label for="category">Categorie:</label>
                        <select name="category" id="category" onchange="this.form.submit()">
                            <option value="">Alle categorieën</option>
                            <?php foreach ($all_types as $type): ?>
                                <option value="<?= htmlspecialchars($type) ?>" <?= ($selectedCategory === $type) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($type) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <noscript><button type="submit" class="button-primary">Filter toepassen</button></noscript>
                    <?php if (!empty($selectedCategory)) : ?>
                        <a href="/pages/ons-aanbod.php" class="button-secondary">Reset filter</a>
                    <?php endif; ?>
                </form>
            </div>
        </div>

        <div class="aanbod-content">
            <h2 class="section-title"><?= count($cars) ?> auto's gevonden</h2>
            <div class="cars">
                <?php if (!empty($cars)): ?>
                    <?php foreach ($cars as $car): ?>
                        <div class="car-details">
                            <div class="car-brand">
                                <h3><?= htmlspecialchars($car['Auto']) ?></h3>
                                <div class="car-type"><?= htmlspecialchars($car['Type']) ?></div>
                            </div>

                            <?php if ($userId): ?>
                                <div class="like-button">
                                    <?php
                                    $likeUrl = '/pages/ons-aanbod.php?like=' . $car['Id'];
                                    if (!empty($selectedCategory)) {
                                        $likeUrl .= '&category=' . urlencode($selectedCategory);
                                    }
                                    $isLiked = in_array($car['Id'], $userWishlist);
                                    ?>
                                    <a href="<?= $likeUrl ?>" class="like-link <?= $isLiked ? 'liked' : '' ?>" aria-label="Like deze auto">
                                        <span class="heart-icon">♥</span>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <img src="<?= getCarImage($car['Auto']) ?>" alt="<?= htmlspecialchars($car['Auto']) ?>">

                            <div class="car-specification">
                                <span><img src="/assets/images/icons/gas-station.svg" alt=""> <?= htmlspecialchars($car['Liter']) ?>L</span>
                                <span><img src="/assets/images/icons/car.svg" alt=""> <?= htmlspecialchars($car['Versnellingsbak']) ?></span>
                                <span><img src="/assets/images/icons/profile-2user.svg" alt=""> <?= htmlspecialchars($car['Passagiers']) ?> Personen</span>
                            </div>

                            <div class="rent-details">
                                <span><span class="font-weight-bold">€<?= number_format($car['Prijs'], 2, ',', '.') ?></span></span>
                                <a href="/pages/car-detail.php?id=<?= $car['Id'] ?>" class="button-primary">Bekijk nu</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Geen auto's gevonden die aan uw criteria voldoen.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
