<?php
abstract class Vehicle {
    public $brand;
    protected $mileage;
    static $describe = "lelo";

    public function __construct($brand = "", $mileage = 0) {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }

    public function __destruct() {
        echo $this->brand . " is dead at mileage " . $this->mileage;
    }

    public function increaseMileage($amount) {
        $this->mileage += $amount;
    }

    abstract static function makeNoises();
};
?>