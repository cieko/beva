<div>
    <?php require('views/partials/html-head.php'); ?>

    <main id="home">

        <!-- BANNER -->
        <section id="hero">
            <h1>Organic Food Store</h1>
            <h5>Current delivery lead times are between 5-7 working days</h5>
            <button>Shop now</button>

            <div class="overlay"></div>
        </section>

        <!-- PRODUCTS -->
        <section id="products">
            <h3>OUR <span class="text-theme">PRODUCTS</span></h2>

            <div class="cards">
                <?php
                $products = [
                    ['name' => 'Arvum', 'price' => '31,51 €', 'description' => 'Gran Reserva Vinegar, 200ml', 'imgSrc' => 'public/images/products/product-1.png'],
                    ['name' => 'José Andrés', 'price' => '52,95 €', 'description' => 'Extra Virgin Olive, 500ml', 'imgSrc' => 'public/images/products/product-2.png'],
                    ['name' => 'Ego Sum', 'price' => '22,49 €', 'description' => 'Extra Virgin Olive Oil, 500ml', 'imgSrc' => 'public/images/products/product-3.png'],
                    ['name' => 'José Andrés', 'price' => '23,83 €', 'description' => 'Extra Virgin Olive Oil, 500ml', 'imgSrc' => 'public/images/products/product-4.png']
                ];

                foreach ($products as $product) {
                    extract($product);
                    require('views/shared/product-card.php');
                }
                ?>
            </div>

            <div class="browse-btn">
                <div class="browse-product-btn">
                    <span>Shop all products</span>
                    <img src="public/images/icons/arrow.svg" alt="">
                </div>
            </div>
        </section>
    </main>

    <?php require('views/partials/html-foot.php'); ?>
</div>