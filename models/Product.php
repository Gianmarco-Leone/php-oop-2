<?php

require_once __DIR__ . "/Category.php";

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

?>