<?php 
$root_path = $_SERVER['DOCUMENT_ROOT'];
require $root_path . "/includes/header.php"; 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$sollicitatie = $_SESSION['sollicitatie'] ?? null;
?>

<main class="bedankt-page">
    
    <section class="success-section">
        <div class="container">
            <div class="success-content" data-aos="fade-up">
                <div class="success-animation">
                    <div class="checkmark-circle">
                        <div class="checkmark"></div>
                    </div>
                </div>
                <h1 class="success-title">Bedankt voor je sollicitatie!</h1>
                <div class="success-message">
                    <?php if ($sollicitatie): ?>
                        <p class="message-intro">Beste <strong><?= htmlspecialchars($sollicitatie['naam']) ?></strong>,</p>
                        <p class="message-detail">We hebben je sollicitatie voor de functie <strong><?= htmlspecialchars($sollicitatie['functie']) ?></strong> succesvol ontvangen!</p>
                    <?php else: ?>
                        <p class="message-intro">Beste sollicitant,</p>
                        <p class="message-detail">We hebben je sollicitatie succesvol ontvangen!</p>
                    <?php endif; ?>
                    <p class="message-info">Ons HR-team zal je sollicitatie zorgvuldig bekijken en neemt binnen 3 werkdagen contact met je op.</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="next-steps-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Wat gebeurt er nu?</h2>
                <p>Een overzicht van de volgende stappen in het sollicitatieproces</p>
            </div>
            
            <div class="steps-timeline">
                <div class="step-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Sollicitatie Review</h3>
                        <p>Ons HR-team bekijkt je sollicitatie en CV binnen 24 uur.</p>
                        <div class="step-icon">📋</div>
                    </div>
                </div>
                
                <div class="step-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Eerste Contact</h3>
                        <p>We nemen binnen 3 werkdagen contact met je op voor een eerste gesprek.</p>
                        <div class="step-icon">📞</div>
                    </div>
                </div>
                
                <div class="step-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Interview</h3>
                        <p>Bij een positieve eerste indruk nodigen we je uit voor een persoonlijk gesprek.</p>
                        <div class="step-icon">🤝</div>
                    </div>
                </div>
                
                <div class="step-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Beslissing</h3>
                        <p>Na het interview nemen we een definitieve beslissing en informeren we je direct.</p>
                        <div class="step-icon">✅</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="contact-info-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-icon">📧</div>
                    <h3>Email Contact</h3>
                    <p>Voor vragen over je sollicitatie</p>
                    <a href="mailto:careers@rydr.nl" class="contact-link">careers@rydr.nl</a>
                </div>
                
                <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-icon">📞</div>
                    <h3>Telefoon</h3>
                    <p>Direct contact met HR</p>
                    <a href="tel:+31101234567" class="contact-link">010-123 45 67</a>
                </div>
                
                <div class="contact-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-icon">🏢</div>
                    <h3>Hoofdkantoor</h3>
                    <p>Bezoek ons kantoor</p>
                    <span class="contact-text">Weena 505, Rotterdam</span>
                </div>
            </div>
        </div>
    </section>

    
    <section class="faq-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Veelgestelde Vragen</h2>
                <p>Antwoorden op de meest voorkomende vragen over solliciteren</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Hoe lang duurt het voordat ik antwoord krijg?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We streven ernaar om binnen 3 werkdagen contact met je op te nemen. In drukke periodes kan dit iets langer duren, maar we laten je altijd weten waar je aan toe bent.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Wat als ik geen antwoord krijg?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Als je na 5 werkdagen nog geen bericht hebt ontvangen, neem dan gerust contact met ons op via careers@rydr.nl of bel ons op 010-123 45 67.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Kan ik mijn sollicitatie nog aanpassen?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ja, je kunt je sollicitatie nog aanpassen door een nieuwe email te sturen naar careers@rydr.nl met je naam en de gewenste wijzigingen.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Wat gebeurt er tijdens het interview?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Tijdens het interview bespreken we je ervaring, motivatie en verwachtingen. We geven je ook meer informatie over de functie en onze bedrijfscultuur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Meer weten over Rydr?</h2>
                <p>Ontdek meer over onze cultuur, team en andere carrièremogelijkheden</p>
                <div class="cta-actions">
                    <a href="/pages/over-ons.php" class="btn-primary">Over ons</a>
                    <a href="/pages/vacatures.php" class="btn-secondary">Bekijk alle vacatures</a>
                    <a href="/pages/het-team.php" class="btn-secondary">Ontmoet ons team</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Bedankt Page Styles */
