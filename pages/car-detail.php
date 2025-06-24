<?php
require $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cars-db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/reservations-db.php";

// Function to get the correct image for a car
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
    
    // Check if we have a specific image for this car
    if (isset($imageMap[$carName])) {
        return '/assets/images/products/' . $imageMap[$carName];
    }
    
    // Fallback to generic car image
    return '/assets/images/products/car_0.svg';
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
    
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        $_SESSION['message'] = "U moet ingelogd zijn om een auto te huren.";
        
        $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
        header("Location: /pages/login-form.php");
        exit;
    }

    
    $carId = (int)$_GET['id'];
    $userId = (int)$_SESSION['id'];
    $startDateStr = $_POST['start-date'];
    $endDateStr = $_POST['end-date'];

    
    if (empty($startDateStr) || empty($endDateStr) || strtotime($endDateStr) < strtotime($startDateStr)) {
        $_SESSION['error_message'] = "Ongeldige huurperiode. De einddatum moet na de startdatum liggen.";
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit;
    }

    
    $car = getCarById($carId);
    if ($car) {
        $startDate = new DateTime($startDateStr);
        $endDate = new DateTime($endDateStr);
        $interval = $startDate->diff($endDate);
        $days = $interval->days + 1; 
        $totalPrice = $days * $car['Prijs'];

        
        if (createReservation($userId, $carId, $startDateStr, $endDateStr, $totalPrice)) {
            $_SESSION['rented_car'] = $car;
            $_SESSION['reservation_details'] = [
                'start_date' => $startDateStr,
                'end_date' => $endDateStr,
                'total_price' => $totalPrice,
                'days' => $days
            ];
            header("Location: /pages/huur-bedankt.php");
            exit;
        } else {
            
            $_SESSION['error_message'] = "Er is iets misgegaan bij het maken van de reservering. Probeer het opnieuw.";
            header("Location: " . $_SERVER['REQUEST_URI']);
            exit;
        }
    } else {
        $_SESSION['error_message'] = "De geselecteerde auto kon niet worden gevonden.";
        header("Location: /ons-aanbod");
        exit;
    }
}


$id = $_GET['id'] ?? null;
$car = null;

if ($id !== null && is_numeric($id)) {
    $car = getCarById((int)$id);
}

// Display error message if it exists
if (isset($_SESSION['error_message'])) {
    echo '<div class="container" style="margin-top: 20px;"><div class="message error-message" style="background-color: #f8d7da; color: #721c24; padding: 1rem; border: 1px solid #f5c6cb; border-radius: .25rem;">' . htmlspecialchars($_SESSION['error_message']) . '</div></div>';
    unset($_SESSION['error_message']);
}
?>

