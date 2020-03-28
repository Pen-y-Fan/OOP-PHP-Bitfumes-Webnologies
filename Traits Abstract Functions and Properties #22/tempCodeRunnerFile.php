<?php
include_once "mobile.php";
include_once "laser.php";

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
    function abc()
    {}
}