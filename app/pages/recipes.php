<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezepte | HUERTA</title>
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
                    <li><a href="/recipes" class="nav-link active" aria-current="page">Rezepte</a></li>
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
            <h1>🍳 Vegane Saisonale Rezepte</h1>
            <p class="lead">Leckere, gesunde Rezepte mit saisonalen Zutaten für das ganze Jahr.</p>

            <section class="recipes-section" aria-labelledby="recipes-title">
                <h2 id="recipes-title">Aktuelle Rezepte (Mai 2026)</h2>

                <div class="grid grid--2">
                    <!-- Rezept 1 -->
                    <article class="recipe-card">
                        <div class="recipe-card__image">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%238bc34a' width='400' height='300'/%3E%3Ctext x='200' y='130' font-size='80' fill='white' text-anchor='middle'%3E🍓%3C/text%3E%3Ctext x='200' y='200' font-size='24' fill='white' text-anchor='middle'%3EErdbeer-Smoothie%3C/text%3E%3C/svg%3E"
                                 alt="Erdbeer-Smoothie mit saisonalen Früchten"
                                 class="recipe-card__image-img">
                        </div>
                        <div class="recipe-card__body">
                            <h3>Erdbeer-Smoothie Bowls</h3>
                            <p class="recipe-card__description">Eine bunte, gesunde Frühstücksaktion mit frischen
                                Erdbeeren, Kokosmilch und Müsli.</p>

                            <div class="recipe-info">
                                <span>⏱️ 10 Min</span>
                                <span>👥 2 Portionen</span>
                                <span>⭐ Einfach</span>
                            </div>

                            <h4 style="margin-top: var(--space-lg);">Zutaten:</h4>
                            <ul class="recipe-ingredients">
                                <li>300g frische Erdbeeren</li>
                                <li>200ml Kokosmilch</li>
                                <li>100g veganes Joghurt</li>
                                <li>Müsli zum Toppen</li>
                                <li>Frische Minze</li>
                            </ul>

                            <a href="#" class="btn btn--primary btn--small">Zum Rezept →</a>
                        </div>
                    </article>

                    <!-- Rezept 2 -->
                    <article class="recipe-card">
                        <div class="recipe-card__image">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%8bc34a' width='400' height='300'/%3E%3Ctext x='200' y='130' font-size='80' fill='white' text-anchor='middle'%3E🥗%3C/text%3E%3Ctext x='200' y='200' font-size='24' fill='white' text-anchor='middle'%3ESpargel Salat%3C/text%3E%3C/svg%3E"
                                 alt="Grüner Spargel-Salat mit Erdbeeren"
                                 class="recipe-card__image-img">
                        </div>
                        <div class="recipe-card__body">
                            <h3>Grüner Spargel-Salat</h3>
                            <p class="recipe-card__description">Ein erfrischender Salat mit grünem Spargel, Erdbeeren
                                und balsamico-Vinaigrette.</p>

                            <div class="recipe-info">
                                <span>⏱️ 15 Min</span>
                                <span>👥 4 Portionen</span>
                                <span>⭐ Einfach</span>
                            </div>

                            <h4 style="margin-top: var(--space-lg);">Zutaten:</h4>
                            <ul class="recipe-ingredients">
                                <li>500g grüner Spargel</li>
                                <li>200g Erdbeeren</li>
                                <li>100g Rucola</li>
                                <li>50g Walnüsse</li>
                                <li>Balsamico-Vinaigrette</li>
                            </ul>

                            <a href="#" class="btn btn--primary btn--small">Zum Rezept →</a>
                        </div>
                    </article>

                    <!-- Rezept 3 -->
                    <article class="recipe-card">
                        <div class="recipe-card__image">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%8bc34a' width='400' height='300'/%3E%3Ctext x='200' y='130' font-size='80' fill='white' text-anchor='middle'%3E🥘%3C/text%3E%3Ctext x='200' y='200' font-size='24' fill='white' text-anchor='middle'%3ELinsen-Curry%3C/text%3E%3C/svg%3E"
                                 alt="Rotes Linsen-Curry mit Spinat"
                                 class="recipe-card__image-img">
                        </div>
                        <div class="recipe-card__body">
                            <h3>Rotes Linsen-Curry</h3>
                            <p class="recipe-card__description">Ein würziges, protein-reiches Curry mit roten Linsen und
                                frischem Spinat.</p>

                            <div class="recipe-info">
                                <span>⏱️ 25 Min</span>
                                <span>👥 4 Portionen</span>
                                <span>⭐ Mittel</span>
                            </div>

                            <h4 style="margin-top: var(--space-lg);">Zutaten:</h4>
                            <ul class="recipe-ingredients">
                                <li>200g rote Linsen</li>
                                <li>300g frischer Spinat</li>
                                <li>400ml Kokosmilch</li>
                                <li>2 Zwiebeln</li>
                                <li>Curry-Gewürze</li>
                            </ul>

                            <a href="#" class="btn btn--primary btn--small">Zum Rezept →</a>
                        </div>
                    </article>

                    <!-- Rezept 4 -->
                    <article class="recipe-card">
                        <div class="recipe-card__image">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%8bc34a' width='400' height='300'/%3E%3Ctext x='200' y='130' font-size='80' fill='white' text-anchor='middle'%3E🌮%3C/text%3E%3Ctext x='200' y='200' font-size='24' fill='white' text-anchor='middle'%3ETaco Bowl%3C/text%3E%3C/svg%3E"
                                 alt="Buddha Bowl mit Kichererbsen"
                                 class="recipe-card__image-img">
                        </div>
                        <div class="recipe-card__body">
                            <h3>Kichererbsen-Buddha-Bowl</h3>
                            <p class="recipe-card__description">Eine nährstoffreiche Bowl mit gerösteten Kichererbsen
                                und frischem Gemüse.</p>

                            <div class="recipe-info">
                                <span>⏱️ 30 Min</span>
                                <span>👥 2 Portionen</span>
                                <span>⭐ Einfach</span>
                            </div>

                            <h4 style="margin-top: var(--space-lg);">Zutaten:</h4>
                            <ul class="recipe-ingredients">
                                <li>400g Kichererbsen (gekocht)</li>
                                <li>200g Quinoa</li>
                                <li>150g Rucola</li>
                                <li>100g Tomaten</li>
                                <li>Tahini-Dressing</li>
                            </ul>

                            <a href="#" class="btn btn--primary btn--small">Zum Rezept →</a>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Tipps zum Kochen -->
            <section class="recipe-tips" aria-labelledby="tips-title">
                <h2 id="tips-title">💚 Tipps zum Veganen Kochen</h2>
                <div class="grid grid--2">
                    <div class="card">
                        <div class="card__body">
                            <h3>🌍 Nachhaltig Kochen</h3>
                            <p>Nutze lokale, saisonale Zutaten und reduziere damit deinen ökologischen Fußabdruck beim
                                Kochen.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>🥗 Protein-Quellen</h3>
                            <p>Linsen, Kichererbsen, Tofu und Nüsse sind großartige vegane Protein-Quellen für
                                ausgewogene Mahlzeiten.</p>
                        </div>
                    </div>
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
