<?php 
$root_path = $_SERVER['DOCUMENT_ROOT'];
require $root_path . "/includes/header.php"; 
?>

<main>
    <div class="blog-page">
        <!-- Hero Section -->
        <div class="blog-hero">
            <div class="hero-content">
                <h1 class="hero-title">Rydr Blog</h1>
                <p class="hero-subtitle">Ontdek verhalen over reizen, auto's en de toekomst van mobiliteit. Van praktische tips tot inspirerende roadtrips.</p>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Artikelen</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">10K+</span>
                        <span class="stat-label">Lezers</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">5</span>
                        <span class="stat-label">Categorieën</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="floating-elements">
                    <div class="floating-card card-1">
                        <div class="card-icon">🚗</div>
                        <span>Auto's</span>
                    </div>
                    <div class="floating-card card-2">
                        <div class="card-icon">🌍</div>
                        <span>Reizen</span>
                    </div>
                    <div class="floating-card card-3">
                        <div class="card-icon">⚡</div>
                        <span>Tech</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Categories -->
        <div class="blog-categories">
            <div class="container">
                <div class="category-tabs">
                    <button class="category-tab active" data-category="all">Alle Artikelen</button>
                    <button class="category-tab" data-category="travel">Reizen & Roadtrips</button>
                    <button class="category-tab" data-category="cars">Auto's & Technologie</button>
                    <button class="category-tab" data-category="tips">Praktische Tips</button>
                    <button class="category-tab" data-category="sustainability">Duurzaamheid</button>
                    <button class="category-tab" data-category="news">Nieuws & Updates</button>
                </div>
            </div>
        </div>

        <!-- Featured Article -->
        <div class="featured-article">
            <div class="container">
                <div class="featured-card" data-aos="fade-up">
                    <div class="featured-image">
                        <img src="/assets/images/blog/featured-electric-cars.jpg" alt="De Toekomst van Elektrisch Rijden">
                        <div class="featured-overlay">
                            <span class="featured-badge">Featured</span>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="article-meta">
                            <span class="category">Auto's & Technologie</span>
                            <span class="date">15 Maart 2024</span>
                            <span class="read-time">8 min lezen</span>
                        </div>
                        <h2>De Toekomst van Elektrisch Rijden: Wat Je Moet Weten</h2>
                        <p>Elektrische auto's zijn niet meer weg te denken uit het straatbeeld. In dit uitgebreide artikel duiken we diep in de wereld van elektrisch rijden. Wat zijn de voordelen? Waar moet je op letten bij het huren van een elektrische auto? En wat brengt de toekomst ons nog meer?</p>
                        <div class="featured-actions">
                            <a href="#" class="button-primary">Lees Meer</a>
                            <div class="article-stats">
                                <span>👁️ 2.5K views</span>
                                <span>❤️ 128 likes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="blog-grid-section">
            <div class="container">
                <h2 class="section-title">Laatste Artikelen</h2>
                <div class="blog-grid">
                    <!-- Article 1 -->
                    <article class="blog-card" data-category="travel" data-aos="fade-up">
                        <div class="blog-image">
                            <img src="/assets/images/blog/roadtrip-italy.jpg" alt="Roadtrip door Italië">
                            <div class="image-overlay">
                                <span class="category-tag">Reizen & Roadtrips</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="article-meta">
                                <span class="date">12 Maart 2024</span>
                                <span class="read-time">6 min lezen</span>
                            </div>
                            <h3>De Perfecte Roadtrip door Italië: Van Milaan tot Sicilië</h3>
                            <p>Ontdek de mooiste routes door Italië, van de kronkelende kustwegen langs de Amalfi Coast tot de uitgestrekte landschappen van Toscane. We geven je tips voor de perfecte auto voor elke reis.</p>
                            <div class="blog-actions">
                                <a href="#" class="read-more">Lees Meer →</a>
                                <div class="article-stats">
                                    <span>👁️ 1.8K</span>
                                    <span>❤️ 95</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Article 2 -->
                    <article class="blog-card" data-category="tips" data-aos="fade-up" data-aos-delay="100">
                        <div class="blog-image">
                            <img src="/assets/images/blog/car-maintenance.jpg" alt="Auto Onderhoud">
                            <div class="image-overlay">
                                <span class="category-tag">Praktische Tips</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="article-meta">
                                <span class="date">10 Maart 2024</span>
                                <span class="read-time">5 min lezen</span>
                            </div>
                            <h3>Essentiële Auto Onderhoud Tips voor Langere Reizen</h3>
                            <p>Voordat je op een lange reis gaat, is het belangrijk om je auto goed te controleren. We delen de belangrijkste onderhoudstips die je reis veiliger en comfortabeler maken.</p>
                            <div class="blog-actions">
                                <a href="#" class="read-more">Lees Meer →</a>
                                <div class="article-stats">
                                    <span>👁️ 1.2K</span>
                                    <span>❤️ 67</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Article 3 -->
                    <article class="blog-card" data-category="sustainability" data-aos="fade-up" data-aos-delay="200">
                        <div class="blog-image">
                            <img src="/assets/images/blog/green-mobility.jpg" alt="Groene Mobiliteit">
                            <div class="image-overlay">
                                <span class="category-tag">Duurzaamheid</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="article-meta">
                                <span class="date">8 Maart 2024</span>
                                <span class="read-time">7 min lezen</span>
                            </div>
                            <h3>Groene Mobiliteit: Hoe Je Milieuvriendelijker Kunt Reizen</h3>
                            <p>Duurzaam reizen wordt steeds belangrijker. Ontdek hoe je je ecologische voetafdruk kunt verkleinen tijdens het reizen, van het kiezen van de juiste auto tot bewuste reisbeslissingen.</p>
                            <div class="blog-actions">
                                <a href="#" class="read-more">Lees Meer →</a>
                                <div class="article-stats">
                                    <span>👁️ 980</span>
                                    <span>❤️ 54</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Article 4 -->
                    <article class="blog-card" data-category="cars" data-aos="fade-up" data-aos-delay="300">
                        <div class="blog-image">
                            <img src="/assets/images/blog/autonomous-driving.jpg" alt="Autonoom Rijden">
                            <div class="image-overlay">
                                <span class="category-tag">Auto's & Technologie</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="article-meta">
                                <span class="date">5 Maart 2024</span>
                                <span class="read-time">9 min lezen</span>
                            </div>
                            <h3>Autonoom Rijden: De Stand van Zaken in 2024</h3>
                            <p>Autonome voertuigen zijn de toekomst van transport. We bespreken de huidige stand van de technologie, de uitdagingen en wat we kunnen verwachten in de komende jaren.</p>
                            <div class="blog-actions">
                                <a href="#" class="read-more">Lees Meer →</a>
                                <div class="article-stats">
                                    <span>👁️ 1.5K</span>
                                    <span>❤️ 89</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Article 5 -->
                    <article class="blog-card" data-category="travel" data-aos="fade-up" data-aos-delay="400">
                        <div class="blog-image">
                            <img src="/assets/images/blog/scotland-highlands.jpg" alt="Schotse Hooglanden">
                            <div class="image-overlay">
                                <span class="category-tag">Reizen & Roadtrips</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="article-meta">
                                <span class="date">3 Maart 2024</span>
                                <span class="read-time">6 min lezen</span>
                            </div>
                            <h3>Roadtrip door de Schotse Hooglanden: Een Onvergetelijke Reis</h3>
                            <p>Ontdek de ruige schoonheid van de Schotse Hooglanden per auto. Van historische kastelen tot adembenemende landschappen, dit is een reis die je niet snel zult vergeten.</p>
                            <div class="blog-actions">
                                <a href="#" class="read-more">Lees Meer →</a>
                                <div class="article-stats">
                                    <span>👁️ 1.1K</span>
                                    <span>❤️ 73</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Article 6 -->
                    <article class="blog-card" data-category="news" data-aos="fade-up" data-aos-delay="500">
                        <div class="blog-image">
                            <img src="/assets/images/blog/rydr-update.jpg" alt="Rydr Platform Update">
                            <div class="image-overlay">
                                <span class="category-tag">Nieuws & Updates</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="article-meta">
                                <span class="date">1 Maart 2024</span>
                                <span class="read-time">4 min lezen</span>
                            </div>
                            <h3>Nieuwe Rydr Platform Features: Wat is Er Veranderd?</h3>
                            <p>We hebben ons platform verbeterd met nieuwe features die je huurervaring nog beter maken. Ontdek wat er nieuw is en hoe je optimaal gebruik kunt maken van deze verbeteringen.</p>
                            <div class="blog-actions">
                                <a href="#" class="read-more">Lees Meer →</a>
                                <div class="article-stats">
                                    <span>👁️ 890</span>
                                    <span>❤️ 42</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="newsletter-section">
            <div class="container">
                <div class="newsletter-content">
                    <h2>Blijf Op de Hoogte</h2>
                    <p>Schrijf je in voor onze nieuwsbrief en ontvang de laatste artikelen, tips en exclusieve aanbiedingen direct in je inbox.</p>
                    <form class="newsletter-form">
                        <div class="form-group">
                            <input type="email" placeholder="Je email adres" required>
                            <button type="submit" class="button-primary">Inschrijven</button>
                        </div>
                        <p class="form-note">We respecteren je privacy. Uitschrijven kan altijd.</p>
                    </form>
                </div>
            </div>
        </div>

        <!-- Popular Topics -->
        <div class="popular-topics">
            <div class="container">
                <h2 class="section-title">Populaire Onderwerpen</h2>
                <div class="topics-grid">
                    <div class="topic-card" data-aos="fade-up">
                        <div class="topic-icon">🚗</div>
                        <h3>Elektrische Auto's</h3>
                        <p>Alles over EV's, laadstations en duurzaam rijden</p>
                        <span class="article-count">12 artikelen</span>
                    </div>
                    <div class="topic-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="topic-icon">🗺️</div>
                        <h3>Roadtrips</h3>
                        <p>De beste routes en bestemmingen voor je volgende avontuur</p>
                        <span class="article-count">18 artikelen</span>
                    </div>
                    <div class="topic-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="topic-icon">🔧</div>
                        <h3>Auto Onderhoud</h3>
                        <p>Tips en tricks voor het onderhoud van je huurauto</p>
                        <span class="article-count">8 artikelen</span>
                    </div>
                    <div class="topic-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="topic-icon">🌱</div>
                        <h3>Duurzaamheid</h3>
                        <p>Groene mobiliteit en milieuvriendelijk reizen</p>
                        <span class="article-count">15 artikelen</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
