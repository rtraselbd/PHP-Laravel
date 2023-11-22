<?php

trait hello{
    public function sayHello(){
        echo "Hello From Trait\n";
    }
}

class Base{
    public function sayHello(){
        echo "Hello From Base Class\n";
    }
}

class Child extends Base{
    use hello;
    public function sayHello(){
        echo "Hello From Child Class\n";
    }
}

// $base = new Base();
// $base->sayHello();

$obj = new Child();
$obj->sayHello();