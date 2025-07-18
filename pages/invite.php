<?php $root_path = $_SERVER["DOCUMENT_ROOT"]; require $root_path . "/includes/header.php"; ?>

<main>
    <div class="invite-page">
        <!-- Hero Section -->
        <div class="invite-hero">
            <div class="hero-content">
                <h1 class="hero-title">Nodig Vrienden Uit</h1>
                <p class="hero-subtitle">Deel Rydr met je vrienden en familie. Jullie krijgen allebei geweldige voordelen!</p>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">€25</span>
                        <span class="stat-label">Voor jou</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">€25</span>
                        <span class="stat-label">Voor je vriend</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">∞</span>
                        <span class="stat-label">Uitnodigingen</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="invite-illustration">
                    <div class="friend-avatars">
                        <div class="avatar avatar-1">👤</div>
                        <div class="avatar avatar-2">👤</div>
                        <div class="avatar avatar-3">👤</div>
                    </div>
                    <div class="connection-lines">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- How It Works -->
        <div class="how-it-works">
            <div class="container">
                <h2 class="section-title">Hoe Werkt Het?</h2>
                <div class="steps-grid">
                    <div class="step-card" data-aos="fade-up">
                        <div class="step-number">1</div>
                        <div class="step-icon">📧</div>
                        <h3>Nodig Uit</h3>
                        <p>Deel je unieke uitnodigingslink met vrienden en familie via email, WhatsApp of sociale media.</p>
                    </div>
                    <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-number">2</div>
                        <div class="step-icon">🚗</div>
                        <h3>Ze Huren</h3>
                        <p>Je vriend gebruikt je link om zich te registreren en huurt hun eerste auto via Rydr.</p>
                    </div>
                    <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-number">3</div>
                        <div class="step-icon">💰</div>
                        <h3>Jullie Winnen</h3>
                        <p>Jullie krijgen allebei €25 tegoed voor je volgende huur. Geen limiet op uitnodigingen!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invite Form -->
        <div class="invite-form-section">
            <div class="container">
                <div class="invite-form-card">
                    <h2>Je Uitnodigingslink</h2>
                    <p>Deel deze link met vrienden en familie om ze uit te nodigen voor Rydr.</p>
                    
                    <div class="invite-link-container">
                        <input type="text" id="inviteLink" value="https://rydr.nl/invite?ref=USER123" readonly class="invite-link-input">
                        <button class="copy-button" onclick="copyInviteLink()">
                            <span class="copy-icon">📋</span>
                            <span class="copy-text">Kopieer</span>
                        </button>
                    </div>
                    
                    <div class="share-buttons">
                        <button class="share-button whatsapp" onclick="shareViaWhatsApp()">
                            <span class="share-icon">📱</span>
                            <span>WhatsApp</span>
                        </button>
                        <button class="share-button email" onclick="shareViaEmail()">
                            <span class="share-icon">📧</span>
                            <span>Email</span>
                        </button>
                        <button class="share-button facebook" onclick="shareViaFacebook()">
                            <span class="share-icon">👥</span>
                            <span>Facebook</span>
                        </button>
                        <button class="share-button twitter" onclick="shareViaTwitter()">
                            <span class="share-icon">🐦</span>
                            <span>Twitter</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rewards Section -->
        <div class="rewards-section">
            <div class="container">
                <h2 class="section-title">Jouw Beloningen</h2>
                <div class="rewards-grid">
                    <div class="reward-card" data-aos="fade-up">
                        <div class="reward-icon">🎁</div>
                        <h3>Welkomstbonus</h3>
                        <p>€25 tegoed voor elke vriend die zich registreert en hun eerste auto huurt.</p>
                    </div>
                    <div class="reward-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="reward-icon">⭐</div>
                        <h3>VIP Status</h3>
                        <p>Krijg VIP voordelen na 5 succesvolle uitnodigingen, inclusief gratis upgrades.</p>
                    </div>
                    <div class="reward-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="reward-icon">🏆</div>
                        <h3>Leaderboard</h3>
                        <p>Ding mee naar extra prijzen op onze maandelijkse leaderboard voor top uitnodigers.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Referral History -->
        <div class="referral-history">
            <div class="container">
                <h2 class="section-title">Je Uitnodigingen</h2>
                <div class="history-stats">
                    <div class="stat-card">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Uitgenodigd</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">8</span>
                        <span class="stat-label">Geregistreerd</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">6</span>
                        <span class="stat-label">Eerste Huur</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">€150</span>
                        <span class="stat-label">Verdiend</span>
                    </div>
                </div>
                
                <div class="referral-list">
                    <div class="referral-item">
                        <div class="referral-avatar">👤</div>
                        <div class="referral-info">
                            <h4>Sarah J.</h4>
                            <p>Uitgenodigd op 15 Maart 2024</p>
                        </div>
                        <div class="referral-status success">
                            <span>✅ €25 verdiend</span>
                        </div>
                    </div>
                    <div class="referral-item">
                        <div class="referral-avatar">👤</div>
                        <div class="referral-info">
                            <h4>Mike B.</h4>
                            <p>Uitgenodigd op 12 Maart 2024</p>
                        </div>
                        <div class="referral-status pending">
                            <span>⏳ Wacht op eerste huur</span>
                        </div>
                    </div>
                    <div class="referral-item">
                        <div class="referral-avatar">👤</div>
                        <div class="referral-info">
                            <h4>Lisa K.</h4>
                            <p>Uitgenodigd op 10 Maart 2024</p>
                        </div>
                        <div class="referral-status success">
                            <span>✅ €25 verdiend</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="benefits-section">
            <div class="container">
                <h2 class="section-title">Waarom Rydr Delen?</h2>
                <div class="benefits-grid">
                    <div class="benefit-card" data-aos="fade-up">
                        <div class="benefit-icon">🚗</div>
                        <h3>Eenvoudig Huren</h3>
                        <p>Geen gedoe met verzekeringen, onderhoud of verborgen kosten. Alles is inbegrepen.</p>
                    </div>
                    <div class="benefit-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-icon">💰</div>
                        <h3>Transparante Prijzen</h3>
                        <p>Geen verrassingen. Je betaalt alleen wat je ziet, zonder extra kosten.</p>
                    </div>
                    <div class="benefit-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-icon">🌱</div>
                        <h3>Duurzame Keuzes</h3>
                        <p>Veel elektrische en hybride opties beschikbaar voor milieubewuste reizigers.</p>
                    </div>
                    <div class="benefit-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="benefit-icon">📱</div>
                        <h3>Moderne App</h3>
                        <p>Huur, ontgrendel en betaal alles via onze gebruiksvriendelijke app.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="faq-section">
            <div class="container">
                <h2 class="section-title">Veelgestelde Vragen</h2>
                <div class="faq-grid">
                    <div class="faq-item" data-aos="fade-up">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            <h3>Hoeveel vrienden kan ik uitnodigen?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Er is geen limiet! Je kunt zoveel vrienden uitnodigen als je wilt. Voor elke vriend die zich registreert en hun eerste auto huurt, krijg je €25 tegoed.</p>
                        </div>
                    </div>
                    <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            <h3>Wanneer krijg ik mijn beloning?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Je krijgt je €25 tegoed zodra je vriend hun eerste auto heeft gehuurd en de huur succesvol is afgerond. Het tegoed wordt automatisch toegevoegd aan je account.</p>
                        </div>
                    </div>
                    <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            <h3>Kan ik mijn tegoed combineren?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Ja! Je kunt meerdere tegoeden combineren voor grotere kortingen. Er is geen limiet op het aantal tegoeden dat je kunt gebruiken.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Klaar om te Delen?</h2>
                    <p>Begin vandaag nog met het uitnodigen van vrienden en verdien geweldige beloningen!</p>
                    <div class="cta-buttons">
                        <button class="button-primary" onclick="scrollToInviteForm()">Nu Uitnodigen</button>
                        <a href="event-guidelines.php" class="button-secondary">Event Richtlijnen</a>
                        <a href="/" class="button-secondary">Meer Over Rydr</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
