<?php

abstract class Car
{
    public function getName()
    {
        return "I am a Car" . "\n";
    }

    abstract public function calculateTankArea();
}
