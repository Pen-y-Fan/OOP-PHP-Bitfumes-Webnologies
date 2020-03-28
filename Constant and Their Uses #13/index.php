<?php
class Circle
{
    const PI = 3.14159;
    public function area($radius)
    {
        return $radius * $radius * self::PI;
    }
}
$circle = new Circle;
echo $circle->area(5) . "\n"; // 78.53975

echo $circle::PI . "\n"; // 3.14159

$circle->PI = 3.141; // this is a different property!!

echo $circle::PI . "\n"; // 3.14159

echo $circle->PI; // 3.141
