<?php 
$root_path = $_SERVER['DOCUMENT_ROOT'];
require $root_path . "/includes/header.php"; 
?>

<main>
    <div class="events-page">
        <!-- Hero Section -->
        <div class="events-hero">
            <div class="hero-content">
                <h1 class="hero-title">Events & Meetups</h1>
                <p class="hero-subtitle">Ontmoet andere Rydr-gebruikers, leer van experts en ontdek de toekomst van mobiliteit</p>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Events dit jaar</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Deelnemers</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">8</span>
                        <span class="stat-label">Steden</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="event-calendar">
                    <div class="calendar-day active">
                        <span class="day-number">25</span>
                        <span class="day-label">Mrt</span>
                    </div>
                    <div class="calendar-day">
                        <span class="day-number">15</span>
                        <span class="day-label">Apr</span>
                    </div>
                    <div class="calendar-day">
                        <span class="day-number">22</span>
                        <span class="day-label">Mei</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Filters -->
        <div class="events-filters">
            <div class="container">
                <div class="filter-tabs">
                    <button class="filter-tab active" data-filter="all">Alle Events</button>
                    <button class="filter-tab" data-filter="upcoming">Komende Events</button>
                    <button class="filter-tab" data-filter="past">Afgelopen Events</button>
                    <button class="filter-tab" data-filter="workshops">Workshops</button>
                    <button class="filter-tab" data-filter="networking">Networking</button>
                </div>
            </div>
        </div>

        <!-- Upcoming Events -->
        <div class="events-section upcoming-events" data-category="upcoming">
            <div class="container">
                <h2 class="section-title">Komende Events</h2>
                <div class="events-grid">
                    <div class="event-card featured" data-aos="fade-up">
                        <div class="event-badge">Featured</div>
                        <div class="event-image">
                            <img src="/assets/images/events/ev-workshop.jpg" alt="Elektrisch Rijden Workshop">
                            <div class="event-overlay">
                                <span class="event-category">Workshop</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <div class="date-icon">📅</div>
                                <div class="date-info">
                                    <span class="day">25</span>
                                    <span class="month">Maart</span>
                                    <span class="year">2024</span>
                                </div>
                            </div>
                            <h3>Elektrisch Rijden Workshop</h3>
                            <p class="event-location">📍 Amsterdam, Rydr HQ</p>
                            <p class="event-time">⏰ 14:00 - 17:00</p>
                            <p class="event-description">Leer alles over elektrisch rijden en ontdek de voordelen voor jouw dagelijks gebruik. Praktische tips, testritten en Q&A met experts.</p>
                            <div class="event-meta">
                                <span class="attendees">👥 45 deelnemers</span>
                                <span class="price">€25</span>
                            </div>
                            <div class="event-actions">
                                <a href="#" class="button-primary">Inschrijven</a>
                                <a href="#" class="button-secondary">Meer info</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="event-image">
                            <img src="/assets/images/events/ev-networking.jpg" alt="Netwerkborrel">
                            <div class="event-overlay">
                                <span class="event-category">Networking</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <div class="date-icon">📅</div>
                                <div class="date-info">
                                    <span class="day">15</span>
                                    <span class="month">April</span>
                                    <span class="year">2024</span>
                                </div>
                            </div>
                            <h3>Netwerkborrel Rotterdam</h3>
                            <p class="event-location">📍 Rotterdam, Rydr Hub</p>
                            <p class="event-time">⏰ 19:00 - 22:00</p>
                            <p class="event-description">Ontmoet andere Rydr-gebruikers en deel je ervaringen in een ontspannen sfeer. Gratis drankjes en hapjes inbegrepen.</p>
                            <div class="event-meta">
                                <span class="attendees">👥 80 deelnemers</span>
                                <span class="price">Gratis</span>
                            </div>
                            <div class="event-actions">
                                <a href="#" class="button-primary">Inschrijven</a>
                                <a href="#" class="button-secondary">Meer info</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="event-image">
                            <img src="/assets/images/events/ev-tech.jpg" alt="Tech Meetup">
                            <div class="event-overlay">
                                <span class="event-category">Tech</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <div class="date-icon">📅</div>
                                <div class="date-info">
                                    <span class="day">22</span>
                                    <span class="month">Mei</span>
                                    <span class="year">2024</span>
                                </div>
                            </div>
                            <h3>Tech Meetup: Autonoom Rijden</h3>
                            <p class="event-location">📍 Den Haag, Rydr Lab</p>
                            <p class="event-time">⏰ 20:00 - 22:30</p>
                            <p class="event-description">Ontdek de nieuwste technologieën in de autowereld en hun impact op autohuur. Met live demo's en expert panels.</p>
                            <div class="event-meta">
                                <span class="attendees">👥 60 deelnemers</span>
                                <span class="price">€15</span>
                            </div>
                            <div class="event-actions">
                                <a href="#" class="button-primary">Inschrijven</a>
                                <a href="#" class="button-secondary">Meer info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Past Events -->
        <div class="events-section past-events" data-category="past">
            <div class="container">
                <h2 class="section-title">Afgelopen Events</h2>
                <div class="events-grid">
                    <div class="event-card past" data-aos="fade-up">
                        <div class="event-image">
                            <img src="/assets/images/events/ev-sustainability.jpg" alt="Duurzaamheidssymposium">
                            <div class="event-overlay">
                                <span class="event-category">Symposium</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <div class="date-icon">📅</div>
                                <div class="date-info">
                                    <span class="day">10</span>
                                    <span class="month">Maart</span>
                                    <span class="year">2024</span>
                                </div>
                            </div>
                            <h3>Duurzaamheidssymposium</h3>
                            <p class="event-location">📍 Utrecht, Rydr Center</p>
                            <p class="event-description">Een dag vol inspirerende sprekers over duurzame mobiliteit en de toekomst van transport.</p>
                            <div class="event-meta">
                                <span class="attendees">👥 120 deelnemers</span>
                                <span class="status">Afgelopen</span>
                            </div>
                            <div class="event-actions">
                                <a href="#" class="button-secondary">Bekijk foto's</a>
                                <a href="#" class="button-outline">Bekijk video</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-card past" data-aos="fade-up" data-aos-delay="100">
                        <div class="event-image">
                            <img src="/assets/images/events/ev-roadtrip.jpg" alt="Roadtrip Workshop">
                            <div class="event-overlay">
                                <span class="event-category">Workshop</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <div class="date-icon">📅</div>
                                <div class="date-info">
                                    <span class="day">28</span>
                                    <span class="month">Februari</span>
                                    <span class="year">2024</span>
                                </div>
                            </div>
                            <h3>Roadtrip Planning Workshop</h3>
                            <p class="event-location">📍 Amsterdam, Rydr HQ</p>
                            <p class="event-description">Leer hoe je de perfecte roadtrip plant, van route planning tot accommodatie en budget.</p>
                            <div class="event-meta">
                                <span class="attendees">👥 75 deelnemers</span>
                                <span class="status">Afgelopen</span>
                            </div>
                            <div class="event-actions">
                                <a href="#" class="button-secondary">Bekijk foto's</a>
                                <a href="#" class="button-outline">Download slides</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Categories -->
        <div class="event-categories">
            <div class="container">
                <h2 class="section-title">Event Categorieën</h2>
                <div class="categories-grid">
                    <div class="category-card" data-aos="fade-up">
                        <div class="category-icon">🔧</div>
                        <h3>Workshops</h3>
                        <p>Praktische sessies over elektrisch rijden, onderhoud en meer</p>
                        <span class="event-count">4 events</span>
                    </div>
                    <div class="category-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="category-icon">🤝</div>
                        <h3>Networking</h3>
                        <p>Ontmoet andere Rydr-gebruikers en bouw je netwerk uit</p>
                        <span class="event-count">3 events</span>
                    </div>
                    <div class="category-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="category-icon">💻</div>
                        <h3>Tech Meetups</h3>
                        <p>Ontdek de nieuwste technologieën in de autowereld</p>
                        <span class="event-count">2 events</span>
                    </div>
                    <div class="category-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="category-icon">🌱</div>
                        <h3>Duurzaamheid</h3>
                        <p>Sessies over groene mobiliteit en milieuvriendelijk rijden</p>
                        <span class="event-count">3 events</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="events-cta">
            <div class="container">
                <div class="cta-content">
                    <h2>Organiseer je eigen event?</h2>
                    <p>Wil je een event organiseren met Rydr? We ondersteunen graag community events en kunnen helpen met locatie, promotie en meer.</p>
                    <div class="cta-actions">
                        <a href="/pages/hulp-nodig.php" class="button-primary">Contact opnemen</a>
                        <a href="#" class="button-secondary">Event Guidelines</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
