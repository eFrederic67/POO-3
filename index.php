<?php

require_once 'POO basics 1&2/Bicycle.php';
require_once 'POO basics 1&2/Car.php';
require_once 'POO basics 1&2/Truck.php';
require_once 'POO 3/MotorWay.php';
require_once 'POO 3/PedestrianWay.php';
require_once 'POO 3/ResidentialWay.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


var_dump(Car::ALLOWED_ENERGIES);


$truck = new Truck(100, 'red', 3, 'fuel');

var_dump($truck);

echo $truck->getLoad();

$Motor = new MotorWay();
var_dump($Motor);

$Motor->addVehicule($truck);
var_dump($Motor);