<?php

require "car.php";
require "bmw.php";

// $car = new Car; // Error: Cannot instantiate abstract class Car
$car = new BMW; // I am a Car

echo $car->getName(); // I am a Car

// Before the calculateTankArea method was added to BMW class:
// Fatal error: Class BMW contains 1 abstract method and must therefore be
// declared abstract or implement the remaining methods (Car::calculateTankArea)

echo $car->calculateTankArea(); // Tank area for BMW is xyz

// abstract class can work like a normal class and like an interface.
