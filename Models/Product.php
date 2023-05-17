<?php
include __DIR__ . '/Category.php';
class Product
{
    public
        $name, $sellPrice, $brand, $stock, $description, $image, $category;
    protected
        $supplier, $purchPrice;
    public function __construct($name, $brand, $description, $sellPrice, $image, $purchPrice, $stock, $supplier, Category $category)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->description = $description;
        $this->sellPrice = $sellPrice;
        $this->purchPrice = $purchPrice;
        $this->stock = $stock;
        $this->supplier = $supplier;
        $this->image = $image;
        $this->category = $category;
    }
}
