<?php
include "Vehicle.php";
class Train extends Vehicle{
    public $trackGauge;
   
    public function __construct($brand, $trackGauge, $mileage) {
        parent::__construct($brand, $mileage);
        $this->trackGauge = $trackGauge;
        
    }

    public static function makeNoises() {
        echo "Tchoo, Tchoo!";
    }
}



?>
