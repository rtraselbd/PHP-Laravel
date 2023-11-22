<?php

trait hello{
    public function sayHello(){
        echo "Hello From Hello Trait\n";
    }
}

trait hi{
    public function sayHello(){
        echo "Hello From Hi Trait\n";
    }
}



class Base{
    use hello, hi{
        hello::sayHello insteadof hi;
        hi::sayHello as newHello;
        //hello::sayHello as public newHello;// Private to Public
    }
}

$base = new Base();
$base->sayHello();
$base->newHello();