.bedankt-page {
    background: #f8fafc;
    min-height: 100vh;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Success Section */
.success-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
    color: white;
    text-align: center;
}

.success-content {
    max-width: 800px;
    margin: 0 auto;
}

.success-animation {
    margin-bottom: 3rem;
}

.checkmark-circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: #3563e9;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    animation: pulse 2s infinite;
    position: relative;
}

.checkmark-circle::before {
    content: '';
    position: absolute;
    width: 140px;
    height: 140px;
    border: 3px solid rgba(53, 99, 233, 0.3);
    border-radius: 50%;
    animation: ripple 2s infinite;
}

.checkmark {
    width: 40px;
    height: 20px;
    border: 4px solid white;
    border-top: none;
    border-right: none;
    transform: rotate(-45deg);
    animation: checkmark 0.6s ease-in-out 0.5s both;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes ripple {
    0% { transform: scale(1); opacity: 1; }
    100% { transform: scale(1.5); opacity: 0; }
}

@keyframes checkmark {
    0% { transform: rotate(-45deg) scale(0); }
    100% { transform: rotate(-45deg) scale(1); }
}

.success-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 2rem;
    background: linear-gradient(45deg, #ffffff, #e2e8f0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.success-message {
    font-size: 1.2rem;
    line-height: 1.8;
}

.message-intro {
    font-size: 1.3rem;
    margin-bottom: 1rem;
    color: #fbbf24;
    font-weight: 600;
}

.message-detail {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
    opacity: 0.9;
}

.message-info {
    font-size: 1rem;
    opacity: 0.8;
    background: rgba(255, 255, 255, 0.1);
    padding: 1.5rem;
    border-radius: 15px;
    border-left: 4px solid #3563e9;
}

/* Next Steps Section */
.next-steps-section {
    padding: 6rem 0;
    background: white;
}

.section-header {
    text-align: center;
    margin-bottom: 4rem;
}

.section-header h2 {
    font-size: 3rem;
    color: #1e293b;
    margin-bottom: 1rem;
    font-weight: 700;
}

.section-header p {
    font-size: 1.25rem;
    color: #64748b;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.steps-timeline {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    position: relative;
}

.step-item {
    background: #f8fafc;
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.step-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.step-number {
    width: 50px;
    height: 50px;
    background: #3563e9;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
    margin: 0 auto 1.5rem;
}

.step-content h3 {
    font-size: 1.25rem;
    color: #1e293b;
    margin-bottom: 1rem;
    font-weight: 600;
}

.step-content p {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.step-icon {
    font-size: 2rem;
    margin-top: 1rem;
}

/* Contact Info Section */
.contact-info-section {
    padding: 6rem 0;
    background: #f8fafc;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.contact-card {
    background: white;
    padding: 2.5rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.contact-icon {
    font-size: 3rem;
    margin-bottom: 1.5rem;
}

.contact-card h3 {
    font-size: 1.5rem;
    color: #1e293b;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.contact-card p {
    color: #64748b;
    margin-bottom: 1rem;
}

.contact-link {
    color: #3563e9;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

.contact-link:hover {
    color: #1e40af;
}

.contact-text {
    color: #3563e9;
    font-weight: 600;
    font-size: 1.1rem;
}

/* FAQ Section */
.faq-section {
    padding: 6rem 0;
    background: white;
}

.faq-grid {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: #f8fafc;
    border-radius: 15px;
    margin-bottom: 1rem;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.faq-question {
    padding: 2rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background-color 0.3s ease;
}

.faq-question:hover {
    background: #e2e8f0;
}

.faq-question h3 {
    font-size: 1.1rem;
    color: #1e293b;
    font-weight: 600;
    margin: 0;
}

.faq-toggle {
    font-size: 1.5rem;
    color: #3563e9;
    font-weight: 700;
    transition: transform 0.3s ease;
}

.faq-answer {
    padding: 0 2rem 2rem;
    display: none;
    color: #64748b;
    line-height: 1.6;
}

.faq-item.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-item.active .faq-answer {
    display: block;
}

/* CTA Section */
.cta-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, #3563e9 0%, #1e40af 100%);
    color: white;
}

.cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.cta-content h2 {
    font-size: 3rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.cta-content p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    line-height: 1.6;
}

.cta-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-primary, .btn-secondary {
    padding: 1rem 2rem;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-primary {
    background: white;
    color: #3563e9;
}

.btn-primary:hover {
    background: #f8fafc;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(255, 255, 255, 0.2);
}

.btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
}

/* Animation classes */
[data-aos] {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}

[data-aos].aos-animate {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive Design */
@media (max-width: 768px) {
    .success-title {
        font-size: 2.5rem;
    }
    
    .section-header h2,
    .cta-content h2 {
        font-size: 2rem;
    }
    
    .steps-timeline {
        grid-template-columns: 1fr;
    }
    
    .contact-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-primary,
    .btn-secondary {
        width: 100%;
        max-width: 300px;
        text-align: center;
    }
    
    .container {
        padding: 0 1rem;
    }
}

@media (max-width: 480px) {
    .success-title {
        font-size: 2rem;
    }
    
    .section-header h2,
    .cta-content h2 {
        font-size: 1.75rem;
    }
    
    .checkmark-circle {
        width: 100px;
        height: 100px;
    }
    
    .checkmark {
        width: 30px;
        height: 15px;
    }
    
    .step-item,
    .contact-card {
        padding: 1.5rem;
    }
}
</style>

<script>
// Simple AOS-like animation implementation
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('aos-animate');
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('[data-aos]').forEach(el => {
        observer.observe(el);
    });
});

// FAQ toggle function
function toggleFAQ(element) {
    const faqItem = element.closest('.faq-item');
    const isActive = faqItem.classList.contains('active');
    
    // Close all FAQ items
    document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('active');
    });
    
    // Open clicked item if it wasn't active
    if (!isActive) {
        faqItem.classList.add('active');
    }
}

// Add some interactive effects
document.addEventListener('DOMContentLoaded', function() {
    // Add confetti effect on page load
    setTimeout(() => {
        createConfetti();
    }, 1000);
});

function createConfetti() {
    const colors = ['#3563e9', '#fbbf24', '#10b981', '#ef4444'];
    const confettiCount = 50;
    
    for (let i = 0; i < confettiCount; i++) {
        const confetti = document.createElement('div');
        confetti.style.position = 'fixed';
        confetti.style.width = '10px';
        confetti.style.height = '10px';
        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        confetti.style.left = Math.random() * 100 + 'vw';
        confetti.style.top = '-10px';
        confetti.style.pointerEvents = 'none';
        confetti.style.zIndex = '9999';
        confetti.style.borderRadius = '50%';
        
        document.body.appendChild(confetti);
        
        const animation = confetti.animate([
            { transform: 'translateY(0px) rotate(0deg)', opacity: 1 },
            { transform: `translateY(${window.innerHeight + 100}px) rotate(${Math.random() * 360}deg)`, opacity: 0 }
        ], {
            duration: Math.random() * 3000 + 2000,
            easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
        });
        
        animation.onfinish = () => {
            confetti.remove();
        };
    }
}
</script>

<?php require $root_path . "/includes/footer.php"; ?> 