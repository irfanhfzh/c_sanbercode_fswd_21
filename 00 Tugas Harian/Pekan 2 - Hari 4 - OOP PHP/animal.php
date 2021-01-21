<?php
class Animal {
    public $name;
    public $legs = 2;
    public $cold_blooded = 'tidak';

    public function __construct($name)
    {
        $this->name = $name;
    }
}