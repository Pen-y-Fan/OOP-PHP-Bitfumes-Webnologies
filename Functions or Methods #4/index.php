<?php
/**
 * Student class
 */

class Student
{
    public $name;
    public $attendance;
    public $totalMarks;

    /**
     * Student Details
     *
     * @param str $name
     * @param boo $attendance
     * @param int $totalMarks
     *
     * @return void
     */
    public function studentDetails($name, $attendance, $totalMarks)
    {
        $this->name = $name;
        $this->attendance = $attendance;
        $this->totalMarks = $totalMarks;
    }
}

$student10 = new Student();
$student10->studentDetails("Michael", false, 99);
echo $student10->name;

// Michael