<main class="car-detail-page">
    <?php if ($car): ?>
        <!-- Hero Section -->
        <section class="car-hero">
            <div class="container">
                <div class="hero-content">
                    <div class="breadcrumb">
                        <a href="/ons-aanbod">Ons aanbod</a>
                        <span>/</span>
                        <span><?= htmlspecialchars($car['Auto']) ?></span>
                    </div>
                    <h1><?= htmlspecialchars($car['Auto']) ?></h1>
                    <div class="car-badge">
                        <span class="badge-type"><?= htmlspecialchars($car['Type']) ?></span>
                        <div class="rating">
                            <span class="stars stars-4"></span>
                            <span class="review-count"><?= htmlspecialchars($car['rating'] ?? '4.8') ?> (<?= htmlspecialchars($car['reviews'] ?? '440+') ?> reviews)</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="car-main">
            <div class="container">
                <div class="car-layout">
                    <!-- Left Column - Car Image & Details -->
                    <div class="car-left">
                        <div class="car-image-section">
                            <div class="car-image">
                                <img src="<?= getCarImage($car['Auto']) ?>" alt="<?= htmlspecialchars($car['Auto']) ?>">
                            </div>
                            <div class="car-gallery">
                                <div class="gallery-thumb active">
                                    <img src="<?= getCarImage($car['Auto']) ?>" alt="Hoofdafbeelding">
                                </div>
                                <div class="gallery-thumb">
                                    <img src="<?= getCarImage($car['Auto']) ?>" alt="Interieur">
                                </div>
                                <div class="gallery-thumb">
                                    <img src="<?= getCarImage($car['Auto']) ?>" alt="Exterieur">
                                </div>
                            </div>
                        </div>

                        <div class="car-specifications">
                            <h3>Specificaties</h3>
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <div class="spec-icon">👥</div>
                                    <div class="spec-content">
                                        <span class="spec-label">Passagiers</span>
                                        <span class="spec-value"><?= htmlspecialchars($car['Passagiers']) ?> personen</span>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-icon">⚙️</div>
                                    <div class="spec-content">
                                        <span class="spec-label">Transmissie</span>
                                        <span class="spec-value"><?= htmlspecialchars($car['Versnellingsbak']) ?></span>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-icon">⛽</div>
                                    <div class="spec-content">
                                        <span class="spec-label">Brandstof</span>
                                        <span class="spec-value"><?= htmlspecialchars($car['Liter']) ?>L</span>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-icon">🚗</div>
                                    <div class="spec-content">
                                        <span class="spec-label">Type</span>
                                        <span class="spec-value"><?= htmlspecialchars($car['Type']) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="car-description">
                            <h3>Over deze auto</h3>
                            <p><?= htmlspecialchars($car['description'] ?? "De " . htmlspecialchars($car['Auto']) . " is een uitstekende keuze voor " . strtolower($car['Type']) . " rijden. Deze auto combineert comfort, prestaties en stijl in één pakket. Perfect voor zowel dagelijks gebruik als speciale gelegenheden.") ?></p>
                            
                            <div class="features-list">
                                <h4>Inclusief in je huur:</h4>
                                <ul>
                                    <li>✓ Volledige verzekering</li>
                                    <li>✓ 24/7 pechhulp</li>
                                    <li>✓ Onbeperkte kilometers</li>
                                    <li>✓ Schoonmaakservice</li>
                                    <li>✓ Flexibele ophaal/aflevering</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                    <div class="car-right">
                        <div class="booking-card">
                            <div class="price-section">
                                <div class="price-main">
                                    <span class="price-amount">€<?= number_format($car['Prijs'], 2, ',', '.') ?></span>
                                    <span class="price-period">per dag</span>
                                </div>
                                <div class="price-details">
                                    <span>Inclusief BTW en verzekering</span>
                                </div>
                            </div>

                            <form action="/pages/car-detail.php?id=<?= $car['Id'] ?>" method="POST" class="booking-form">
                                <div class="form-section">
                                    <h4>Huurperiode</h4>
                                    <div class="date-inputs">
                                        <div class="form-group">
                                            <label for="start-date">Ophaaldatum</label>
                                            <input type="date" id="start-date" name="start-date" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="end-date">Afleverdatum</label>
                                            <input type="date" id="end-date" name="end-date" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-section">
                                    <h4>Betaalgegevens</h4>
                                    
                                    <div class="payment-methods">
                                        <label class="payment-method">
                                            <input type="radio" name="payment-method" value="credit-card" checked>
                                            <div class="payment-method-content">
                                                <img src="/assets/images/icons/credit-card.svg" alt="Credit Card">
                                                <span>Creditcard</span>
                                            </div>
                                        </label>
                                        <label class="payment-method">
                                            <input type="radio" name="payment-method" value="ideal">
                                            <div class="payment-method-content">
                                                <img src="/assets/images/icons/ideal.svg" alt="iDEAL">
                                                <span>iDEAL</span>
                                            </div>
                                        </label>
                                        <label class="payment-method">
                                            <input type="radio" name="payment-method" value="paypal">
                                            <div class="payment-method-content">
                                                <img src="/assets/images/icons/paypal.svg" alt="PayPal">
                                                <span>PayPal</span>
                                            </div>
                                        </label>
                                    </div>

                                    <div id="credit-card-form">
                                        <div class="form-group">
                                            <label for="card-name">Naam op kaart</label>
                                            <input type="text" id="card-name" name="card-name" placeholder="Jouw naam">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number">Kaartnummer</label>
                                            <input type="text" id="card-number" name="card-number" placeholder="0000 0000 0000 0000">
                                        </div>
                                        <div class="card-details">
                                            <div class="form-group">
                                                <label for="expiry-date">Vervaldatum</label>
                                                <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/JJ">
                                            </div>
                                            <div class="form-group">
                                                <label for="cvc">CVC</label>
                                                <input type="text" id="cvc" name="cvc" placeholder="123">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="ideal-form" style="display: none;">
                                        <div class="form-group">
                                            <label for="ideal-bank">Kies je bank</label>
                                            <select id="ideal-bank" name="ideal-bank" class="form-control">
                                                <option value="INGB">ING</option>
                                                <option value="RABO">Rabobank</option>
                                                <option value="ABNA">ABN AMRO</option>
                                                <option value="SNSB">SNS Bank</option>
                                                <option value="ASNB">ASN Bank</option>
                                                <option value="RBRB">RegioBank</option>
                                                <option value="KNAB">Knab</option>
                                                <option value="BUNQ">bunq</option>
                                                <option value="TRIO">Triodos Bank</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="paypal-form" style="display: none;">
                                        <p>U wordt doorgestuurd naar PayPal om de betaling af te ronden.</p>
                                        <button type="button" class="paypal-button">
                                            <img src="/assets/images/icons/paypal.svg" alt="PayPal" style="height: 24px; vertical-align: middle; margin-right: 10px;">
                                            Betalen met PayPal
                                        </button>
                                    </div>
                                </div>

                                <button type="submit" class="book-button">
                                    <span class="button-text">Nu huren</span>
                                    <span class="button-icon">→</span>
                                </button>
                            </form>

                            <div class="booking-info">
                                <p>✓ Directe bevestiging</p>
                                <p>✓ Gratis annulering tot 24u voor huur</p>
                                <p>✓ Veilige betaling</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="error-section">
            <div class="container">
                <div class="error-content">
                    <h2>Auto niet gevonden</h2>
                    <p>De opgegeven auto bestaat niet in onze database.</p>
                    <a href="/ons-aanbod" class="button-primary">Bekijk ons aanbod</a>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<style>
