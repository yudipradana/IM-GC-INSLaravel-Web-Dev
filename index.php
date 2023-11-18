<?php

require_once('Frog.php');
require_once('Ape.php');

$shaun = new Frog("Shaun");
$buduk = new Frog("Buduk");
$keraSakti = new Ape("Kera Sakti");

echo "Name: " . $shaun->name . "\n";
echo "Legs: " . $shaun->legs . "\n";
echo "Cold Blooded: " . ($shaun->coldBlooded ? 'Yes' : 'No') . "\n";
$shaun->jump();

echo "\n";

echo "Name: " . $buduk->name . "\n";
echo "Legs: " . $buduk->legs . "\n";
echo "Cold Blooded: " . ($buduk->coldBlooded ? 'Yes' : 'No') . "\n";
$buduk->jump();

echo "\n";

echo "Name: " . $keraSakti->name . "\n";
echo "Legs: " . $keraSakti->legs . "\n";
echo "Cold Blooded: " . ($keraSakti->coldBlooded ? 'Yes' : 'No') . "\n";
$keraSakti->yell();

?>