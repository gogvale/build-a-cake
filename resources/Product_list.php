<?php
require "database/DB_Connect.php";
require "Product.php";

class Product_list extends DB_Connect
{
    public $list = [];

    function __construct()
    {
        parent::__construct();
        $this->table = "Product";
        $this->get_all_products();
    }
    
    function get_all_products(){
        try {
            $products_buffer = $this->dbh->query("SELECT * FROM `{$this->table}`");
            while($row = $products_buffer->fetch()){
                $list[] = new Product(...$row);
            }
        } catch(PDOException $e) {
            echo "Something went wrong. [Product_list]\n";
            // throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}

// $product_list = new Product_list;
// $product_list= $product_list->list;

$product_list = [
    new Product(),
    new Product(),
    new Product(),
    new Product(),
    new Product(),
];