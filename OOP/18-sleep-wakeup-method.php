<?php
class Student
{
    public $name    = 'Rasel';
    public $class   = '13';
    public $course  = 'PHP';
    public function getName(){
        return $this->name;
    }

    public function __sleep()
    {
        return ['name', 'class'];
    }

    public function __wakeup()
    {
        echo "Unserialized\n";
    }
}

$obj = new Student();
$seri = serialize($obj);
$unseri = unserialize($seri);
print_r($unseri);
