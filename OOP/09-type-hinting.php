<?php
namespace Gateway;

class bKash{
    public function createCharge($data){
        echo $data;
    }
}

class Gateway
{
    public function getId( int $id )
    {
        echo $id + 1;
    }

    public function getName(string $name){
        echo $name;
    }

    public function createCharge(bKash $obj, $data){
        return $obj->createCharge($data);
    }
}


$gateway = new Gateway();
$gateway->createCharge(new bKash(), 'Test1');

