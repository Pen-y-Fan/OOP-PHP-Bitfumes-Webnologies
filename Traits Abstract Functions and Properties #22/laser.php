<?php
include_once "projector.php";

trait Laser
{
    use Projector;
    public function power()
    {
        echo "10 mW\n";
    }
    abstract public function abc();
}
