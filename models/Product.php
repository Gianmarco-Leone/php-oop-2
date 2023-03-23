<?php

require_once __DIR__ . "/Category.php";

class Product{
    public $title;
    public $poster;
    public $price;
    public $category;

    public function __construct(string $_title, string $_poster, int $_price, Category $_category)
    {
        $this->title = $_title;
        $this->poster = $_poster;
        $this->price = $_price;
        $this->category = $_category;
    }
};

?>