<?php

class User
{
    public static $name = "Fred Bloggs";
    public static $counter = 0;
    public static function updateName()
    {
        return self::$name = "Joe Bloggs";
    }
    public static function increaseCounter()
    {
        self::$counter++;
    }
}

User::increaseCounter();
echo User::$counter . "\n"; // 1
User::increaseCounter();
echo User::$counter . "\n"; // 2
User::increaseCounter();
echo User::$counter . "\n"; // 3
User::updateName();
echo User::$name; // Joe Bloggs
