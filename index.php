<?php

require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Game.php";

$category_1 = new Category("Cane");
$category_2 = new Category("Gatto");

$food_1 = new Food(
    "Royal Canin",
    "https://www.magazzinitotopiccinni.it/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/r/o/royal-canin-15kg-cani.jpg",
    32, 
    $category_1,
    "Croccantini"
);

$game_1 =  new Game(
    "Hagen Catit Design",
    "https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/hagen/catit/design/senses/track/1/400/giococatit_1.jpg",
    8, 
    $category_2,
    "Gioco d'intelligenza"
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Extends</title>
</head>

<body>
    <style>
    ul {
        list-style: none;
    }

    div {
        width: 300px;
        border: 1px solid black;
        display: inline-block;
    }

    div img {
        max-width: 100%;
        object-fit: cover;
    }
    </style>
    <h1>Pet Shop</h1>

    <ul>
        <li>
            <div>
                <img src="<?= $food_1->poster ?>" alt="<?= $food_1->title ?>">
                <h4>
                    <?= $food_1->title ?>
                </h4>
                <h6>
                    <?= $food_1->price  ?> €
                </h6>
                <h6>
                    <?= $category_1->name ?>
                </h6>
                <h6>
                    <?= $food_1->type ?>
                </h6>
                <h6>

                </h6>
            </div>
            <div>
                <img src="<?= $game_1->poster ?>" alt="<?= $game_1->title ?>">
                <h4>
                    <?= $game_1->title ?>
                </h4>
                <h6>
                    <?= $game_1->price  ?> €
                </h6>
                <h6>
                    <?= $category_2->name ?>
                </h6>
                <h6>
                    <?= $game_1->game_mode ?>
                </h6>
                <h6>

                </h6>
            </div>
        </li>
    </ul>
</body>

</html>