<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php

    include ("template/_cart-template.php");

    /*  include top sale section */
        include ('template/_new-phones.php');
    /*  include top sale section */

?>

<?php
// include footer.php file
include ('footer.php');
?>


