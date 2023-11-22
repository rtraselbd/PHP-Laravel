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
        return $this->name;
    }
}

$stu = new Student('Rasel');
echo $stu();