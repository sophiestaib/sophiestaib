<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seasonal Calendar | HUERTA</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div id="app">
    <header class="header" role="banner">
        <div class="container header__container">
            <div class="header__logo"><h1><a href="../index.php"><img src="../assets/img/Asset%2016.png" width="80"
                                                                       alt="HUERTA logo"></a></h1></div>
            <nav class="header__nav" role="navigation" aria-label="Main navigation">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="recipes.php">Recipes</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="cart.php">Cart</a></li>
                </ul>
            </nav>
        </div>
    </header>
n    <main class="main-content" id="main-content" role="main">
        <div class="container">
            <h1>Seasonal Calendar</h1>
            <p class="lead">Discover what's in season each month for fresh and sustainable ingredients.</p>
n            <section class="seasonal-section">
                <div class="seasonal-grid">
                    <article class="seasonal-card"><h3>🥬 January</h3>
                        <p class="seasonal-month-text">Winter</p>
                        <ul class="seasonal-list">
                            <li>Cabbage</li>
                            <li>Carrots</li>
                            <li>Spinach</li>
                            <li>Apples (stored)</li>
                        </ul>
                    </article>
                    <article class="seasonal-card"><h3>🥕 February</h3>
                        <p class="seasonal-month-text">Late Winter</p>
                        <ul class="seasonal-list">
                            <li>Leek</li>
                            <li>Onions</li>
                            <li>Beetroot</li>
                        </ul>
                    </article>
                    <article class="seasonal-card"><h3>🌱 March</h3>
                        <p class="seasonal-month-text">Spring</p>
                        <ul class="seasonal-list">
                            <li>Asparagus (early)</li>
                            <li>Radish</li>
                            <li>Salad greens</li>
                        </ul>
                    </article>
                    <article class="seasonal-card"><h3>🍓 May</h3>
                        <p class="seasonal-month-text">Late Spring</p>
                        <ul class="seasonal-list">
                            <li>Strawberries</li>
                            <li>Asparagus</li>
                            <li>Peas</li>
                        </ul>
                    </article>
                </div>
            </section>
        </div>
    </main>
n    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer__content">
                <div class="footer__section">
                    <h3>HUERTA</h3>
                    <p>Sustainable, seasonal, and vegan nutrition for a life in harmony with nature.</p>
                </div>
                <nav class="footer__section" aria-label="Footer navigation">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="recipes.php">Recipes</a></li>
                        <li><a href="shop.php">Shop</a></li>
                    </ul>
                </nav>
                <nav class="footer__section" aria-label="Legal links">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="privacy.php">Privacy</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__bottom">
                <p>&copy; <span id="year"></span> HUERTA. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/cart.js"></script>
<script>document.getElementById('year').textContent = new Date().getFullYear();
if (window.huertaCart) huertaCart.updateCartCount();</script>
</body>
</html>