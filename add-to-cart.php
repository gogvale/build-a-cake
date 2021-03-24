<?php
require_once "resources/Cart.php";
require_once "resources/Product_list.php";

$product_id = $_GET['product_id'];
$product = $PDL->get_by_id($product_id);
$cart->add($product);


echo $product->name . " agregado!\n";

header("Location: cart.php");

