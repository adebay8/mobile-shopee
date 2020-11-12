<?php
    require ("Database/DBController.php");

    require ("Database/Product.php");

    require ("Database/Cart.php");

    //DBController object
    $db = new DBController();

    //product object
    $product =new Product($db);
    $product_shuffle = $product->getData();
    
    // cart pbject
    $cart = new Cart($db);


?>