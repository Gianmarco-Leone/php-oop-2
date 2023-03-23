<?php

require_once __DIR__ . "/Product.php";

class Game extends Product {
    public $game_mode;

    public function __construct(string $_title, string $_poster, int $_price, Category $_category, string $_game_mode)
    {
        parent::__construct($_title, $_poster, $_price, $_category);

        $this->game_mode = $_game_mode;
    }
}

?>