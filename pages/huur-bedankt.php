<?php require $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$rented_car = $_SESSION['rented_car'] ?? null;

unset($_SESSION['rented_car']);
?>

<main class="thankyou-page">
    <div class="container">
        <div class="thankyou-card">
            <?php if ($rented_car): ?>
                <!-- Success Animation -->
                <div class="success-animation">
                    <div class="checkmark">
                        <svg class="checkmark-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="checkmark-check" fill="none" d="m14.1 27.2l7.1 7.2 16.7-16.8"/>
                        </svg>
                    </div>
                </div>

                <!-- Success Content -->
                <div class="thankyou-content">
                    <h1 class="thankyou-title">Huur succesvol!</h1>
                    <p class="thankyou-subtitle">Je reservering is bevestigd</p>
                    
                    <div class="car-summary">
                        <div class="car-icon">🚗</div>
                        <div class="car-details">
                            <h3><?= htmlspecialchars($rented_car['Auto']) ?></h3>
                            <p class="car-type"><?= htmlspecialchars($rented_car['Type']) ?></p>
                        </div>
                    </div>

                    <div class="confirmation-details">
                        <div class="detail-item">
                            <div class="detail-icon">📧</div>
                            <div class="detail-text">
                                <h4>E-mail bevestiging</h4>
                                <p>Je ontvangt binnen 5 minuten een bevestiging</p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-icon">📱</div>
                            <div class="detail-text">
                                <h4>SMS notificatie</h4>
                                <p>We sturen je een SMS met ophaal instructies</p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-icon">🕒</div>
                            <div class="detail-text">
                                <h4>24/7 Support</h4>
                                <p>Heb je vragen? Bel ons op 010-123 45 67</p>
                            </div>
                        </div>
                    </div>

                    <div class="next-steps">
                        <h3>Wat gebeurt er nu?</h3>
                        <div class="steps-timeline">
                            <div class="step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h4>Bevestiging ontvangen</h4>
                                    <p>Check je e-mail voor de reserveringsdetails</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h4>Auto ophalen</h4>
                                    <p>Kom naar onze locatie met je rijbewijs en ID</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h4>Veilig rijden</h4>
                                    <p>Geniet van je rit met volledige verzekering</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <!-- Fallback Content -->
                <div class="thankyou-content">
                    <div class="success-animation">
                        <div class="checkmark">
                            <svg class="checkmark-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark-check" fill="none" d="m14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                        </div>
                    </div>
                    
                    <h1 class="thankyou-title">Bedankt!</h1>
                    <p class="thankyou-subtitle">Je aanvraag is ontvangen</p>
                    <p class="thankyou-message">We nemen zo snel mogelijk contact met je op om je reservering te bevestigen.</p>
                </div>
            <?php endif; ?>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <a href="/pages/ons-aanbod.php" class="button-primary">
                    <span>Bekijk meer auto's</span>
                    <span class="button-icon">→</span>
                </a>
                <a href="/pages/home.php" class="button-secondary">
                    <span>Terug naar home</span>
                </a>
            </div>
        </div>
    </div>
</main>

<style>
.thankyou-page {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.container {
    max-width: 800px;
    width: 100%;
}

.thankyou-card {
    background: white;
    border-radius: 24px;
    padding: 60px 40px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.thankyou-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2);
}

/* Success Animation */
.success-animation {
    margin-bottom: 40px;
}

.checkmark {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    position: relative;
}

.checkmark-svg {
    width: 100%;
    height: 100%;
}

.checkmark-circle {
    stroke: #667eea;
    stroke-width: 2;
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
}

.checkmark-check {
    stroke: #667eea;
    stroke-width: 2;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

/* Content Styling */
.thankyou-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 8px 0;
    letter-spacing: -0.02em;
}

.thankyou-subtitle {
    font-size: 1.2rem;
    color: #6b7280;
    margin: 0 0 40px 0;
    font-weight: 500;
}

.thankyou-message {
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 40px;
}

/* Car Summary */
.car-summary {
    background: #f8fafc;
    border-radius: 16px;
    padding: 24px;
    margin: 40px 0;
    display: flex;
    align-items: center;
    gap: 16px;
    border: 1px solid #e5e7eb;
}

.car-icon {
    font-size: 48px;
    width: 80px;
    height: 80px;
    background: white;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.car-details h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 4px 0;
}

.car-type {
    color: #6b7280;
    font-size: 1rem;
    margin: 0;
}

/* Confirmation Details */
.confirmation-details {
    margin: 40px 0;
}

.detail-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 12px;
    margin-bottom: 16px;
    text-align: left;
    transition: all 0.2s;
}

.detail-item:hover {
    background: #e2e8f0;
    transform: translateY(-2px);
}

.detail-icon {
    font-size: 24px;
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.detail-text h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 4px 0;
}

.detail-text p {
    color: #6b7280;
    margin: 0;
    font-size: 0.95rem;
}

/* Next Steps */
.next-steps {
    margin: 40px 0;
    text-align: left;
}

.next-steps h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 24px 0;
    text-align: center;
}

.steps-timeline {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.step {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 12px;
    border-left: 4px solid #667eea;
    transition: all 0.2s;
}

.step:hover {
    background: #e2e8f0;
    transform: translateX(4px);
}

.step-number {
    width: 32px;
    height: 32px;
    background: #667eea;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 14px;
    flex-shrink: 0;
}

.step-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 4px 0;
}

.step-content p {
    color: #6b7280;
    margin: 0;
    font-size: 0.95rem;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: 16px;
    justify-content: center;
    margin-top: 40px;
    flex-wrap: wrap;
}

.button-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 16px 32px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s;
    border: none;
    cursor: pointer;
}

.button-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px -5px rgba(102, 126, 234, 0.4);
}

.button-icon {
    font-size: 18px;
    transition: transform 0.2s;
}

.button-primary:hover .button-icon {
    transform: translateX(4px);
}

.button-secondary {
    background: #f3f4f6;
    color: #374151;
    padding: 16px 32px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.2s;
    border: 1px solid #d1d5db;
}

.button-secondary:hover {
    background: #e5e7eb;
    transform: translateY(-2px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .thankyou-card {
        padding: 40px 24px;
    }
    
    .thankyou-title {
        font-size: 2rem;
    }
    
    .car-summary {
        flex-direction: column;
        text-align: center;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .button-primary,
    .button-secondary {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .thankyou-page {
        padding: 16px;
    }
    
    .thankyou-card {
        padding: 32px 20px;
    }
    
    .thankyou-title {
        font-size: 1.75rem;
    }
    
    .detail-item,
    .step {
        padding: 16px;
    }
}
</style>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>
