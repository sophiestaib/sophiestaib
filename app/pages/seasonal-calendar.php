<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisonkalender | HUERTA</title>
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
                    <li><a href="/seasonal-calendar" class="nav-link active" aria-current="page">Saisonkalender</a></li>
                    <li><a href="/recipes" class="nav-link">Rezepte</a></li>
                    <li><a href="/shop" class="nav-link">Shop</a></li>
                    <li><a href="/about" class="nav-link">Über uns</a></li>
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
            <h1>📅 Saisonkalender</h1>
            <p class="lead">Entdecke, welche Obst- und Gemüsesorten gerade Saison haben – für frische, lokale und
                nachhaltige Ernährung.</p>

            <!-- Monatliche Saisonkalender -->
            <section class="seasonal-section" aria-labelledby="seasonal-title">
                <h2 id="seasonal-title">Aktuelle Saison: Mai 2026</h2>

                <div class="seasonal-grid">
                    <!-- Januar -->
                    <article class="seasonal-card">
                        <h3>🥬 Januar</h3>
                        <p class="seasonal-month-text">Winter</p>
                        <ul class="seasonal-list">
                            <li>Kohl (Weiß-, Rot-, Blumenkohl)</li>
                            <li>Knollensellerie</li>
                            <li>Möhren</li>
                            <li>Pastinaken</li>
                            <li>Spinat</li>
                            <li>Äpfel (Lager)</li>
                            <li>Birnen (Lager)</li>
                        </ul>
                    </article>

                    <!-- Februar -->
                    <article class="seasonal-card">
                        <h3>🥕 Februar</h3>
                        <p class="seasonal-month-text">Spätenwinter</p>
                        <ul class="seasonal-list">
                            <li>Lauch</li>
                            <li>Zwiebeln</li>
                            <li>Knoblauch</li>
                            <li>Rote Bete</li>
                            <li>Feldsalat</li>
                            <li>Kale (Grünkohl)</li>
                            <li>Mandarinen</li>
                        </ul>
                    </article>

                    <!-- März -->
                    <article class="seasonal-card">
                        <h3>🌱 März</h3>
                        <p class="seasonal-month-text">Frühjahr</p>
                        <ul class="seasonal-list">
                            <li>Spargel</li>
                            <li>Radieschen</li>
                            <li>Kopfsalat</li>
                            <li>Rhabarber</li>
                            <li>Frühlingszwiebeln</li>
                            <li>Petersilie</li>
                            <li>Rucola</li>
                        </ul>
                    </article>

                    <!-- April -->
                    <article class="seasonal-card">
                        <h3>🍓 April</h3>
                        <p class="seasonal-month-text">Frühjahr</p>
                        <ul class="seasonal-list">
                            <li>Erdbeeren (Start)</li>
                            <li>Spargel</li>
                            <li>Salate</li>
                            <li>Brokkoli</li>
                            <li>Mangold</li>
                            <li>Frühlingskräuter</li>
                            <li>Kartoffeln (Frühjahrsernte)</li>
                        </ul>
                    </article>

                    <!-- Mai -->
                    <article class="seasonal-card"
                             style="border-color: var(--color-accent); box-shadow: 0 0 0 2px var(--color-accent);">
                        <h3>🌿 Mai</h3>
                        <p class="seasonal-month-text">Spätfrühling (JETZT!)</p>
                        <ul class="seasonal-list">
                            <li>Erdbeeren (Hochsaison)</li>
                            <li>Spargel</li>
                            <li>Salate</li>
                            <li>Erbsen</li>
                            <li>Bohnen</li>
                            <li>Rhabarber</li>
                            <li>Pflücksalate</li>
                        </ul>
                    </article>

                    <!-- Juni -->
                    <article class="seasonal-card">
                        <h3>🍒 Juni</h3>
                        <p class="seasonal-month-text">Frühsommer</p>
                        <ul class="seasonal-list">
                            <li>Kirschen</li>
                            <li>Erdbeeren</li>
                            <li>Stachelbeeren</li>
                            <li>Johannisbeeren</li>
                            <li>Zucchini</li>
                            <li>Kopfsalat</li>
                            <li>Kohlrabi</li>
                        </ul>
                    </article>

                    <!-- Juli -->
                    <article class="seasonal-card">
                        <h3>🍑 Juli</h3>
                        <p class="seasonal-month-text">Hochsommer</p>
                        <ul class="seasonal-list">
                            <li>Brombeeren</li>
                            <li>Heidelbeeren</li>
                            <li>Pfirsiche</li>
                            <li>Aprikosen</li>
                            <li>Tomaten</li>
                            <li>Paprika</li>
                            <li>Gurken</li>
                        </ul>
                    </article>

                    <!-- August -->
                    <article class="seasonal-card">
                        <h3>🍉 August</h3>
                        <p class="seasonal-month-text">Hochsommer</p>
                        <ul class="seasonal-list">
                            <li>Wassermelonen</li>
                            <li>Himbeeren</li>
                            <li>Brombeeren</li>
                            <li>Auberginen</li>
                            <li>Bohnen</li>
                            <li>Maïs</li>
                            <li>Pflaumen</li>
                        </ul>
                    </article>

                    <!-- September -->
                    <article class="seasonal-card">
                        <h3>🍇 September</h3>
                        <p class="seasonal-month-text">Frühherbst</p>
                        <ul class="seasonal-list">
                            <li>Trauben</li>
                            <li>Äpfel</li>
                            <li>Birnen</li>
                            <li>Pflaumen</li>
                            <li>Blaubeeren</li>
                            <li>Melonen</li>
                            <li>Kürbis (Start)</li>
                        </ul>
                    </article>

                    <!-- Oktober -->
                    <article class="seasonal-card">
                        <h3>🎃 Oktober</h3>
                        <p class="seasonal-month-text">Herbst</p>
                        <ul class="seasonal-list">
                            <li>Kürbis</li>
                            <li>Äpfel</li>
                            <li>Birnen</li>
                            <li>Quitten</li>
                            <li>Kastanien</li>
                            <li>Walnüsse</li>
                            <li>Trauben</li>
                        </ul>
                    </article>

                    <!-- November -->
                    <article class="seasonal-card">
                        <h3>🥔 November</h3>
                        <p class="seasonal-month-text">Spätherbst</p>
                        <ul class="seasonal-list">
                            <li>Pilze</li>
                            <li>Kürbis</li>
                            <li>Lagergemüse</li>
                            <li>Rosenkohl</li>
                            <li>Wirsing</li>
                            <li>Möhren</li>
                            <li>Nüsse</li>
                        </ul>
                    </article>

                    <!-- Dezember -->
                    <article class="seasonal-card">
                        <h3>🎄 Dezember</h3>
                        <p class="seasonal-month-text">Winter</p>
                        <ul class="seasonal-list">
                            <li>Kohl</li>
                            <li>Knollensellerie</li>
                            <li>Porree</li>
                            <li>Rote Bete</li>
                            <li>Pastinaken</li>
                            <li>Äpfel (Lager)</li>
                            <li>Birnen (Lager)</li>
                        </ul>
                    </article>
                </div>
            </section>

            <!-- Tipps -->
            <section class="seasonal-tips" aria-labelledby="tips-title">
                <h2 id="tips-title">💡 Tipps für saisonalen Einkauf</h2>
                <div class="grid grid--3">
                    <div class="card">
                        <div class="card__body">
                            <h3>🏪 Auf dem Wochenmarkt</h3>
                            <p>Frische garantiert! Der Wochenmarkt bietet die besten saisonalen Produkte zu fairen
                                Preisen.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>🚜 Bio-Hofläden</h3>
                            <p>Direkt vom Erzeuger! Viele Bauern verkaufen ihre saisonalen Produkte im Hofladen.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>📦 Abo-Kisten</h3>
                            <p>Regelmäßig frische, saisonale Produkte direkt ins Haus – perfekt für Familien!</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA zum Shop -->
            <section class="seasonal-cta" aria-labelledby="cta-title">
                <h2 id="cta-title">Unser Saisonkalender zum Ausdrucken</h2>
                <p>Möchtest du unseren hochwertigen Saisonkalender an deiner Küchenwand hängen?</p>
                <a href="/shop" class="btn btn--primary btn--large">🛍️ Zum Shop</a>
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
