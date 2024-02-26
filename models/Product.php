<?php

require_once __DIR__ . '/Category.php';

class Product
{
    public $category;
    public $title;
    public $image;
    public $price;

    public function __construct(Category $category, $title, $image, $price)
    {
        $this->category = $category;
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }
}

?>