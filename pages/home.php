<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/static-data.php';

function getCarImage($carName) {
    $imageMap = [
        'Toyota Yaris' => 'car_0.svg',
        'Volkswagen Polo' => 'Volkswagen Polo.jpg',
        'Ford Transit' => 'Ford Transit.jpg',
        'Skoda Octavia' => 'car_2.svg',
        'Peugeot 208' => 'Peugeot 208.avif',
        'Mercedes-Benz Sprinter' => 'car_6.svg',
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
    
    if (isset($imageMap[$carName])) {
        return '/assets/images/products/' . $imageMap[$carName];
    }
    
    return '/assets/images/products/car_0.svg';
}

$popular_cars = array_slice($cars, 0, 5);
?>

    <header>
        <div class="advertorials">
            <div class="advertorial">
                <h2>Hét platform om een auto te huren</h2>
                <p>Snel en eenvoudig een auto huren. Natuurlijk voor een lage prijs.</p>
                <a href="/pages/ons-aanbod.php" class="button-primary">Huur nu een auto</a>
                <img src="../assets/images/products/Car_0.png" alt="">
                <img src="../assets/images/header-circle-background.svg" alt="" class="background-header-element">
            </div>
            <div class="advertorial">
                <h2>Wij verhuren ook bedrijfswagens</h2>
                <p>Voor een vaste lage prijs met prettig voordelen.</p>
                <a href="/pages/bedrijfswagens.php" class="button-primary">Huur een bedrijfswagen</a>
                <img src="/assets/images/car-rent-header-image-2.png" alt="">
                <img src="/assets/images/header-block-background.svg" alt="" class="background-header-element">
            </div>
        </div>
    </header>



    <main>
        <h2 class="section-title">Populaire auto's</h2>
        <div class="cars">
            <?php foreach ($popular_cars as $car) : ?>
                <div class="car-details">
                    <div class="car-brand">
                        <h3><?= htmlspecialchars($car['Auto']) ?></h3>
                        <div class="car-type"><?= htmlspecialchars($car['Type']) ?></div>
                    </div>

                    
                    <img src="<?= getCarImage($car['Auto']) ?>" alt="<?= htmlspecialchars($car['Auto']) ?>">

                    <div class="car-specification">
                        <span><img src="../assets/images/icons/gas-station.svg" alt=""><?= $car['Liter'] ?>L</span>
                        <span><img src="../assets/images/icons/car.svg" alt=""><?= $car['Versnellingsbak'] ?></span>
                        <span><img src="../assets/images/icons/profile-2user.svg" alt=""><?= $car['Passagiers'] ?> Personen</span>
                    </div>

                    <div class="rent-details">
                        <span><span class="font-weight-bold">€<?= number_format($car['Prijs'], 2, ',', '.') ?></span> / dag</span>

                        
                        <a href="/pages/car-detail.php?id=<?= $car['Id'] ?>" class="button-primary">Bekijk nu</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="show-more">
            <a class="button-primary" href="/pages/ons-aanbod.php">Toon alle</a>
        </div>
    </main>



<?php require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>