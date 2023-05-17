<?php
class Product
{
    public
        $name, $sellPrice, $brand, $stock, $description;
    protected
        $supplier, $purchPrice;
    public function __construct($name, $brand, $description, $sellPrice, $purchPrice, $stock, $supplier)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->description = $description;
        $this->sellPrice = $sellPrice;
        $this->purchPrice = $purchPrice;
        $this->stock = $stock;
        $this->supplier = $supplier;
    }
}
