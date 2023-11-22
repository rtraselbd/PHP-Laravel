<?php

class Student
{
    private $name = 'Rasel';

    private function setName($name){
        $this->name = $name;
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this, $name)){
            call_user_func_array([$this, $name], $arguments);
        }else{
            echo "Method does not exist: ({$name})";
        }
    }
    
}

$obj = new Student();
$obj->setName('Rafi');

var_dump($obj);