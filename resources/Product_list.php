<?php
require "database/DB_Connect.php";
require "Product.php";

class Product_list extends DB_Connect
{
    public $list = [];

    function __construct($config)
    {
        parent::__construct($config);
        $this->table = "Product";
        $this->get_all_products();
    }
    
    function get_all_products(){
        try {
            foreach($this->dbh->query("SELECT * FROM `{$this->table}`") as $row) 
            {
                $p = new Product(
                    $row['ID'],
                    $row['name'],
                    $row['description'],
                    $row['price'],
                    $row['picture']
                );
                $this->list[] = $p;
            }
        } catch(PDOException $e) {
            echo "Something went wrong. [Product_list]\n";
            die ("ERROR ". $e->getMessage().",". (int)$e->getCode());
        }
    }
}

$product_list = new Product_list('.config.php');
$product_list = $product_list->list;