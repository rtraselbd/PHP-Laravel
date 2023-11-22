<?php

class Student
{
    private $name = 'Rasel';
    public $class = '13';

    public function __get($name)
    {
        if(property_exists($this, $name)){
            return $this->$name;
        }else{
            echo "Property does not exist: ({$name})";
        }
        //echo "You are trying to access Not existing or Private property: ({$name})";
    }

    public function __set($name, $value)
    {
        if(property_exists($this, $name)){
            $this->$name = $value;
        }else{
            echo "Property does not exist: ({$name})";
        }
    }

    
}

$obj = new Student();
echo $obj->name;