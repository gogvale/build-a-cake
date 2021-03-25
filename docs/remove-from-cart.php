<?php
require_once "resources/Cart.php";

$product_id = $_GET['product_id'];
$cart->remove_by_id($product_id);



header("Location: cart.php");

