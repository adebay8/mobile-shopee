<?php 
    $brand = array_map(function($pro){
        return $pro['item_brand'];
    }, $product_shuffle);

    $unique = array_unique($brand);
    sort($unique);

    shuffle($product_shuffle);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST["special_price_submit"])){
            // call method add to cart
            $cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

?>

<!-- special price -->
<section id="special-price">
        <div class="container">
            <h4 class="font-rubik font-size-20">Special Price</h4>
            <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All brand</button>

                <?php 
                    array_map(function($brand){
                        printf($format='<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
                    }, $unique);
                ?>

                <!-- Brand fileter buttons -->
                <!-- <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Redmi">Redmi</button> -->
                
            </div>

            <div class="grid">
                <?php array_map(function($item){?>
                    <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand";?>">
                        <div class="item py-2" style="width:200px;">
                            <div class="product font-rale">
                                <a href="<?php printf($format='%s?item_id=%s', $args='product.php', $item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? './assets/products/13.png';?>" alt="product 1" class="img-fluid"></a>
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
                                        <span>$<?php echo $item['item_price'] ?? 0?></span>
                                    </div>
                                    <form method="POST">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'?>">
                                        <input type="hidden" name="user_id" value="<?php echo 1?>">
                                        <button class="btn btn-warning font-size-12" name="special_price_submit" type="submit">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }, $product_shuffle) ?>

            </div>
        </div>
    </section>
    <!-- special price -->