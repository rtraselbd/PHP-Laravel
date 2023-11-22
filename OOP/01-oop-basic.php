<?php

class Main{
    public $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show(){
        echo "My name is {$this->name}\n";
    }
}

$main = new Main('Rasel');
echo $main->show();