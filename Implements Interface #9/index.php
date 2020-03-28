<?php

interface ShapeInterface
{
    public function getArea();
}

interface GeometryInterface
{
    public function getPerimeter($value1, $value2);
}

class Triangle implements ShapeInterface
{
    public function getArea()
    {
        echo 'Triangle Area' . "\n";
    }
}

class Rectangle implements ShapeInterface, GeometryInterface
{
    // Fatal error: Class Rectangle contains 1 abstract method and must
    // therefore be declared abstract or implement the remaining methods
    // (ShapeInterface::getArea)
    /*
    public function calculateArea()
    {
    echo 'Rectangle Area' . "\n";
    }
     */
    public function getArea()
    {
        echo 'Rectangle Area' . "\n";
    }
    public function getPerimeter($length, $breath)
    {
        echo 'Rectangle perimeter is the length of the four sides: ';
        echo $length * 2 + $breath * 2 . "\n";
    }
}

$rect = new Rectangle;

$rect->getArea(); // Rectangle Area
// $rect->calculateArea(); // Rectangle Area
$rect->getPerimeter(2, 3);

$tri = new Triangle;
$tri->getArea(); // Triangle Area
// More than one interface can be implemented per class.
