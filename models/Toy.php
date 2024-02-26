<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public $icon;
    public $brand;
    public $info;

    public function __construct($category, $title, $image, $price, $icon, $brand, $info)
    {
        parent::__construct($category, $title, $image, $price);
        $this->icon = $icon;
        $this->brand = $brand;
        $this->info = $info;
    }
}
