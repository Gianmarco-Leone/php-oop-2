<?php

require_once __DIR__ . "/data/products_list.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Extends</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container pt-4">
        <h1>Pet Shop</h1>

        <h2 class="my-5">Food</h2>

        <div class="row row-cols-3">
            <?php foreach($food_products as $food_product) { ?>
            <?php include __DIR__ . "/template/food_card.php" ?>
            <?php } ?>
        </div>

        <h2 class="my-5">Games</h2>

        <div class="row row-cols-3">
            <?php foreach($game_products as $game_product) { ?>
            <?php include __DIR__ . "/template/game_card.php" ?>
            <?php } ?>
        </div>

        <h2 class="my-5">Beds</h2>

        <div class="row row-cols-3">
            <?php foreach($bed_products as $bed_product) { ?>
            <?php include __DIR__ . "/template/bed_card.php" ?>
            <?php } ?>
        </div>

    </div>
</body>

</html>