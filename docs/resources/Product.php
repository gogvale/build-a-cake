<?php

class Product
{
    public $id;
    static $path = "/assets/img/Products/";
    public $name;
    public $description;
    public $price;
    public $picture;

    function __construct($id=1,$name="Nombre del Producto",$description="Descripción del Producto",$price=100.00,$picture="default.png")
    {
        $this->id = $id;

        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->picture = $picture;
    }

    function id(): int
    {
        return $this->id;
    }

    function image_full_path(): string
    {
        return $this::$path . $this->picture;
    }
    function price(): string
    {
        return number_format($this->price,2,'.',',');
    }

}