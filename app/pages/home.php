<!DOCTYPE html>
<html lang="de">
<head>
    <!-- Meta-Tags für Barrierefreiheit und SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="HUERTA - Nachhaltige, saisonale und vegane Ernährung. Entdecke Rezepte, Inspiration und unseren nachhaltigen Kalender.">
    <meta name="keywords" content="vegan, saisonal, nachhaltig, bio, rezepte">
    <meta name="author" content="HUERTA">
    <meta name="theme-color" content="#2d5016">

    <title>HUERTA – Nachhaltige Saisonale Vegane Ernährung</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Favicon (optional) -->
    <link rel="icon" type="image/svg+xml"
          href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='75' font-size='75'>🌱</text></svg>">
</head>
<body>
<!-- Skip-to-Content Link für Barrierefreiheit -->
<a href="#main-content" class="skip-link">Zum Inhalt springen</a>

<div id="app">
    <!-- ============================================
         HEADER & NAVIGATION (Semantische Tags)
         ============================================ -->
    <header class="header" role="banner">
        <div class="container header__container">
            <!-- Logo -->
            <div class="header__logo">
                <h1>
                    <a href="/" title="HUERTA - Startseite">
                        <span aria-hidden="true">🌱</span> HUERTA
                    </a>
                </h1>
            </div>

            <!-- Hauptnavigation -->
            <nav class="header__nav" role="navigation" aria-label="Hauptnavigation">
                <ul>
                    <li>
                        <a href="/" class="nav-link active" aria-current="page">
                            Startseite
                        </a>
                    </li>
                    <li>
                        <a href="/seasonal-calendar" class="nav-link">
                            Saisonkalender
                        </a>
                    </li>
                    <li>
                        <a href="/recipes" class="nav-link">
                            Rezepte
                        </a>
                    </li>
                    <li>
                        <a href="/shop" class="nav-link">
                            Shop
                        </a>
                    </li>
                    <li>
                        <a href="/about" class="nav-link">
                            Über uns
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- ============================================
         HAUPTINHALT (Semantische Main-Section)
         ============================================ -->
    <main class="main-content" id="main-content" role="main">
        <!-- Hero-Bereich -->
        <section class="hero" aria-labelledby="hero-title">
            <div class="container">
                <h2 id="hero-title">Nachhaltig. Saisonal. Vegan.</h2>

                <p class="hero__subtitle">
                    Willkommen bei HUERTA – deiner Plattform für bewusste Ernährung im Einklang mit der Natur.
                    Entdecke saisonale Rezepte, einen praktischen Kalender und hochwertige nachhaltige Produkte.
                </p>

                <!-- Call-to-Action Buttons -->
                <div class="hero__cta">
                    <a href="/seasonal-calendar" class="btn btn--primary btn--large" title="Zum Saisonkalender">
                        🗓️ Saisonkalender erkunden
                    </a>
                    <a href="/shop" class="btn btn--secondary btn--large" title="Zum Shop">
                        🛍️ Shop besuchen
                    </a>
                </div>
            </div>
        </section>

        <!-- Feature-Übersicht -->
        <section class="features" aria-labelledby="features-title">
            <div class="container">
                <h2 id="features-title">Warum HUERTA?</h2>
                <div class="grid grid--3">
                    <article class="card">
                        <div class="card__body">
                            <h3>🌍 Nachhaltig</h3>
                            <p>Wir setzen auf umweltfreundliche Produkte und vegane Rezepte, die deinen ökologischen
                                Fußabdruck reduzieren.</p>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card__body">
                            <h3>📅 Saisonal</h3>
                            <p>Unser Saisonkalender zeigt dir, welche Obst- und Gemüsesorten gerade Saison haben – für
                                frische, lokale Zutaten.</p>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card__body">
                            <h3>🍃 Vegan</h3>
                            <p>Alle unsere Rezepte sind 100% vegan und vollgepackt mit Nährstoffen für ein gesundes
                                Leben.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <!-- ============================================
         FOOTER (Semantische Footer-Section)
         ============================================ -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <!-- Footer Content Grid -->
            <div class="footer__content">
                <!-- Über HUERTA -->
                <div class="footer__section">
                    <h3>HUERTA</h3>
                    <p>
                        Nachhaltige, saisonale und vegane Ernährung für ein harmonisches Leben im Einklang mit der
                        Natur.
                        Entdecke die Schönheit saisonaler Zutaten.
                    </p>
                </div>

                <!-- Navigation -->
                <nav class="footer__section" aria-label="Footer Navigation">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="/">Startseite</a></li>
                        <li><a href="/seasonal-calendar">Saisonkalender</a></li>
                        <li><a href="/recipes">Rezepte</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/about">Über uns</a></li>
                    </ul>
                </nav>

                <!-- Rechtliches & Kontakt -->
                <nav class="footer__section" aria-label="Rechtliche Links">
                    <h3>Rechtliches</h3>
                    <ul>
                        <li><a href="/contact" title="Kontaktformular">Kontakt</a></li>
                        <li><a href="/impressum" title="Rechtliche Informationen">Impressum</a></li>
                        <li><a href="/privacy" title="Datenschutzerklärung">Datenschutz</a></li>
                        <li><a href="/terms" title="Nutzungsbedingungen">AGB</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Footer Bottom -->
            <div class="footer__bottom">
                <p>&copy; <span id="year"></span> HUERTA. Alle Rechte vorbehalten.</p>
                <p>Entwickelt mit 🌱 für eine nachhaltige Zukunft.</p>
            </div>
        </div>
    </footer>
</div>

<!-- JavaScript -->
<script src="/assets/js/main.js"></script>

<!-- Jahr in Footer aktualisieren -->
<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
</body>
</html>
