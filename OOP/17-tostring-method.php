<?php

class Student
{
    private $name = 'Rasel';

    public $class = '13';

    public function __toString()
    {
        return "You can't print object as string of class: " . get_class($this);
    }
    
}

$obj = new Student();
echo $obj;