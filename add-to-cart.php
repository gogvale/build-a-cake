<?php
require_once "resources/Cart.php";
require_once "resources/Product_list.php";

$product_id = $_GET['product_id'];
$product = $PDL->get_by_id($product_id);
$cart->add($product);


header("Location: cart.php");

