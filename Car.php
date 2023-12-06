<?php
include "Vehicle.php";
class Car extends Vehicle {
  
    static $describe = "lil niggas are lil <br>";

    

    public function __destruct() {
        echo $this->brand . " is dead at mileage " . $this->mileage;
    }

    public function increaseMileage($amount) {
        $this->mileage += $amount;
    }
    static function makeNoises(){
        echo "beep, Beep!";
    }
}
?>