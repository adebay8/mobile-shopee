<?php
    require ("Database/DBController.php");

    require ("Database/Product.php");

    //DBController object
    $db = new DBController();

    //product object
    $product =new Product($db);
?>