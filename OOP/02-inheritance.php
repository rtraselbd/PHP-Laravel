<?php

class MainClass{
    public $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show(){
        echo "My name is {$this->name}\n";
    }
}

class ChildClass extends MainClass{
    public function show(){
        echo "Your Name is {$this->name}\n";
    }
}

$main = new ChildClass('Rasel');
echo $main->show();