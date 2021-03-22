<?php

require_once "resources/Product.php";
class Cart
{
    private $items = [];
    
    function size()
    {
        return count($this->items);
    }
    function empty()
    {
        return count($this->items) == 0;
    }

    function items()
    {
        return $this->items;
    }
    function add(Product $item)
    {
        return $this->items[] = $item;
    }

    function total(){
        $price = function($value){
            return $value->price;
        };

        return number_format(array_sum(array_map($price,$this->items)),2,'.',',');
    }
}

$cart = new Cart();
$cart->add(new Product(null,"Pastelito de Chocolate Especial",null,123));
$cart->add(new Product());
$cart->add(new Product());
$cart->add(new Product());