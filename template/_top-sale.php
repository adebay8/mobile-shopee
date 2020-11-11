<?php
    $product_shuffle = $product->getData();
    shuffle($product_shuffle);
?>

<!-- top sale -->
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item) {?>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="<?php printf($format='%s?item_id=%s', $args='product.php', $item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? './assets/products/1.png'?>" alt="product 1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknown"?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price'] ?? '0'?></span>
                            </div>
                            <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- carousel -->
    </div>
</section>
    <!-- end of top sale -->