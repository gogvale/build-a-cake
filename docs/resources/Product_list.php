<?php
require_once "database/DB_Connect.php";
require_once "Product.php";

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

    function get_by_id(int $id){
        try {
            foreach($this->dbh->query("SELECT * FROM `{$this->table}` WHERE ID = $id") as $row) 
            {
                return new Product(
                    $row['ID'],
                    $row['name'],
                    $row['description'],
                    $row['price'],
                    $row['picture']
                );
            }
        } catch(PDOException $e) {
            echo "Something went wrong. [Product_list]\n";
            die ("ERROR ". $e->getMessage().",". (int)$e->getCode());
        }
        return [];
    }
}

$PDL = new Product_list('.config.php');
$product_list = $PDL->list;