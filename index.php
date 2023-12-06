<?php
// include "Train.php";
//  include "Car.php";
// include "Tire.php";
//  include "Bird.php";
// include "Dog.php";
// include "Cat.php";
include "Math.php";
$math1 = Math::addTwo(4, 9);
$math2 = Math::factorial(10);
$math3 = Math::sum([1, 2, 3, 4, 5]);
$math4 = Math::average([1, 2, 3, 4, 5]);
$math5 = Math::max([1, 2, 3, 4, 5]);


echo Math::addTwo(4, 9)."<br>";
echo Math::factorial(10)."<br>";
echo Math::sum([1, 2, 3, 4, 5])."<br>";
echo Math::average([1, 2, 3, 4, 5])."<br>";
echo Math::max([1, 2, 3, 4, 5])."<br>";

// $dog1 = new Dog("Reksis", 6);
// $cat1 = new Cat("Mincis", 2);
// $cat1 = new Cat("Btincis", 3);

//  $myCar = new Car("Audi", 0.01);
//  $myTrain = new Train("chiga", 22, 123);


//  $bird1 = new Bird("Railijs🦃🦃🦃🦃🦃🦃🦃", 17);
//  echo  $bird1->name;

//  echo "<br>";
//  $bird2 = new Bird("Gustavs Lieknins👲🏿👲🏿👲🏿", 14);
//  echo  $bird2->name;
//  $bird2->fly();

 

//  $car2 = new Car("BMW", 80000);
//  echo Car::$describe;
 

//  $tire = New Tire("R12", "Summer", "Good");
//  echo $tire->size;
//  echo "<br>";
//  echo $tire->type;

// $train1 = new Train("Express", "Standard", 100000);
// $train2 = new Train("Local", "Narrow", 80000);
// $train1->increaseMileage(240);
// $train2->increaseMileage(240);
// echo Train::makeNoise();
?>