<?php

require_once __DIR__ . "/Category.php";

class Product{
    public $title;
    public $poster;
    protected $price;
    public $category;

    public function __construct(string $_title, string $_poster, int $_price, Category $_category)
    {
        $this->title = $_title;
        $this->poster = $_poster;
        $this->setPrice($_price);
        $this->category = $_category;
    }
    public function setPrice($price) {
        if (!is_numeric($price) || $price <= 0) return false;

        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
};

?>