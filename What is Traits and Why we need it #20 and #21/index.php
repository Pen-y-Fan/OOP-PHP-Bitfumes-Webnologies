<?php
include_once "mobile.php";
include_once "laser.php";
include_once "projector.php";

class Galaxy extends Mobile
{
    use Laser, projector {
        Laser::power insteadof Projector;
        Projector::power as projectorPower;
    }
    function getGalaxy()
    {
        echo "I'm a galaxy";
    }
}

$phone = new Galaxy;

$phone->battery(); // I'm a battery

// $obj1 = new Laser;
// Fatal error: Uncaught Error: Cannot instantiate trait Laser
$phone->power(); // 10mW
$phone->range(); // Projector range: 2m
$phone->projectorPower(); // I am the Projector power
