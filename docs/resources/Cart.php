<?php

require_once "resources/Product.php";
class Cart
{
    private $items = [];
    private $key;

    function __construct($name = 'cart')
    {
        $this->key = $name;
        $this->save_cookie();
    }

    function save_cookie(){
        setcookie($this->key, serialize($this));
    }
    
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
        $this->items[] = $item;
        $this->save_cookie();
    }

    function total(){
        $price = function($value){
            return $value->price;
        };

        return number_format(array_sum(array_map($price,$this->items)),2,'.',',');
    }

    function remove_by_id($id){
        unset($this->items[$id]);
        $this->save_cookie();
    }

    function empty_cart(){
        $this->items = [];
        $this->save_cookie();
    }



    function name_price(){
        function np($a){
            return "- {$a->name} \${$a->price()}";
        }
        return array_map("np", $this->items);
    }
}

if( isset($_COOKIE['cart']))
    $cart = unserialize($_COOKIE['cart']);
else 
    $cart = new Cart();