<?php


class Product
{
    protected $price = null;
    
    public function __construct($a = null)
    {
        $this->price = $a;
    }

    public function setProperty($property_name, $value)
    {
        $this->$property_name = $value;
    }

    public static function setPrice($value)
    {
        static::$price = $value;

    }
    



}


$product = new Product;
$product->setProperty('price', 123);


echo $price;


