<?php
abstract class Animal{
    
    
    function __construct(public $name, public $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function birthday() {
        $this->age++;
    }
}