/* Invite Page Styles */
.invite-page {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    min-height: 100vh;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Hero Section */
.invite-hero {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
    padding: 4rem 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    overflow: hidden;
}

.hero-content {
    flex: 1;
    max-width: 600px;
    z-index: 2;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    line-height: 1.6;
}

.hero-stats {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
}

.stat {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 700;
    color: #fbbf24;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.hero-visual {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.invite-illustration {
    position: relative;
    width: 300px;
    height: 200px;
}

.friend-avatars {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
}

.avatar {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.3);
    animation: float 3s ease-in-out infinite;
}

.avatar-1 { animation-delay: 0s; }
.avatar-2 { animation-delay: 1s; }
.avatar-3 { animation-delay: 2s; }

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.connection-lines {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.line {
    position: absolute;
    height: 2px;
    background: rgba(255, 255, 255, 0.3);
    animation: pulse 2s infinite;
}

.line-1 {
    width: 100px;
    top: 40px;
    left: 50%;
    transform: translateX(-50%);
}

.line-2 {
    width: 100px;
    top: 40px;
    right: 50%;
    transform: translateX(50%);
}

@keyframes pulse {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 1; }
}

/* How It Works */
.how-it-works {
    padding: 4rem 0;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    color: #1e293b;
    margin-bottom: 3rem;
    font-weight: 700;
}

