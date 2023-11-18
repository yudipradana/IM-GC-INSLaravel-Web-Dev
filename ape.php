<?php

require_once('Animal.php');

class Frog extends Animal {
    public function jump() {
        echo $this->getName() . " is jumping!\n";
    }
}