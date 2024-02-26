<?php 

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
    public $icon;
    public $brand;
    public $type;

    public function __construct($category, $title, $image, $price, $icon, $brand, $type)
    {
        parent::__construct($category, $title, $image, $price);
        $this->icon = $icon;
        $this->brand = $brand;
        $this->type = $type;
    }

}

?>