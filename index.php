<?php

require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Food.php";
$category_1 = new Category("Cane");
// $category_2 = new Category("Gatto");

// $product_1 = new Product("Croccantini", "linkfoto", 32, $category_1);

// var_dump($product_1);

$food_1 = new Food("Royal Canin", "linkfoto", 32, $category_1, "Croccantini");

var_dump($food_1);
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
</body>

</html>