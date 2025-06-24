<?php $root_path = $_SERVER["DOCUMENT_ROOT"]; require $root_path . "/includes/header.php"; ?>

<main>
    <div class="event-guidelines-page">
        <div class="container">
            <h1>Event Richtlijnen</h1>
            <p>
                Hier komen de richtlijnen voor onze events en promoties.
            </p>
            <p>
                Deze pagina is onder constructie. Kom binnenkort terug voor meer informatie!
            </p>
            <a href="/pages/invite.php" class="button-primary">Terug naar uitnodigingen</a>
        </div>
    </div>
</main>

<style>
/* Event Guidelines Page Styles */
.event-guidelines-page {
    padding: 4rem 2rem;
    text-align: center;
    background-color: #f8fafc;
    min-height: 50vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.event-guidelines-page .container {
    max-width: 800px;
    margin: 0 auto;
}

.event-guidelines-page h1 {
    font-size: 2.5rem;
    color: #1e293b;
    margin-bottom: 1rem;
    font-weight: 700;
}

.event-guidelines-page p {
    font-size: 1.1rem;
    color: #64748b;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.event-guidelines-page .button-primary {
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
    margin-top: 2rem;
}

.event-guidelines-page .button-primary:hover {
    background: #059669;
    transform: translateY(-2px);
}
</style>

<?php require $root_path . "/includes/footer.php"; ?>