<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-Tags for Accessibility and SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="HUERTA - Sustainable, seasonal, and vegan nutrition. Discover recipes, inspiration, and our sustainable calendar.">
    <meta name="keywords" content="vegan, seasonal, sustainable, organic, recipes">
    <meta name="author" content="HUERTA">
    <meta name="theme-color" content="#2d5016">

    <title>HUERTA – Sustainable Seasonal Vegan Nutrition</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Favicon (optional) -->
    <link rel="icon" type="image/svg+xml"
          href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='75' font-size='75'>🌱</text></svg>">
</head>
<body>
<!-- Skip-to-Content Link for Accessibility -->
<a href="#main-content" class="skip-link">Skip to content</a>

<div id="app">
    <!-- ============================================
         HEADER & NAVIGATION (Semantic Tags)
         ============================================ -->
    <header class="header" role="banner">
        <div class="container header__container">
            <!-- Logo -->
            <div class="header__logo">
                <h1>
                    <a href="/" title="HUERTA - Home">
                        <span aria-hidden="true">🌱</span> HUERTA
                    </a>
                </h1>
            </div>

            <!-- Main Navigation -->
            <nav class="header__nav" role="navigation" aria-label="Main navigation">
                <ul>
                    <li>
                        <a href="/" class="nav-link active" aria-current="page">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/seasonal-calendar" class="nav-link">
                            Seasonal Calendar
                        </a>
                    </li>
                    <li>
                        <a href="/recipes" class="nav-link">
                            Recipes
                        </a>
                    </li>
                    <li>
                        <a href="/shop" class="nav-link">
                            Shop
                        </a>
                    </li>
                    <li>
                        <a href="/about" class="nav-link">
                            About Us
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- ============================================
         MAIN CONTENT (Semantic Main-Section)
         ============================================ -->
    <main class="main-content" id="main-content" role="main">
        <!-- Hero Section -->
        <section class="hero" aria-labelledby="hero-title">
            <div class="container">
                <h2 id="hero-title">Sustainable. Seasonal. Vegan.</h2>

                <p class="hero__subtitle">
                    Welcome to HUERTA – your platform for conscious nutrition in harmony with nature.
                    Discover seasonal recipes, a practical calendar, and high-quality sustainable products.
                </p>

                <!-- Call-to-Action Buttons -->
                <div class="hero__cta">
                    <a href="/seasonal-calendar" class="btn btn--primary btn--large" title="Go to seasonal calendar">
                        🗓️ Explore Seasonal Calendar
                    </a>
                    <a href="/shop" class="btn btn--secondary btn--large" title="Go to shop">
                        🛍️ Visit Shop
                    </a>
                </div>
            </div>
        </section>

        <!-- Feature Overview -->
        <section class="features" aria-labelledby="features-title">
            <div class="container">
                <h2 id="features-title">Why HUERTA?</h2>
                <div class="grid grid--3">
                    <article class="card">
                        <div class="card__body">
                            <h3>🌍 Sustainable</h3>
                            <p>We focus on eco-friendly products and vegan recipes that reduce your ecological
                                footprint.</p>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card__body">
                            <h3>📅 Seasonal</h3>
                            <p>Our seasonal calendar shows you which fruits and vegetables are in season – for
                                fresh, local ingredients.</p>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card__body">
                            <h3>🍃 Vegan</h3>
                            <p>All our recipes are 100% vegan and packed with nutrients for a healthy
                                life.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <!-- ============================================
         FOOTER (Semantic Footer-Section)
         ============================================ -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <!-- Footer Content Grid -->
            <div class="footer__content">
                <!-- About HUERTA -->
                <div class="footer__section">
                    <h3>HUERTA</h3>
                    <p>
                        Sustainable, seasonal, and vegan nutrition for a harmonious life in harmony with nature.
                        Discover the beauty of seasonal ingredients.
                    </p>
                </div>

                <!-- Navigation -->
                <nav class="footer__section" aria-label="Footer Navigation">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/seasonal-calendar">Seasonal Calendar</a></li>
                        <li><a href="/recipes">Recipes</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/about">About Us</a></li>
                    </ul>
                </nav>

                <!-- Legal & Contact -->
                <nav class="footer__section" aria-label="Legal Links">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="/contact" title="Contact Form">Contact</a></li>
                        <li><a href="/impressum" title="Legal Information">Legal Info</a></li>
                        <li><a href="/privacy" title="Privacy Policy">Privacy</a></li>
                        <li><a href="/terms" title="Terms of Service">Terms</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Footer Bottom -->
            <div class="footer__bottom">
                <p>&copy; <span id="year"></span> HUERTA. All rights reserved.</p>
                <p>Developed with 🌱 for a sustainable future.</p>
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
