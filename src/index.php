<?php
require_once "Car.php";
require_once "Moto.php";
require_once "Vehicle.php";
require_once "CarEnum.php";

//echo "Hello world";
//
//$variavel = "O que tu quiser de valor";
//echo "<br />";
//echo $variavel;
//
//$novaVariavel = json_encode([1,2,3,4]);
//echo "<br />";
//echo $novaVariavel;
//
//$novoArray = json_encode([
//    ['id'=>0],
//    ['id'=>1],
//    ['id'=>2]
//]);
//echo "<br />";
//echo $novoArray;


$car = new Car("Kwid");
$moto = new Moto();
$car->setName('Vectra');
$car->setRodas('4');
echo $car->getName();
echo "<br />";
echo $car->getRodas();
echo "<br />";
echo $car->func3();
echo "<br />";
echo Car::func4();
echo "<br />";
echo $car->car1();
echo "<br />";
echo $car->test();
echo "<br />";
echo $moto->test();
echo "<br />";
var_dump(CarEnum::VECTRA->value);
echo "<br />";
echo CarEnum::FIESTA->value;
echo "<br />";

$vehicle = new Vehicle("Renault");
echo $vehicle->abs();
