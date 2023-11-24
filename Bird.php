<?php

class Bird{
    public $name;
    private $age;

//konstruktors
    public function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }
    public function __destruct(){
        echo  $this->name . "is dead"."<br>";
    }
  public function fly(){
    echo "I'm flying." , $this->name;
}
}


?>