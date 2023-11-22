<?php

class Base{
    public static $name = 'Rasel';

    public function showName(){
        echo static::$name; // Just used static
    }
}


class Child extends Base{
    public static $name = 'Rafi';
}

$rt = new Child();
$rt->showName();

