<?php

    ob_start();
    // include header.php file
    include ('header.php');
?>
        
<?php
    // include banner-area partial template
    include ('./template/_banner-area.php');

    // include top sale partial template
    include ('./template/_top-sale.php');

    // include special price partial template
    include ('./template/_special-price.php');
    
    // include banner-ads partial template
    include ('./template/_banner-ads.php');
    
    // include new-phones partial template
    include ('./template/_new-phones.php');
    
    // include latest-blogs partial template
    include ('./template/_latest-blogs.php');
?>

<?php
    include ("footer.php");
?>