<?php
class Student
{
    public $name;
    public $course;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setCourse(Course $name){
        $this->course = $name;
    }

    public function __clone()
    {
        $this->course = clone $this->course;
    }
}

class Course
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

$student = new Student('Rasel');
$student->setCourse(new Course('PHP'));


$student2 = clone $student;

$student2->name = 'Ruman';
$student2->course->name = 'JAVA';

echo $student->name . PHP_EOL;
echo $student->course->name . PHP_EOL;

echo $student2->name . PHP_EOL;
print_r($student2->course->name);