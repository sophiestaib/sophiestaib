<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | HUERTA</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div id="app">
    <!-- HEADER -->
    <header class="header" role="banner">
        <div class="container header__container">
            <div class="header__logo">
                <h1>
                    <a href="../index.php" title="Go to home">
                        <img src="../assets/img/Asset%2016.png" width="80" alt="HUERTA logo">
                    </a>
                </h1>
            </div>
            <nav class="header__nav" role="navigation" aria-label="Main navigation">
                <ul>
                    <li><a href="../index.php" class="nav-link">Home</a></li>
                    <li><a href="recipes.php" class="nav-link">Recipes</a></li>
                    <li><a href="shop.php" class="nav-link active" aria-current="page">Shop</a></li>
                    <li><a href="about.php" class="nav-link">About Us</a></li>
                    <li>
                        <a href="cart.php" class="nav-link cart-link" title="Cart">
                            🛒 <span class="cart-count" id="cart-count">0</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- MAIN -->
    <main class="main-content" id="main-content" role="main">
        <div class="container">
            <h1>Shop – HUERTA Products</h1>
            <p class="lead">Discover our collection of sustainable products for conscious nutrition.</p>
n            <!-- NOTIFICATIONS -->
            <div id="notification"></div>
n            <!-- PRODUCTS GRID -->
            <section class="shop-products" aria-labelledby="products-title">
                <h2 id="products-title" class="sr-only">Available Products</h2>
                <div class="grid grid--3">
                    <!-- PRODUCT 1 -->
                    <article class="product-card">
                        <div class="product-card__image">
                            <div class="product-carousel" aria-roledescription="carousel">
                                <div class="carousel-track">
                                    <div class="carousel-slide"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect fill='%23a5d6a7' width='600' height='400'/%3E%3Ctext x='300' y='200' font-size='80' fill='white' text-anchor='middle' dominant-baseline='central'%3E1%3C/text%3E%3C/svg%3E" alt="Product image 1"></div>
                                    <div class="carousel-slide"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect fill='%23c5e1a5' width='600' height='400'/%3E%3Ctext x='300' y='200' font-size='80' fill='white' text-anchor='middle' dominant-baseline='central'%3E2%3C/text%3E%3C/svg%3E" alt="Product image 2"></div>
                                    <div class="carousel-slide"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect fill='%23ffcc80' width='600' height='400'/%3E%3Ctext x='300' y='200' font-size='80' fill='white' text-anchor='middle' dominant-baseline='central'%3E3%3C/text%3E%3C/svg%3E" alt="Product image 3"></div>
                                    <div class="carousel-slide"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect fill='%23ffab91' width='600' height='400'/%3E%3Ctext x='300' y='200' font-size='80' fill='white' text-anchor='middle' dominant-baseline='central'%3E4%3C/text%3E%3C/svg%3E" alt="Product image 4"></div>
                                    <div class="carousel-slide"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect fill='%238bc34a' width='600' height='400'/%3E%3Ctext x='300' y='200' font-size='80' fill='white' text-anchor='middle' dominant-baseline='central'%3E5%3C/text%3E%3C/svg%3E" alt="Product image 5"></div>
                                    <div class="carousel-slide"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect fill='%23aeea00' width='600' height='400'/%3E%3Ctext x='300' y='200' font-size='80' fill='white' text-anchor='middle' dominant-baseline='central'%3E6%3C/text%3E%3C/svg%3E" alt="Product image 6"></div>
                                </div>
                                <button class="carousel-prev" aria-label="Previous slide">‹</button>
                                <button class="carousel-next" aria-label="Next slide">›</button>
                                <div class="carousel-dots" role="tablist"></div>
                            </div>
                        </div>
n                        <div class="product-card__body">
                            <h3>HUERTA- Seasonal Calendar 2027</h3>
n                            <p class="product-card__description">
                                Our high-quality seasonal calendar
                                This 2027 illustrated 12-month calendar shows you which fruits and vegetables are in season in Spain.
                                With beautiful illustrations, practical tips, seeds to plant and vegan recipes.
                            </p>
n                            <div class="product-card__features">
                                <ul>
                                    <li>100% sustainable paper</li>
                                    <li>DIN A4 wall calendar, printed on off-white 230gsm textured paper
                                        </li>
                                    <li>Includes vegan seasonal recipes</li>
                                </ul>
                            </div>

                            <div class="product-card__price">
                                <span class="price" aria-label="Price: 19.90 euros">€ 19,90</span>
                            </div>

                            <!-- ADD TO CART FORM -->
                            <form class="add-to-cart-form" method="POST" action="#">
                                <input type="hidden" name="product_id" value="1">
                                <input type="hidden" name="product_name" value="HUERTA Seasonal Calendar 2026">
                                <input type="hidden" name="product_price" value="19.90">

                                <div class="product-card__quantity">
                                    <label for="qty-1">Quantity:</label>
                                    <input type="number" id="qty-1" name="quantity" class="quantity-input" value="1"
                                           min="1" max="10" required>
                                </div>

                                <button type="submit" class="btn btn--accent btn--block">
                                    🛒 Add to Cart
                                </button>
                            </form>
                        </div>
                    </article>
                </div>
            </section>
n            <!-- INFO SECTION -->
            <section class="shop-info mt-3xl" aria-labelledby="info-title">
                <h2 id="info-title">Shipping & Payment</h2>
                <div class="grid grid--2">
                    <div class="card">
                        <div class="card__body">
                            <h3>📦 Shipping</h3>
                            <p>Free shipping from €30. Delivery time: 2-4 business days within the EU.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>💳 Payment Methods</h3>
                            <p>We accept credit card, PayPal and bank transfer.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="footer" role="contentinfo">
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
<script src="../assets/js/shop.js"></script>
<script>
    document.getElementById('year').textContent = new Date().getFullYear();
    if (typeof huertaCart !== 'undefined') huertaCart.updateCartCount();
</script>
</body>
</html>