.car-detail-page {
    background: #f8fafc;
    min-height: 100vh;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Hero Section */
.car-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 60px 0 40px;
}

.hero-content {
    text-align: center;
}

.breadcrumb {
    margin-bottom: 20px;
    font-size: 14px;
    opacity: 0.9;
}

.breadcrumb a {
    color: white;
    text-decoration: none;
}

.breadcrumb span {
    margin: 0 8px;
}

.car-hero h1 {
    font-size: 3rem;
    font-weight: 700;
    margin: 0 0 20px 0;
    letter-spacing: -0.02em;
}

.car-badge {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

.badge-type {
    background: rgba(255, 255, 255, 0.2);
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 500;
    backdrop-filter: blur(10px);
}

.rating {
    display: flex;
    align-items: center;
    gap: 8px;
}

.review-count {
    font-size: 14px;
    opacity: 0.9;
}

/* Main Layout */
.car-main {
    padding: 60px 0;
}

.car-layout {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 60px;
    align-items: start;
}

/* Left Column */
.car-left {
    display: flex;
    flex-direction: column;
    gap: 40px;
}

.car-image-section {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.car-image {
    text-align: center;
    margin-bottom: 20px;
}

.car-image img {
    max-width: 100%;
    height: auto;
    border-radius: 12px;
}

.car-gallery {
    display: flex;
    gap: 12px;
    justify-content: center;
}

.gallery-thumb {
    width: 80px;
    height: 60px;
    border-radius: 8px;
    overflow: hidden;
    cursor: pointer;
    border: 2px solid transparent;
    transition: all 0.2s;
}

.gallery-thumb.active {
    border-color: #667eea;
}

.gallery-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Specifications */
.car-specifications {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.car-specifications h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin: 0 0 24px 0;
    color: #1f2937;
}

.specs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.spec-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px;
    background: #f8fafc;
    border-radius: 12px;
    transition: all 0.2s;
}

.spec-item:hover {
    background: #e2e8f0;
    transform: translateY(-2px);
}

.spec-icon {
    font-size: 24px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border-radius: 8px;
}

.spec-content {
    display: flex;
    flex-direction: column;
}

.spec-label {
    font-size: 14px;
    color: #64748b;
}

.spec-value {
    font-size: 16px;
    font-weight: 500;
    color: #1f2937;
}

/* Description */
.car-description {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    line-height: 1.6;
}

.car-description h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 16px;
    color: #1f2937;
}

.car-description p {
    color: #4b5563;
    margin-bottom: 24px;
}

.features-list h4 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 12px;
}

.features-list ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.features-list li {
    color: #4b5563;
}

/* Right Column - Booking */
.car-right {
    position: sticky;
    top: 20px;
}

.booking-card {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.price-section {
    text-align: right;
    margin-bottom: 24px;
    padding-bottom: 24px;
    border-bottom: 1px solid #e5e7eb;
}

.price-main {
    margin-bottom: 4px;
}

.price-amount {
    font-size: 2.25rem;
    font-weight: 700;
    color: #1f2937;
}

.price-period {
    font-size: 1rem;
    color: #6b7280;
    margin-left: 4px;
}

.price-details {
    font-size: 14px;
    color: #6b7280;
}

.booking-form .form-section {
    margin-bottom: 24px;
}

.booking-form h4 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 16px;
    color: #1f2937;
}