.steps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.step-card {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.step-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.step-number {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: #10b981;
    color: white;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.9rem;
}

.step-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.step-card h3 {
    font-size: 1.25rem;
    color: #1e293b;
    margin-bottom: 1rem;
    font-weight: 700;
}

.step-card p {
    color: #64748b;
    line-height: 1.6;
}

/* Invite Form */
.invite-form-section {
    padding: 4rem 0;
    background: white;
}

.invite-form-card {
    background: #f8fafc;
    padding: 3rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.invite-form-card h2 {
    font-size: 2rem;
    color: #1e293b;
    margin-bottom: 1rem;
    font-weight: 700;
}

.invite-form-card p {
    color: #64748b;
    margin-bottom: 2rem;
    font-size: 1.1rem;
}

.invite-link-container {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.invite-link-input {
    flex: 1;
    padding: 1rem;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    font-size: 1rem;
    background: white;
    color: #1e293b;
}

.copy-button {
    background: #10b981;
    color: white;
    border: none;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.copy-button:hover {
    background: #059669;
    transform: translateY(-2px);
}

.copy-icon {
    font-size: 1.2rem;
}

.share-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.share-button {
    background: white;
    border: 2px solid #e2e8f0;
    padding: 0.75rem 1.5rem;
    border-radius: 10px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
    color: #1e293b;
}

.share-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.share-button.whatsapp:hover {
    border-color: #25d366;
    color: #25d366;
}

.share-button.email:hover {
    border-color: #ea4335;
    color: #ea4335;
}

.share-button.facebook:hover {
    border-color: #1877f2;
    color: #1877f2;
}

.share-button.twitter:hover {
    border-color: #1da1f2;
    color: #1da1f2;
}

.share-icon {
    font-size: 1.2rem;
}

/* Rewards Section */
.rewards-section {
    padding: 4rem 0;
}

.rewards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.reward-card {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.reward-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.reward-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.reward-card h3 {
    font-size: 1.25rem;
    color: #1e293b;
    margin-bottom: 1rem;
    font-weight: 700;
}

.reward-card p {
    color: #64748b;
    line-height: 1.6;
}

/* Referral History */
.referral-history {
    padding: 4rem 0;
    background: white;
}

.history-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.stat-card {
    background: #f8fafc;
    padding: 2rem;
    border-radius: 16px;
    text-align: center;
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card .stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 700;
    color: #10b981;
    margin-bottom: 0.5rem;
}

.stat-card .stat-label {
    color: #64748b;
    font-size: 1rem;
    font-weight: 600;
}

.referral-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.referral-item {
    background: #f8fafc;
    padding: 1.5rem;
    border-radius: 16px;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: transform 0.3s ease;
}

.referral-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.referral-avatar {
    width: 50px;
    height: 50px;
    background: #e2e8f0;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.referral-info {
    flex: 1;
}

.referral-info h4 {
    font-size: 1.1rem;
    color: #1e293b;
    margin-bottom: 0.25rem;
    font-weight: 700;
}

.referral-info p {
    color: #64748b;
    font-size: 0.9rem;
}

.referral-status {
    font-weight: 600;
    font-size: 0.9rem;
}

.referral-status.success {
    color: #10b981;
}

.referral-status.pending {
    color: #f59e0b;
}

/* Benefits Section */
.benefits-section {
    padding: 4rem 0;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.benefit-card {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.benefit-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.benefit-card h3 {
    font-size: 1.25rem;
    color: #1e293b;
    margin-bottom: 1rem;
    font-weight: 700;
}

.benefit-card p {
    color: #64748b;
    line-height: 1.6;
}

/* FAQ Section */
.faq-section {
    padding: 4rem 0;
    background: white;
}

.faq-grid {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: #f8fafc;
    border-radius: 16px;
    margin-bottom: 1rem;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.faq-question {
    padding: 1.5rem;
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
    color: #10b981;
    font-weight: 700;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-answer {
    padding: 0 1.5rem;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 0 1.5rem 1.5rem;
    max-height: 200px;
}

.faq-answer p {
    color: #64748b;
    line-height: 1.6;
    margin: 0;
}

/* CTA Section */
.cta-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
    color: white;
}

.cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.cta-content h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.cta-content p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    line-height: 1.6;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

/* Button Styles */
.button-primary {
    background: #10b981;
    color: white;
    padding: 1rem 2rem;
    border: none;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
    cursor: pointer;
}

.button-primary:hover {
    background: #059669;
    transform: translateY(-2px);
}

.button-secondary {
    background: transparent;
    color: white;
    padding: 1rem 2rem;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
}

.button-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .invite-hero {
        flex-direction: column;
        text-align: center;
        padding: 3rem 1rem;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-stats {
        justify-content: center;
    }
    
    .invite-illustration {
        display: none;
    }
    
    .container {
        padding: 0 1rem;
    }
    
    .steps-grid {
        grid-template-columns: 1fr;
    }
    
    .rewards-grid {
        grid-template-columns: 1fr;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
    }
    
    .history-stats {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .invite-link-container {
        flex-direction: column;
    }
    
    .share-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .invite-form-card {
        padding: 2rem 1rem;
    }
    
    .history-stats {
        grid-template-columns: 1fr;
    }
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

// Copy invite link functionality
function copyInviteLink() {
    const inviteLink = document.getElementById('inviteLink');
    inviteLink.select();
    inviteLink.setSelectionRange(0, 99999);
    document.execCommand('copy');
    
    const copyButton = document.querySelector('.copy-button');
    const copyText = copyButton.querySelector('.copy-text');
    copyText.textContent = 'Gekopieerd!';
    
    setTimeout(() => {
        copyText.textContent = 'Kopieer';
    }, 2000);
}

// Share functionality
function shareViaWhatsApp() {
    const text = encodeURIComponent('Check Rydr uit! Huur eenvoudig auto\'s zonder gedoe. Gebruik mijn link: ' + document.getElementById('inviteLink').value);
    window.open(`https://wa.me/?text=${text}`, '_blank');
}

function shareViaEmail() {
    const subject = encodeURIComponent('Uitnodiging voor Rydr');
    const body = encodeURIComponent('Hoi! Ik dacht dat je Rydr wel interessant zou vinden. Het is een geweldige manier om auto\'s te huren zonder gedoe. Gebruik mijn link: ' + document.getElementById('inviteLink').value);
    window.open(`mailto:?subject=${subject}&body=${body}`, '_blank');
}

function shareViaFacebook() {
    const url = encodeURIComponent(document.getElementById('inviteLink').value);
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
}

function shareViaTwitter() {
    const text = encodeURIComponent('Check Rydr uit! Huur eenvoudig auto\'s zonder gedoe. ' + document.getElementById('inviteLink').value);
    window.open(`https://twitter.com/intent/tweet?text=${text}`, '_blank');
}

// FAQ toggle functionality
function toggleFAQ(element) {
    const faqItem = element.parentElement;
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

// Scroll to invite form
function scrollToInviteForm() {
    document.querySelector('.invite-form-section').scrollIntoView({
        behavior: 'smooth'
    });
}
</script>

<?php require $root_path . "/includes/footer.php"; ?>
