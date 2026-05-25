<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Über uns | HUERTA</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div id="app">
    <header class="header" role="banner">
        <div class="container header__container">
            <div class="header__logo">
                <h1>
                    <a href="/" title="Zur Startseite">
                        <span aria-hidden="true">🌱</span> HUERTA
                    </a>
                </h1>
            </div>
            <nav class="header__nav" role="navigation" aria-label="Hauptnavigation">
                <ul>
                    <li><a href="/" class="nav-link">Startseite</a></li>
                    <li><a href="/seasonal-calendar" class="nav-link">Saisonkalender</a></li>
                    <li><a href="/recipes" class="nav-link">Rezepte</a></li>
                    <li><a href="/shop" class="nav-link">Shop</a></li>
                    <li><a href="/about" class="nav-link active" aria-current="page">Über uns</a></li>
                    <li>
                        <a href="/cart" class="nav-link cart-link" title="Warenkorb">
                            🛒 <span class="cart-count" id="cart-count">0</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content" id="main-content" role="main">
        <div class="container">
            <h1>Über HUERTA</h1>

            <!-- Mission -->
            <section class="about-section" aria-labelledby="mission-title">
                <h2 id="mission-title">🌍 Unsere Mission</h2>
                <div class="grid grid--2">
                    <article>
                        <p>
                            HUERTA wurde gegründet, um Menschen dabei zu helfen, sich bewusster und nachhaltiger zu
                            ernähren.
                            Wir glauben, dass eine gute Ernährung im Einklang mit der Natur nicht nur gesünder für
                            unseren Körper
                            ist, sondern auch für unseren Planeten.
                        </p>
                        <p>
                            Unser Name "HUERTA" bedeutet im Spanischen "Garten" – ein Symbol für Wachstum,
                            Nachhaltigkeit und
                            die enge Verbindung zwischen Mensch und Natur.
                        </p>
                    </article>
                    <article>
                        <p>
                            Mit unserem Saisonkalender, den Rezepten und unserem Blog möchten wir dir zeigen, wie
                            einfach es
                            sein kann, saisonal und vegan zu leben. Jede Jahreszeit bringt ihre eigenen Schätze mit sich
                            –
                            Früchte und Gemüse, die in ihrer vollen Kraft und mit minimalem CO2-Fußabdruck verfügbar
                            sind.
                        </p>
                    </article>
                </div>
            </section>

            <!-- Werte -->
            <section class="about-values" aria-labelledby="values-title">
                <h2 id="values-title">Unsere Werte</h2>
                <div class="grid grid--3">
                    <div class="card">
                        <div class="card__body">
                            <h3>🌱 Nachhaltigkeit</h3>
                            <p>
                                Wir setzen auf regionale, saisonale und biologisch angebaute Produkte,
                                um unseren ökologischen Fußabdruck zu minimieren.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>🌿 Veganismus</h3>
                            <p>
                                Eine 100% vegane Ernährung ist nicht nur gut für die Umwelt,
                                sondern auch für deine Gesundheit und die Tiere.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>📚 Bildung</h3>
                            <p>
                                Wir möchten Menschen empower und inspirieren, ihre Ernährung
                                bewusster zu gestalten – mit Know-How und praktischen Tools.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Team -->
            <section class="about-team" aria-labelledby="team-title">
                <h2 id="team-title">👥 Unser Team</h2>
                <p style="text-align: center; margin-bottom: var(--space-xl);">
                    HUERTA wurde von einer leidenschaftlichen Gruppe von Menschen gegründet,
                    die an nachhaltige, saisonale und vegane Ernährung glauben.
                </p>
                <div class="grid grid--3">
                    <div class="team-member">
                        <div class="team-member__avatar">👨‍🌾</div>
                        <h3>Max Müller</h3>
                        <p class="team-role">Gründer & Visionar</p>
                        <p class="team-bio">
                            Leidenschaftliche Gärtner und Ernährungscoach mit einer klaren Vision
                            für eine nachhaltigere Zukunft.
                        </p>
                    </div>
                    <div class="team-member">
                        <div class="team-member__avatar">👩‍🍳</div>
                        <h3>Sarah Klein</h3>
                        <p class="team-role">Rezept-Entwicklung</p>
                        <p class="team-bio">
                            Vegane Köchin und Food-Blogger, die komplexe Rezepte einfach und
                            lecker macht.
                        </p>
                    </div>
                    <div class="team-member">
                        <div class="team-member__avatar">🎨</div>
                        <h3>Nina Schmidt</h3>
                        <p class="team-role">Design & Marketing</p>
                        <p class="team-bio">
                            Kreative Designerin, die HUERTA visuell zum Leben erweckt und unsere
                            Community aufbaut.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Impact -->
            <section class="about-impact" aria-labelledby="impact-title">
                <h2 id="impact-title">🌍 Unser Impact</h2>
                <div class="impact-stats">
                    <div class="stat">
                        <div class="stat-number">10.000+</div>
                        <div class="stat-label">Nutzer weltweit</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">5.000+</div>
                        <div class="stat-label">Kalender verkauft</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">Vegane Rezepte</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">500T</div>
                        <div class="stat-label">CO2 gespart</div>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="about-cta"
                     style="background: var(--color-light-gray); padding: var(--space-3xl); border-radius: var(--radius-lg); text-align: center;">
                <h2>Werde Teil der HUERTA Community</h2>
                <p>Gemeinsam können wir nachhaltige Ernährung zum Standard machen.</p>
                <div style="margin-top: var(--space-xl);">
                    <a href="/contact" class="btn btn--primary btn--large">Kontaktiere uns</a>
                    <a href="/shop" class="btn btn--secondary btn--large">Zum Shop</a>
                </div>
            </section>
        </div>
    </main>

    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer__content">
                <div class="footer__section">
                    <h3>HUERTA</h3>
                    <p>Nachhaltige, saisonale und vegane Ernährung für ein harmonisches Leben mit der Natur.</p>
                </div>
                <nav class="footer__section" aria-label="Footer Navigation">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="/">Startseite</a></li>
                        <li><a href="/seasonal-calendar">Saisonkalender</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/about">Über uns</a></li>
                    </ul>
                </nav>
                <nav class="footer__section" aria-label="Rechtliche Links">
                    <h3>Rechtliches</h3>
                    <ul>
                        <li><a href="/contact">Kontakt</a></li>
                        <li><a href="/impressum">Impressum</a></li>
                        <li><a href="/privacy">Datenschutz</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__bottom">
                <p>&copy; <span id="year"></span> HUERTA. Alle Rechte vorbehalten.</p>
            </div>
        </div>
    </footer>
</div>

<script src="/assets/js/main.js"></script>
<script>
    document.getElementById('year').textContent = new Date().getFullYear();
    updateCartCount();
</script>
</body>
</html>
