<?php
include_once __DIR__ . '/Product.php';
class Food extends Product{
    public
    $calories, $type, $race, $ingredients;
    public function __construct($name, $brand, $description, $sellPrice, $image, $purchPrice, $stock, $supplier, Category $category, $calories, $type, $race, $ingredients) {
        parent::__construct($name, $brand, $description, $sellPrice, $image, $purchPrice, $stock, $supplier, $category);
        $this->calories = $calories;
        $this->type = $type;
        $this->race = $race;
        $this->ingredients = $ingredients;
    }
}