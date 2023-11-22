<?php

class Student
{
    private $name = 'Rasel';

    public $class = '13';

    public function __isset($name)
    {
        return isset($this->$name);
    }

    public function __unset($name)
    {
        unset($this->$name);
    }
    
}

$obj = new Student();
unset($obj->name);
print_r($obj);