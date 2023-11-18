<?php
// Frog.php

// Import class Animal
require_once('Animal.php');

// Definisi class Frog yang merupakan inheritance dari class Animal
class Frog extends Animal {
    // Metode untuk membuat kodok melompat
    public function jump() {
        echo "{$this->name} ({$this->species}) is jumping: hop hop\n";
    }
}
?>