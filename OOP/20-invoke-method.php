<?php
class Student
{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function __invoke()
    {
        return $this->name; // You can't call object as function
    }
}

$stu = new Student('Rasel');
echo $stu();