/* Blog Page Styles */
.blog-page {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    min-height: 100vh;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Hero Section */
.blog-hero {
    background: linear-gradient(135deg, #3563e9 0%, #1e40af 100%);
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
    background: linear-gradient(45deg, #ffffff, #e2e8f0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
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
    margin-top: 2rem;
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

.floating-elements {
    position: relative;
    width: 300px;
    height: 300px;
}

.floating-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 1rem;
    text-align: center;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    animation: float 6s ease-in-out infinite;
}

.card-1 {
    top: 0;
    left: 0;
    animation-delay: 0s;
}

.card-2 {
    top: 50px;
    right: 0;
    animation-delay: 2s;
}

.card-3 {
    bottom: 0;
    left: 50px;
    animation-delay: 4s;
}

.card-icon {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.floating-card span {
    font-size: 0.9rem;
    font-weight: 600;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

/* Blog Categories */
.blog-categories {
    background: white;
    padding: 2rem 0;
    border-bottom: 1px solid #e2e8f0;
}

.category-tabs {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.category-tab {
    background: #f1f5f9;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    color: #64748b;
    cursor: pointer;
    transition: all 0.3s ease;
}

.category-tab.active,
.category-tab:hover {
    background: #3563e9;
    color: white;
}

/* Featured Article */
.featured-article {
    padding: 4rem 0;
}

.featured-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
}

.featured-image {
    position: relative;
    height: 400px;
    overflow: hidden;
}

.featured-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.featured-overlay {
    position: absolute;
    top: 1rem;
    right: 1rem;
}

.featured-badge {
    background: #fbbf24;
    color: #1e293b;
    padding: 0.5rem 1rem;
    border-radius: 15px;
    font-size: 0.9rem;
    font-weight: 600;
}

.featured-content {
    padding: 3rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.article-meta {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    color: #64748b;
}

.category {
    color: #3563e9;
    font-weight: 600;
}

.featured-content h2 {
    font-size: 2rem;
    color: #1e293b;
    margin-bottom: 1rem;
    font-weight: 700;
    line-height: 1.3;
}

.featured-content p {
    color: #64748b;
    line-height: 1.7;
    margin-bottom: 2rem;
}

.featured-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.article-stats {
    display: flex;
    gap: 1rem;
    font-size: 0.9rem;
    color: #64748b;
}

/* Blog Grid */
.blog-grid-section {
    padding: 4rem 0;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    color: #1e293b;
    margin-bottom: 3rem;
    font-weight: 700;
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.blog-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.blog-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.blog-card:hover .blog-image img {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 1rem;
    left: 1rem;
}

.category-tag {
    background: rgba(53, 99, 233, 0.9);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.blog-content {
    padding: 2rem;
}

.blog-content h3 {
    font-size: 1.25rem;
    color: #1e293b;
    margin-bottom: 1rem;
    font-weight: 700;
    line-height: 1.4;
}

.blog-content p {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.blog-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.read-more {
    color: #3563e9;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.read-more:hover {
    color: #1e40af;
}

/* Newsletter Section */
.newsletter-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
    color: white;
}

.newsletter-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.newsletter-content h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.newsletter-content p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    line-height: 1.6;
}

.newsletter-form {
    max-width: 400px;
    margin: 0 auto;
}

.form-group {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-group input {
    flex: 1;
    padding: 1rem;
    border: none;
    border-radius: 10px;
    font-size: 1rem;
}

.form-group button {
    padding: 1rem 2rem;
    background: #3563e9;
    color: white;
    border: none;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s ease;
}

.form-group button:hover {
    background: #1e40af;
}

.form-note {
    font-size: 0.9rem;
    opacity: 0.7;
}

/* Popular Topics */
.popular-topics {
    padding: 4rem 0;
    background: white;
}

.topics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.topic-card {
    background: #f8fafc;
    padding: 2rem;
    border-radius: 16px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.topic-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.topic-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.topic-card h3 {
    font-size: 1.25rem;
    color: #1e293b;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.topic-card p {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.article-count {
    background: #3563e9;
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Button Styles */
.button-primary {
    background: #3563e9;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
}

.button-primary:hover {
    background: #1e40af;
    transform: translateY(-2px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .blog-hero {
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
    
    .floating-elements {
        display: none;
    }
    
    .container {
        padding: 0 1rem;
    }
    
    .featured-card {
        grid-template-columns: 1fr;
    }
    
    .featured-content {
        padding: 2rem;
    }
    
    .blog-grid {
        grid-template-columns: 1fr;
    }
    
    .topics-grid {
        grid-template-columns: 1fr;
    }
    
    .form-group {
        flex-direction: column;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .featured-content h2 {
        font-size: 1.5rem;
    }
    
    .blog-content {
        padding: 1.5rem;
    }
    
    .blog-actions {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
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
    
    // Category filter functionality
    const categoryTabs = document.querySelectorAll('.category-tab');
    const blogCards = document.querySelectorAll('.blog-card');
    
    categoryTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active tab
            categoryTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Show/hide blog cards
            blogCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Newsletter form submission
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            alert('Bedankt voor je inschrijving! We sturen je binnenkort de nieuwsbrief.');
            this.reset();
        });
    }
});
</script>

<?php require $root_path . "/includes/footer.php"; ?> 