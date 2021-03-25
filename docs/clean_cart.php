<?php 
require_once "resources/Cart.php";
$cart->empty_cart();

header("Location: index.php");
?>