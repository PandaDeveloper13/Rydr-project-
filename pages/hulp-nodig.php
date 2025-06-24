<?php
$root_path = $_SERVER['DOCUMENT_ROOT'];
require $root_path . "/includes/header.php";
?>

<main class="help-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background">
            <div class="hero-pattern"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hulp nodig?</h1>
                    <p class="hero-subtitle">We staan 24/7 voor je klaar om al je vragen te beantwoorden</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Support</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">< 2min</span>
                            <span class="stat-label">Reactietijd</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">Tevredenheid</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="/assets/images/car-rent-header-image-1.png" alt="Rydr klantenservice">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Options -->
    <section class="contact-options">
        <div class="container">
            <div class="section-header">
                <h2>Hoe kunnen we je helpen?</h2>
                <p>Kies de manier die het beste bij je past</p>
            </div>
            
            <div class="contact-grid">
                <div class="contact-card primary">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Direct bellen</h3>
                    <p>Spreek direct met een van onze medewerkers</p>
                    <a href="tel:0101234567" class="contact-link">
                        <span class="phone-number">010-123 45 67</span>
                        <span class="availability">Ma-Vr 8:00-20:00, Za-Zo 9:00-18:00</span>
                    </a>
                    <div class="card-badge">Aanbevolen</div>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Live chat</h3>
                    <p>Start een gesprek met een van onze medewerkers</p>
                    <button class="chat-button" onclick="startChat()">
                        <span>Start chat</span>
                        <span class="status-indicator online"></span>
                    </button>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>E-mail</h3>
                    <p>Stuur ons een e-mail en we reageren binnen 24 uur</p>
                    <a href="mailto:info@rydr.nl" class="contact-link">
                        <span class="email">info@rydr.nl</span>
                        <span class="response-time">Reactie binnen 24u</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2>Veelgestelde vragen</h2>
                <p>Vind snel antwoord op de meest gestelde vragen</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="faq-content">
                        <h3>Hoe kan ik een auto reserveren?</h3>
                        <p>Selecteer een auto uit ons aanbod, kies je gewenste datum en tijd, en voltooi de reservering via ons online systeem. Je ontvangt direct een bevestiging per e-mail.</p>
                        <div class="faq-steps">
                            <span class="step">1. Kies je auto</span>
                            <span class="step">2. Selecteer datum</span>
                            <span class="step">3. Bevestig reservering</span>
                        </div>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21 12c-1 0-2-1-2-2s1-2 2-2 2 1 2 2-1 2-2 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3 12c1 0 2-1 2-2s-1-2-2-2-2 1-2 2 1 2 2 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="faq-content">
                        <h3>Wat zijn de huurvoorwaarden?</h3>
                        <p>Je moet minimaal 21 jaar zijn en een geldig rijbewijs hebben. We accepteren creditcards en bankpassen als betalingsmethode.</p>
                        <div class="requirements">
                            <span class="requirement">✓ 21+ jaar</span>
                            <span class="requirement">✓ Geldig rijbewijs</span>
                            <span class="requirement">✓ Creditcard/bankpas</span>
                        </div>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="12" y1="9" x2="12" y2="13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="12" y1="17" x2="12.01" y2="17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="faq-content">
                        <h3>Kan ik de reservering annuleren?</h3>
                        <p>Ja, je kunt tot 24 uur voor de geplande ophaaldatum kosteloos annuleren. Bij latere annulering kunnen er kosten in rekening worden gebracht.</p>
                        <div class="cancellation-info">
                            <span class="free-cancel">Gratis annulering tot 24u voor</span>
                            <span class="cancel-fee">Kosten bij latere annulering</span>
                        </div>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="faq-content">
                        <h3>Wat gebeurt er bij schade?</h3>
                        <p>Alle auto's zijn verzekerd tegen schade. Bij een ongeluk bel je direct onze 24/7 hulplijn. We helpen je met alle formaliteiten.</p>
                        <div class="insurance-info">
                            <span class="insurance">✓ Volledige verzekering</span>
                            <span class="support">✓ 24/7 hulplijn</span>
                            <span class="replacement">✓ Vervangende auto</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-container">
                <div class="form-header">
                    <h2>Stel je vraag</h2>
                    <p>Kun je het antwoord niet vinden? Stuur ons een bericht en we helpen je verder.</p>
                </div>
                
                <?php if (isset($_SESSION['feedback_message'])): ?>
                    <div class="feedback-message success">
                        <div class="feedback-icon">✓</div>
                        <div class="feedback-text">
                            <?= htmlspecialchars($_SESSION['feedback_message']) ?>
                        </div>
                    </div>
                    <?php unset($_SESSION['feedback_message']); ?>
                <?php endif; ?>
                
                <form action="/includes/process-help.php" method="POST" class="contact-form">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Naam *</label>
                            <input type="text" id="name" name="name" placeholder="Jouw naam" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" id="email" name="email" placeholder="jouw@email.nl" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Onderwerp *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Kies een onderwerp</option>
                            <option value="reservering">Reservering</option>
                            <option value="betaling">Betaling</option>
                            <option value="schade">Schade</option>
                            <option value="overig">Overig</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Bericht *</label>
                        <textarea id="message" name="message" rows="6" placeholder="Beschrijf je vraag of probleem..." required></textarea>
                    </div>

                    <button type="submit" class="submit-button">
                        <span>Verstuur bericht</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>

