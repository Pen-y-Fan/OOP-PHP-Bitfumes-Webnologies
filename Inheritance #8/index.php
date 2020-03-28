<?php

/**
 * Fruits class
 */
class Fruits
{
    public $name;
    public function setName($name)
    {
        $this->name = $name;
    }
}

/**
 * Apple class
 */
class Apple extends Fruits
{
    public function Juice()
    {
        echo 'Juice' . "\n";
    }
}

/**
 * Apple class
 */

class Mango extends Fruits
{
}

$mango = new Mango;
$mango->setName("My Mango");
echo $mango->name; // My Mango

echo "\n";

$apple = new Apple;
$apple->setName("My Apple");
echo $apple->name; // My Apple

echo "\n";

echo $apple->Juice(); // Juice
