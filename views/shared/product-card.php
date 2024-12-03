<div id="product-card" data-aos="flip-left">
    <img src="<?= $imgSrc ?>" alt="">
    <div class="info">
        <h3 class="card-title"><?php echo htmlspecialchars($name); ?></h3>
        <h3 class="card-description"><?php echo htmlspecialchars($description); ?></h3>
    </div>
    <p class="card-price">$<?php echo htmlspecialchars($price, 2); ?></p>
    <button class="add-to-cart">
        <img src="public/images/icons/booking.svg" alt="">
        <span>Add to Cart</span>
    </button>
</div>