<script>
function startChat() {
    // Simulate chat opening
    const button = event.target.closest('.chat-button');
    button.innerHTML = '<span>Verbinden...</span><span class="status-indicator connecting"></span>';
    
    setTimeout(() => {
        alert('Chat wordt binnenkort beschikbaar! Voor nu kun je ons bellen of e-mailen.');
        button.innerHTML = '<span>Start chat</span><span class="status-indicator online"></span>';
    }, 1000);
}
</script>

<style>
.help-page {
    background: #f8fafc;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.1;
}

.hero-pattern {
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle at 25% 25%, white 2px, transparent 2px);
    background-size: 50px 50px;
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
    z-index: 1;
}

.hero-text h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin: 0 0 16px 0;
    letter-spacing: -0.02em;
}

.hero-subtitle {
    font-size: 1.25rem;
    opacity: 0.9;
    margin: 0 0 40px 0;
    line-height: 1.6;
}

.hero-stats {
    display: flex;
    gap: 40px;
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 4px;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.hero-image {
    text-align: center;
}

.hero-image img {
    max-width: 100%;
    height: auto;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

/* Contact Options */
.contact-options {
    padding: 80px 0;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 16px 0;
}

.section-header p {
    font-size: 1.1rem;
    color: #6b7280;
    margin: 0;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.contact-card {
    background: white;
    border-radius: 16px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
    position: relative;
}

.contact-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.contact-card.primary {
    border: 2px solid #667eea;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.contact-card.primary .card-icon {
    background: rgba(255, 255, 255, 0.2);
    color: white;
}

.card-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background: #10b981;
    color: white;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.card-icon {
    width: 64px;
    height: 64px;
    background: #f3f4f6;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    color: #667eea;
}

.contact-card h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin: 0 0 12px 0;
}

.contact-card p {
    color: #6b7280;
    margin: 0 0 24px 0;
    line-height: 1.6;
}

.contact-card.primary p {
    color: rgba(255, 255, 255, 0.8);
}

.contact-link {
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: inherit;
}

.phone-number, .email {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 4px;
}

.availability, .response-time {
    font-size: 0.9rem;
    opacity: 0.7;
}

.chat-button {
    background: #667eea;
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s;
}

.chat-button:hover {
    background: #5a67d8;
    transform: translateY(-2px);
}

.status-indicator {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #10b981;
}

.status-indicator.connecting {
    background: #f59e0b;
    animation: pulse 1s infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

/* FAQ Section */
.faq-section {
    padding: 80px 0;
    background: white;
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    gap: 30px;
}

.faq-card {
    background: #f8fafc;
    border-radius: 16px;
    padding: 30px;
    display: flex;
    gap: 20px;
    transition: all 0.3s ease;
    border: 1px solid #e5e7eb;
}

.faq-card:hover {
    background: white;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transform: translateY(-4px);
}

.faq-icon {
    width: 48px;
    height: 48px;
    background: #667eea;
    color: white;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.faq-content h3 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 12px 0;
}

.faq-content p {
    color: #6b7280;
    line-height: 1.6;
    margin: 0 0 16px 0;
}

.faq-steps, .requirements, .cancellation-info, .insurance-info {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.step, .requirement, .free-cancel, .insurance, .support, .replacement {
    background: white;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.85rem;
    font-weight: 500;
    border: 1px solid #e5e7eb;
}

.cancel-fee {
    background: #fef3c7;
    color: #92400e;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.85rem;
    font-weight: 500;
}

/* Contact Form */
.contact-form-section {
    padding: 80px 0;
    background: #f8fafc;
}

.form-container {
    max-width: 600px;
    margin: 0 auto;
    background: white;
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.form-header {
    text-align: center;
    margin-bottom: 40px;
}

.form-header h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 12px 0;
}

.form-header p {
    color: #6b7280;
    margin: 0;
}

.feedback-message {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px;
    border-radius: 8px;
    margin-bottom: 24px;
}

.feedback-message.success {
    background: #d1fae5;
    color: #065f46;
    border: 1px solid #a7f3d0;
}

.feedback-icon {
    font-size: 1.2rem;
    font-weight: bold;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 0.9rem;
    font-weight: 600;
    color: #374151;
    margin-bottom: 8px;
}

.form-group input,
.form-group select,
.form-group textarea {
    padding: 12px 16px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.2s;
    background: white;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

.submit-button {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    padding: 16px 32px;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.2s;
    margin-top: 16px;
}

.submit-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px -5px rgba(102, 126, 234, 0.4);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .hero-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .hero-text h1 {
        font-size: 2.5rem;
    }
    
    .hero-stats {
        justify-content: center;
    }
    
    .faq-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .hero-section {
        padding: 60px 0;
    }
    
    .hero-text h1 {
        font-size: 2rem;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 20px;
    }
    
    .contact-grid {
        grid-template-columns: 1fr;
    }
    
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .container {
        padding: 0 16px;
    }
    
    .form-container {
        padding: 24px;
    }
    
    .contact-card,
    .faq-card {
        padding: 24px;
    }
}

@media (max-width: 480px) {
    .hero-text h1 {
        font-size: 1.75rem;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .contact-card,
    .faq-card {
        padding: 20px;
    }
    
    .faq-card {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<?php require $root_path . "/includes/footer.php"; ?>
