
<?php

class Animal
{
    public $name;
    public $legs;
    public $coldBlooded;

    public function __construct($name, $legs, $coldBlooded)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->coldBlooded = $coldBlooded;
    }
}

?>