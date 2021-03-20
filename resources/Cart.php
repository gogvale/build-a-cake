<?php

class Cart{
    private $items = [];
    
    function __construct(){}

    function size(){
        return count($this->items);
    }
    function empty(){
        return count($this->items) == 0;
    }

    function items(){
        return $this->items;
    }
    function add($item_id){
        return $this->items[] = $item_id;
    }

}

$cart = new Cart;