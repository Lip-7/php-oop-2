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
        "Raw, wild-caught salmon & grass-fed beef"
    ),
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
        "Raw, wild-caught salmon & grass-fed beef"
    ),
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
        "Raw, wild-caught salmon & grass-fed beef"
    ),
    new Food(
        "Surf 'N Turf Freeze-Dried Raw Dinner Patties",
        "STELLA & CHEWY'S",
        "Appropriate levels of vitamins, minerals, and other nutrients with added taurine.",
        15,
        "https://petarkharlem.com/wp-content/uploads/2021/10/ACANA-Bountiful-Catch-Salmon-Catfish-and-Herring-Dry-Cat-Food.jpg",
        10,
        200,
        "Venditore cibo animale Juann",
        $cat,
        "200kcal",
        "kibble",
        "all",
        "Raw, wild-caught salmon & grass-fed beef"
    ),
];

$toys = [
    new Toy(
        'RealBirds Fly Over Wand',
        'OURPETS',
        'OurPets RealBirds wands are made for fun and frolic between cats and their people.',
        20,
        'https://petarkharlem.com/wp-content/uploads/2019/04/image-220.png',
        15,
        200,
        "Venditore de giocattoli fallito",
        $cat,
        '60cm',
        false

    ),
    new Toy(
        'RealBirds Fly Over Wand',
        'OURPETS',
        'OurPets RealBirds wands are made for fun and frolic between cats and their people.',
        20,
        'https://petarkharlem.com/wp-content/uploads/2019/04/image-220.png',
        15,
        200,
        "Venditore de giocattoli fallito",
        $cat,
        '60cm',
        false

    ),
    new Toy(
        'RealBirds Fly Over Wand',
        'OURPETS',
        'OurPets RealBirds wands are made for fun and frolic between cats and their people.',
        20,
        'https://petarkharlem.com/wp-content/uploads/2019/04/image-220.png',
        15,
        200,
        "Venditore de giocattoli fallito",
        $cat,
        '60cm',
        false

    ),
    new Toy(
        'RealBirds Fly Over Wand',
        'OURPETS',
        'OurPets RealBirds wands are made for fun and frolic between cats and their people.',
        20,
        'https://petarkharlem.com/wp-content/uploads/2019/04/image-220.png',
        15,
        200,
        "Venditore de giocattoli fallito",
        $cat,
        '60cm',
        false

    ),
];

$petbads = [
    new Petbad(
        'Tan Linen Tent Bed',
        'BEST PET SUPPLIES',
        'A fantastic supplie for your cat, very easy to use',
        50,
        'https://petarkharlem.com/wp-content/uploads/2019/04/image-329.png',
        35,
        50,
        "Eh lo so, l'ho chiamato perbad invece di bed... famo finta di niente dai",
        $cat,
        '50cm',
        '60cm',
        'Linen'
    ),
    new Petbad(
        'Tan Linen Tent Bed',
        'BEST PET SUPPLIES',
        'A fantastic supplie for your cat, very easy to use',
        50,
        'https://petarkharlem.com/wp-content/uploads/2019/04/image-329.png',
        35,
        50,
        "Eh lo so, l'ho chiamato perbad invece di bed... famo finta di niente dai",
        $cat,
        '50cm',
        '60cm',
        'Linen'
    ),
    new Petbad(
        'Tan Linen Tent Bed',
        'BEST PET SUPPLIES',
        'A fantastic supplie for your cat, very easy to use',
        50,
        'https://petarkharlem.com/wp-content/uploads/2019/04/image-330.png',
        35,
        50,
        "Eh lo so, l'ho chiamato perbad invece di bed... famo finta di niente dai",
        $dog,
        '70cm',
        '80cm',
        'Sintetic skin'
    ),
    new Petbad(
        'Tan Linen Tent Bed',
        'BEST PET SUPPLIES',
        'A fantastic supplie for your cat, very easy to use',
        50,
        'https://petarkharlem.com/wp-content/uploads/2019/04/image-329.png',
        35,
        50,
        "Eh lo so, l'ho chiamato perbad invece di bed... famo finta di niente dai",
        $cat,
        '50cm',
        '60cm',
        'Linen'
    ),
];
