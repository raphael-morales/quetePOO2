<?php
//require_once('Bicycle.php');
//require_once 'Car.php';
//
//$bike = new Bicycle();
//
//
//// Moving bike
//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->brake() . ' km/h' . '<br>';
//echo $bike->brake();
//
//var_dump($bike);
//
//$car = new Car('red', '5','25');
//
//echo $car->forward();
//echo '<br> Vitesse du vélo : ' . $car->getCurrentSpeedCar() . ' km/h' . '<br>';
//echo $car->brake();
//echo '<br> Vitesse du vélo : ' . $car->brake() . ' km/h' . '<br>';
//echo $car->brake();
//
//var_dump($car);

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


var_dump(Car::ALLOWED_ENERGIES);


$truck = new Truck('red', '3', '100', 'fuel');
$truck->setLoad(11);
var_dump($truck);
echo $truck->getLoad();
