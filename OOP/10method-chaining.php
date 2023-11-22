<?php
class Me
{
    public function eat(){
        echo "I'm eating\n";
        return $this;
    }

    public function sleep(){
        echo "I'm sleeping\n";
        return $this;
    }

    public function code(){
        echo "I'm coding\n";
    }
    
}

$rasel = new Me();
$rasel->eat()
    ->sleep()
    ->code();