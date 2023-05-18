<?php
include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/../Traits/Width.php';
class Toy extends Product{
    use Width;
    public
    $sound;
    public function __construct($name, $brand, $description, $sellPrice, $image, $purchPrice, $stock, $supplier, Category $category,$width, $sound) {
        parent::__construct($name, $brand, $description, $sellPrice, $image, $purchPrice, $stock, $supplier, $category);
        $this->width = $width;
        $this->sound = $sound;
    }
}