<?php
include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/../Traits/Width.php';
class Petbad extends Product{
    use Width;
    public
    $height, $material;
    public function __construct($name, $brand, $description, $sellPrice, $image, $purchPrice, $stock, $supplier, Category $category, $width, $height, $material) {
        parent::__construct($name, $brand, $description, $sellPrice, $image, $purchPrice, $stock, $supplier, $category);
        $this->width = $width;
        $this->height = $height;
        $this->material = $material;
    }
}