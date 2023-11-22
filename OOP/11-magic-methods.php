<?php
class Magic
{
    public function __construct()
    {
        echo "This is construct function\n";
    }

    public function code(){
        echo "I'm coding\n";
    }

    public function __destruct()
    {
        echo "This is destruct function\n";
    }
    
}

$obj = new Magic();
$obj->code();