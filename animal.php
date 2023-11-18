<?php

class Animal {
    // Properties
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }
}

// Contoh penggunaan class
$cat = new Animal("Cat");
echo "Name: " . $cat->name . "\n";
echo "Legs: " . $cat->legs . "\n";
echo "Cold Blooded: " . $cat->cold_blooded . "\n";



?>