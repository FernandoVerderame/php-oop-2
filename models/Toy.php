<?php 

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public $icon;
    public $brand;
    public $materials;

    public function __construct($category, $title, $image, $price, $icon, $brand, $materials)
    {
        parent::__construct($category, $title, $image, $price);
        $this->icon = $icon;
        $this->brand = $brand;
        $this->materials = $materials;
    }

}

?>