.date-inputs {
    display: flex;
    gap: 16px;
}

.form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 14px;
    font-weight: 500;
    color: #374151;
    margin-bottom: 8px;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 16px;
    transition: all 0.2s;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 2px rgba(102, 126, 234, 0.4);
}

.card-details {
    display: flex;
    gap: 16px;
}

.book-button {
    width: 100%;
    background: #4f46e5;
    color: white;
    padding: 16px;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.2s;
}

.book-button:hover {
    background: #4338ca;
    transform: translateY(-2px);
}

.booking-info {
    margin-top: 24px;
    text-align: center;
    font-size: 14px;
    color: #6b7280;
}

.booking-info p {
    margin: 4px 0;
}

.error-section {
    padding: 80px 0;
    text-align: center;
}

.error-content h2 {
    font-size: 2rem;
    color: #1f2937;
    margin-bottom: 16px;
}

.error-content p {
    color: #4b5563;
    margin-bottom: 24px;
}

.button-primary {
    background: #4f46e5;
    color: white;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.2s;
}

.button-primary:hover {
    background: #4338ca;
}

/* Payment Methods */
.payment-methods {
    display: flex;
    gap: 12px;
    margin-bottom: 24px;
}

.payment-method {
    flex: 1;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.2s;
}

.payment-method:hover {
    border-color: #667eea;
}

.payment-method input[type="radio"] {
    display: none;
}

.payment-method-content {
    padding: 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    text-align: center;
}

.payment-method-content img {
    height: 32px;
}

.payment-method-content span {
    font-size: 14px;
    font-weight: 500;
    color: #374151;
}

.payment-method input[type="radio"]:checked + .payment-method-content {
    background: rgba(102, 126, 234, 0.1);
    border-color: #667eea;
    box-shadow: 0 0 0 2px #667eea;
}

.payment-method input[type="radio"]:checked + .payment-method-content span {
    color: #4f46e5;
}

#ideal-form, #paypal-form {
    margin-top: 16px;
}

.paypal-button {
    width: 100%;
    background: #ffc439;
    color: #1f2937;
    padding: 12px;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
}

.paypal-button:hover {
    background: #fbb405;
}

@media (max-width: 992px) {
    .car-layout {
        grid-template-columns: 1fr;
    }
    .car-right {
        position: static;
        margin-top: 40px;
    }
}

@media (max-width: 768px) {
    .car-hero h1 {
        font-size: 2.5rem;
    }
    .date-inputs {
        flex-direction: column;
    }
}

@media (max-width: 480px) {
    .payment-methods {
        flex-direction: column;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const paymentMethodRadios = document.querySelectorAll('input[name="payment-method"]');
    const creditCardForm = document.getElementById('credit-card-form');
    const idealForm = document.getElementById('ideal-form');
    const paypalForm = document.getElementById('paypal-form');
    
    const creditCardInputs = creditCardForm.querySelectorAll('input');
    const idealInputs = idealForm.querySelectorAll('select');

    function togglePaymentForms() {
        const selectedMethod = document.querySelector('input[name="payment-method"]:checked').value;
        
        creditCardForm.style.display = 'none';
        idealForm.style.display = 'none';
        paypalForm.style.display = 'none';
        
        creditCardInputs.forEach(input => input.required = false);
        idealInputs.forEach(input => input.required = false);

        if (selectedMethod === 'credit-card') {
            creditCardForm.style.display = 'block';
            creditCardInputs.forEach(input => input.required = true);
        } else if (selectedMethod === 'ideal') {
            idealForm.style.display = 'block';
            idealInputs.forEach(input => input.required = true);
        } else if (selectedMethod === 'paypal') {
            paypalForm.style.display = 'block';
        }
    }

    paymentMethodRadios.forEach(radio => {
        radio.addEventListener('change', togglePaymentForms);
    });

    
    togglePaymentForms();

    
    const startDateInput = document.getElementById('start-date');
    const endDateInput = document.getElementById('end-date');

    
    const today = new Date().toISOString().split('T')[0];
    startDateInput.setAttribute('min', today);
    endDateInput.setAttribute('min', today);

    startDateInput.addEventListener('change', function() {
        if (endDateInput.value && endDateInput.value < startDateInput.value) {
            endDateInput.value = startDateInput.value;
        }
        endDateInput.setAttribute('min', startDateInput.value);
    });
});
</script>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?> 