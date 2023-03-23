<?php

require_once __DIR__ . "/Product.php";

class AnimalBed extends Product {
    public $place;

    public function __construct(string $_title, string $_poster, int $_price, Category $_category, string $_place)
    {
        parent::__construct($_title, $_poster, $_price, $_category);
        
        $this->place = $_place;
    }
}

?>