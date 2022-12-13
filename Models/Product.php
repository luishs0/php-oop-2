<?php
require __DIR__ . "/Category.php";

class Product
{
    public $name;
    public $price;
    public $weight;
    public $category;
    public $img;
    public $type;

    public function __construct($name, $price, $weight, Category $category, $img, $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->category = $category;
        $this->img = $img;
        $this->type = $type;
    }
}

trait LiquidFood
{
    public function isLiquid()
    {
        echo "Liquid Food";
    }
}

class Soup extends Product
{
    use LiquidFood;
    public $taste;

    public function __construct($name, $price, $weight, Category $category, $img, $type, $taste)
    {
        parent::__construct($name, $price, $weight, $category, $img, $type);
        $this->taste = $taste;
    }
}
