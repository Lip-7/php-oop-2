<?php
include __DIR__ . '/Product.php';
class Category extends Product{
    public $categName;
    public function __construct($name, $brand, $description, $sellPrice, $purchPrice, $stock, $supplier, $categName) {
        parent::__construct($name, $brand, $description, $sellPrice, $purchPrice, $stock, $supplier);
        $this->categName = $categName;
    }
}