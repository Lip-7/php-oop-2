<?php
include __DIR__ . '/../Models/Food.php';
include __DIR__ . '/../Models/Toy.php';
include __DIR__ . '/../Models/Petbad.php';

$cat = new Category('cat');
$dog = new Category('dog');

$foods = [
    new Food(
    "Surf 'N Turf Freeze-Dried Raw Dinner Patties",
    "STELLA & CHEWY'S",
    "Appropriate levels of vitamins, minerals, and other nutrients with added taurine.",
    15,
   "https://petarkharlem.com/wp-content/uploads/2023/02/stella-chewys-surf-n-turf-freeze-dried-raw-dinner-patties.jpg",
    10,
    200,
    "Venditore cibo animale Juann",
    $dog,
    "200kcal",
    "kibble",
    "all",
    "Raw, wild-caught salmon & grass-fed beef"),
    new Food(
    "Surf 'N Turf Freeze-Dried Raw Dinner Patties",
    "STELLA & CHEWY'S",
    "Appropriate levels of vitamins, minerals, and other nutrients with added taurine.",
    15,
   "https://petarkharlem.com/wp-content/uploads/2023/02/stella-chewys-surf-n-turf-freeze-dried-raw-dinner-patties.jpg",
    10,
    200,
    "Venditore cibo animale Juann",
    $dog,
    "200kcal",
    "kibble",
    "all",
    "Raw, wild-caught salmon & grass-fed beef"),
    new Food(
    "Surf 'N Turf Freeze-Dried Raw Dinner Patties",
    "STELLA & CHEWY'S",
    "Appropriate levels of vitamins, minerals, and other nutrients with added taurine.",
    25,
   "https://petarkharlem.com/wp-content/uploads/2023/02/stella-chewys-surf-n-turf-freeze-dried-raw-dinner-patties.jpg",
    20,
    200,
    "Venditore cibo animale Juann",
    $dog,
    "200kcal",
    "kibble",
    "all",
    "Raw, wild-caught salmon & grass-fed beef"),
    new Food(
    "Surf 'N Turf Freeze-Dried Raw Dinner Patties",
    "STELLA & CHEWY'S",
    "Appropriate levels of vitamins, minerals, and other nutrients with added taurine.",
    15,
   "https://petarkharlem.com/wp-content/uploads/2023/02/stella-chewys-surf-n-turf-freeze-dried-raw-dinner-patties.jpg",
    10,
    200,
    "Venditore cibo animale Juann",
    $cat,
    "200kcal",
    "kibble",
    "all",
    "Raw, wild-caught salmon & grass-fed beef"),
];

/* $toys = [
    new Toy(
        $name,
        $brand,
        $description,
        $sellPrice,
        $image,
        $purchPrice,
        $stock,
        $supplier,
        Category $category,
        $width,
        $sound

    ),
]; */

$petbads = [

];