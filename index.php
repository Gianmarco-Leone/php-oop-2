<?php

class Product{
    public $name;
    public $poster;
    public $price;
    public $category;

    public function __construct(string $_name, string $_poster, int $_price, Category $_category)
    {
        $this->name = $_name;
        $this->poster = $_poster;
        $this->price = $_price;
        $this->category = $_category;
    }
};

class Category {
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }
};

$category_1 = new Category("Cane");
$category_2 = new Category("Gatto");

$product_1 = new Product("Croccantini", "linkfoto", 32, $category_1);

var_dump($product_1);

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