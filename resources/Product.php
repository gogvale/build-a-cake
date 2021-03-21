<?php

class Product
{
    private $id;
    static $path = "/assets/img/Products/";
    public $name;
    public $description;
    public $price;
    public $picture;

    function __construct($id=1,$name="test",$description="test",$price="0.00",$picture="default.png")
    {
        $this->id = $id;

        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->picture = $picture;
    }

    function id()
    {
        return $this->id;
    }

    function image_full_path()
    {
        return $this::$path . $this->picture;
    }

}