/* Events Page Styles */
.events-page {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    min-height: 100vh;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Hero Section */
.events-hero {
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

.event-calendar {
    display: flex;
    gap: 1rem;
}

.calendar-day {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 1rem;
    text-align: center;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
}

.calendar-day.active {
    background: rgba(255, 255, 255, 0.2);
    transform: scale(1.05);
}

.day-number {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
}

.day-label {
    font-size: 0.8rem;
    opacity: 0.8;
}

/* Event Filters */
.events-filters {
    background: white;
    padding: 2rem 0;
    border-bottom: 1px solid #e2e8f0;
}

.filter-tabs {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.filter-tab {
    background: #f1f5f9;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    color: #64748b;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-tab.active,
.filter-tab:hover {
    background: #3563e9;
    color: white;
}

/* Events Section */
.events-section {
    padding: 4rem 0;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    color: #1e293b;
    margin-bottom: 3rem;
    font-weight: 700;
}

.events-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.event-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.event-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.event-card.featured {
    border: 2px solid #fbbf24;
}

.event-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: #fbbf24;
    color: #1e293b;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    z-index: 2;
}

.event-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.event-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.event-card:hover .event-image img {
    transform: scale(1.05);
}

.event-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(53, 99, 233, 0.8), rgba(30, 64, 175, 0.8));
    display: flex;
    align-items: flex-end;
    padding: 1rem;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.event-card:hover .event-overlay {
    opacity: 1;
}

.event-category {
    background: rgba(255, 255, 255, 0.9);
    color: #3563e9;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.event-content {
    padding: 2rem;
}

.event-date {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.date-icon {
    font-size: 1.5rem;
}

.date-info {
    display: flex;
    flex-direction: column;
}

.date-info .day {
    font-size: 1.5rem;
    font-weight: 700;
    color: #3563e9;
}

.date-info .month,
.date-info .year {
    font-size: 0.9rem;
    color: #64748b;
}

.event-content h3 {
    font-size: 1.5rem;
    color: #1e293b;
    margin-bottom: 0.5rem;
    font-weight: 700;
}

.event-location,
.event-time {
    color: #64748b;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
}

.event-description {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.event-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: #f8fafc;
    border-radius: 10px;
}

.attendees {
    color: #64748b;
    font-size: 0.9rem;
}

.price {
    background: #3563e9;
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-weight: 600;
    font-size: 0.9rem;
}

.event-actions {
    display: flex;
    gap: 1rem;
}

.button-primary {
    background: #3563e9;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
    flex: 1;
    text-align: center;
}

.button-primary:hover {
    background: #1e40af;
    transform: translateY(-2px);
}

.button-secondary {
    background: transparent;
    color: #3563e9;
    padding: 0.75rem 1.5rem;
    border: 2px solid #3563e9;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
    flex: 1;
    text-align: center;
}

.button-secondary:hover {
    background: #3563e9;
    color: white;
}

.button-outline {
    background: transparent;
    color: #64748b;
    padding: 0.75rem 1.5rem;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
    flex: 1;
    text-align: center;
}

.button-outline:hover {
    border-color: #64748b;
    color: #1e293b;
}

/* Past Events */
.event-card.past {
    opacity: 0.8;
}

.event-card.past .event-image {
    filter: grayscale(50%);
}

/* Event Categories */
.event-categories {
    padding: 4rem 0;
    background: white;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.category-card {
    background: #f8fafc;
    padding: 2rem;
    border-radius: 16px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.category-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.category-card h3 {
    font-size: 1.25rem;
    color: #1e293b;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.category-card p {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.event-count {
    background: #3563e9;
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* CTA Section */
.events-cta {
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

.cta-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

/* Responsive Design */
@media (max-width: 768px) {
    .events-hero {
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
    
    .event-calendar {
        display: none;
    }
    
    .container {
        padding: 0 1rem;
    }
    
    .events-grid {
        grid-template-columns: 1fr;
    }
    
    .categories-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .button-primary,
    .button-secondary {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .event-content {
        padding: 1.5rem;
    }
    
    .event-actions {
        flex-direction: column;
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
    
    // Filter functionality
    const filterTabs = document.querySelectorAll('.filter-tab');
    const eventSections = document.querySelectorAll('.events-section');
    
    filterTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active tab
            filterTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Show/hide sections
            eventSections.forEach(section => {
                if (filter === 'all' || section.getAttribute('data-category') === filter) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php require $root_path . "/includes/footer.php"; ?>
