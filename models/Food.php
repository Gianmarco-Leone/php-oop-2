<?php

require_once __DIR__ . "/Product.php";

class Food extends Product {
    public $type;

    public function __construct(string $_title, string $_poster, int $_price, Category $_category, string $_type)
    {
        parent::__construct($_title, $_poster, $_price, $_category);
        
        $this->type = $_type;
    }
}

?>