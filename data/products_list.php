<?php

require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Food.php";
require_once __DIR__ . "/../models/Game.php";
require_once __DIR__ . "/../models/Bed.php";

$category_1 = new Category("Cane");
$category_2 = new Category("Gatto");


$food_products = [
    new Food(
        "Royal Canin",
        "https://www.magazzinitotopiccinni.it/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/r/o/royal-canin-15kg-cani.jpg",
        60, 
        $category_1,
        "Croccantini"
    ),
    new Food(
        "Eukanuba",
        "https://shop-cdn-m.mediazs.com/bilder/eukanuba/adult/large/breed/pollo/5/800/162907_pla_tetragmbhiams_eukanuba_adult_largebreed_huhn_dog_d15kg_hs_01_5.jpg",
        48, 
        $category_1,
        "Croccantini"
    ),
    new Food(
        "Cosma Nature",
        "https://shop-cdn-m.mediazs.com/bilder/cosma/nature/in/busta/x/g/2/400/99515_pla_cosma_nature_chickentuna_50g_2.jpg",
        11, 
        $category_2,
        "Umido"
    )
];

$game_products = [
    new Game(
        "Hagen Catit Design",
        "https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/hagen/catit/design/senses/track/1/400/giococatit_1.jpg",
        16, 
        $category_2,
        "Gioco d'intelligenza"
    ),
    new Game(
        "Wild Mouse",
        "https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/topolino/sonoro/wild/mouse/con/led/7/400/67334_katzenspielzeug_wild_mouse_mit_sound_und_led_fg_2717_7.jpg",
        3, 
        $category_2,
        "Gioco stimolante"
    ),
    new Game(
        "Kong",
        "https://www.thekill.it/206-large_default/gioco-gomma-naturale-kong-classic.jpg",
        8, 
        $category_1,
        "Gioco d'intelligenza"
    )
];

$bed_products = [
    new AnimalBed(
        "Spike Comfort",
        "https://croci.net/wp-content/uploads/2020/09/Cuccia_per_cani_Chalet.jpg",
        80, 
        $category_1,
        "Esterno"
    ),
    new AnimalBed(
        "Tiragraffi Living Havana",
        "https://shop-cdn-m.mediazs.com/bilder/tiragraffi/modern/living/havana/6/400/115902_pla_modern_living_kb_havana_fg_4375_6.jpg",
        124, 
        $category_2,
        "Interno"
    ),
    new AnimalBed(
        "Charles 50 Ferplast",
        "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg",
        67, 
        $category_1,
        "Interno"
    )
];

?>