<?php require_once __DIR__ . '/../includes/header.php'; ?>

<main class="thankyou-page">
    <div class="thankyou-background">
        <div class="background-pattern"></div>
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
    </div>
    
    <div class="container">
        <div class="thankyou-content">
            
            <div class="success-animation">
                <div class="checkmark-circle">
                    <div class="checkmark"></div>
                </div>
            </div>
            
           
            <div class="thankyou-text">
                <h1>Bedankt voor je bericht!</h1>
                <p class="subtitle">We hebben je vraag ontvangen en nemen zo spoedig mogelijk contact met je op.</p>
            </div>
            
            
            <div class="next-steps">
                <h3>Wat gebeurt er nu?</h3>
                <div class="steps-timeline">
                    <div class="step-item">
                        <div class="step-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="step-content">
                            <h4>Bericht ontvangen</h4>
                            <p>Je bericht is succesvol verzonden en opgeslagen in ons systeem.</p>
                        </div>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="step-content">
                            <h4>In behandeling</h4>
                            <p>Ons team neemt je vraag in behandeling en bereidt een antwoord voor.</p>
                        </div>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="step-content">
                            <h4>Antwoord ontvangen</h4>
                            <p>Je ontvangt binnen 24 uur een persoonlijk antwoord per e-mail.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="info-content">
                        <h4>Direct contact nodig?</h4>
                        <p>Bel ons direct op <a href="tel:0101234567">010-123 45 67</a></p>
                        <span class="availability">Beschikbaar: Ma-Vr 8:00-20:00</span>
                    </div>
                </div>
            </div>
            
            
            <div class="action-buttons">
                <a href="/pages/home.php" class="btn btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <polyline points="9,22 9,12 15,12 15,22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Terug naar homepage
                </a>
                
                <a href="/ons-aanbod" class="btn btn-secondary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Bekijk ons aanbod
                </a>
            </div>
        </div>
    </div>
</main>

<style>
.thankyou-page {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.thankyou-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.1;
}

.background-pattern {
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 25% 25%, white 2px, transparent 2px),
        radial-gradient(circle at 75% 75%, white 2px, transparent 2px);
    background-size: 100px 100px, 150px 150px;
    background-position: 0 0, 50px 50px;
}

.floating-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
}

.shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    animation: float 6s ease-in-out infinite;
}

.shape-1 {
    width: 80px;
    height: 80px;
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.shape-2 {
    width: 120px;
    height: 120px;
    top: 60%;
    right: 15%;
    animation-delay: 2s;
}

.shape-3 {
    width: 60px;
    height: 60px;
    bottom: 20%;
    left: 20%;
    animation-delay: 4s;
}

.shape-4 {
    width: 100px;
    height: 100px;
    top: 10%;
    right: 30%;
    animation-delay: 1s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 1;
}

.thankyou-content {
    background: white;
    border-radius: 24px;
    padding: 60px 40px;
    text-align: center;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    position: relative;
    overflow: hidden;
}

.thankyou-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
    background-size: 200% 100%;
    animation: gradient-shift 3s ease-in-out infinite;
}

@keyframes gradient-shift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

/* Success Animation */
.success-animation {
    margin-bottom: 40px;
}

.checkmark-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, #10b981, #059669);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    animation: scale-in 0.6s ease-out;
    box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
}

.checkmark {
    width: 32px;
    height: 32px;
    border: 3px solid white;
    border-top: none;
    border-left: none;
    transform: rotate(45deg);
    animation: checkmark-draw 0.8s ease-out 0.3s both;
}

@keyframes scale-in {
    from {
        transform: scale(0.5);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes checkmark-draw {
    0% {
        width: 0;
        height: 0;
        opacity: 0;
    }
    50% {
        width: 16px;
        height: 0;
        opacity: 1;
    }
    100% {
        width: 16px;
        height: 32px;
        opacity: 1;
    }
}

/* Text Content */
.thankyou-text {
    margin-bottom: 40px;
}

.thankyou-text h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 16px 0;
    animation: fade-in-up 0.8s ease-out 0.6s both;
}

.thankyou-text .subtitle {
    font-size: 1.1rem;
    color: #6b7280;
    line-height: 1.6;
    margin: 0;
    animation: fade-in-up 0.8s ease-out 0.8s both;
}

@keyframes fade-in-up {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Next Steps */
.next-steps {
    margin-bottom: 40px;
    animation: fade-in-up 0.8s ease-out 1s both;
}

.next-steps h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #374151;
    margin-bottom: 24px;
}

.steps-timeline {
    position: relative;
    border-left: 2px solid #e5e7eb;
    margin-left: 12px;
    padding-left: 32px;
}

.step-item {
    margin-bottom: 32px;
    position: relative;
}

.step-item:last-child {
    margin-bottom: 0;
}

.step-icon {
    position: absolute;
    left: -46px;
    top: 0;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #667eea;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.step-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 4px;
}

.step-content p {
    color: #6b7280;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* Contact Info */
.contact-info {
    margin-bottom: 40px;
    animation: fade-in-up 0.8s ease-out 1.2s both;
}

.info-card {
    display: flex;
    flex-direction: column;
    gap: 16px;
    padding: 20px;
    background: #f0f9ff;
    border: 1px solid #bae6fd;
    border-radius: 12px;
    max-width: 400px;
    margin: 0 auto;
}

.info-icon {
    width: 48px;
    height: 48px;
    background: #0ea5e9;
    color: white;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.info-content h4 {
    font-size: 1rem;
    font-weight: 600;
    color: #0c4a6e;
    margin: 0 0 4px 0;
}

.info-content p {
    color: #0369a1;
    margin: 0 0 4px 0;
    font-size: 0.9rem;
}

.info-content a {
    color: #0ea5e9;
    text-decoration: none;
    font-weight: 600;
}

.info-content a:hover {
    text-decoration: underline;
}

.availability {
    font-size: 0.8rem;
    color: #0891b2;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    flex-direction: column;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
    animation: fade-in-up 0.8s ease-out 1.4s both;
}

.btn {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 16px 24px;
    border-radius: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    font-size: 1rem;
}

.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px -5px rgba(102, 126, 234, 0.4);
}

.btn-secondary {
    background: white;
    color: #667eea;
    border: 2px solid #667eea;
}

.btn-secondary:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px -5px rgba(102, 126, 234, 0.2);
}

/* Responsive Design */
@media (max-width: 768px) {
    .thankyou-content {
        padding: 40px 24px;
        margin: 20px;
    }
    
    .thankyou-text h1 {
        font-size: 2rem;
    }
    
    .steps-timeline {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .action-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    .info-card {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .thankyou-text h1 {
        font-size: 1.75rem;
    }
    
    .thankyou-content {
        padding: 30px 20px;
    }
    
    .step-item {
        flex-direction: column;
        text-align: center;
    }
    
    .step-icon {
        align-self: center;
    }
}

@media (min-width: 640px) {
    .action-buttons {
        flex-direction: row;
    }
}
</style>

<?php require_once __DIR__ . '/../includes/footer.php'; ?> 