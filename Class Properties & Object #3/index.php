<?php
/**
 * Student class
 */

class Student
{
    public $name = "Michael";
    public $attendance = true;
    public $totalMarks = 89;
}

$student = new Student();

echo $student->name . "\n";
echo $student->attendance . "\n";
echo $student->totalMarks . "\n";

echo $student->totalMarks = 99 . "\n";

// Create a new instance of the class.
$student10 = new Student();

/*
Michael
1
89
99
 */
