<?php include 'layout/header.php'; ?>

<main class="main-content">

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <p class="welcome-text">WELCOME TO KEVINWEB</p>

            <h1>
                Upgrade Your
                <span>Digital World</span>
            </h1>

            <p class="hero-desc">
                Discover reliable and modern technology products
                designed for work, gaming, and everyday life.
            </p>

            <button class="shop-but">Explore Products</button>
        </div>
    </section>


    <!-- CATEGORY SECTION -->
    <section class="filter-section">

        <button class="filter-pill active">All Products</button>
        <button class="filter-pill">Laptops</button>
        <button class="filter-pill">Audio</button>
        <button class="filter-pill">Accessories</button>

    </section>


    <!-- PRODUCTS -->
    <section class="product-grid">

        <!-- PRODUCT 1 -->
        <div class="product-card">

            <div class="product-image">
                <img src="images/laptop.jpeg" alt="Gaming Laptop">
            </div>

            <div class="product-info">

                <span class="category">LAPTOP</span>

                <h3>Gaming Laptop</h3>

                <p>
                    Powerful performance for gaming,
                    school, and productivity.
                </p>

                <div class="rating">★★★★★</div>

                <div class="price">
                    ₱45,999
                    <span class="old-price">₱50,999</span>
                </div>

                <button class="cart-button">
                    Add to Cart
                </button>

            </div>

        </div>


        <!-- PRODUCT 2 -->
        <div class="product-card">

            <div class="product-image">
                <img src="images/headphonesjpg.jpg" alt="Wireless Headphones">
            </div>

            <div class="product-info">

                <span class="category">AUDIO</span>

                <h3>Wireless Headphones</h3>

                <p>
                    Enjoy immersive sound with
                    comfortable wireless audio.
                </p>

                <div class="rating">★★★★☆</div>

                <div class="price">
                    ₱2,499
                </div>

                <button class="cart-button">
                    Add to Cart
                </button>

            </div>

        </div>


        <!-- PRODUCT 3 -->
        <div class="product-card">

            <div class="product-image">
                <img src="images/mouse.jpg" alt="Wireless Mouse">
            </div>

            <div class="product-info">

                <span class="category">ACCESSORY</span>

                <h3>Wireless Mouse</h3>

                <p>
                    Smooth and responsive control
                    for work and everyday use.
                </p>

                <div class="rating">★★★★★</div>

                <div class="price">
                    ₱899
                </div>

                <button class="cart-button">
                    Add to Cart
                </button>

            </div>

        </div>


        <!-- PRODUCT 4 -->
        <div class="product-card">

            <div class="product-image">
                <img src="images/keyboard.jpg" alt="Mechanical Keyboard">
            </div>

            <div class="product-info">

                <span class="category">ACCESSORY</span>

                <h3>Mechanical Keyboard</h3>

                <p>
                    Responsive mechanical switches
                    for a better typing experience.
                </p>

                <div class="rating">★★★★☆</div>

                <div class="price">
                    ₱1,999
                    <span class="old-price">₱2,499</span>
                </div>

                <button class="cart-button">
                    Add to Cart
                </button>

            </div>

        </div>

    </section>

</main>

<?php include 'layout/footer.php'; ?>