<?php

class bKash
{
    public function createCharge( $data )
    {
        return ['name' => 'bKash'];
    }
}

abstract class Main
{
    public $name;

    public function __construct( $name )
    {
        $this->name = $name;
    }
    
    abstract protected function createCharge( $data );
}

class Gateway extends Main
{
    public function createCharge( $data )
    {
        $class = $this->name;
        $init = new $class;
        return $init->createCharge( $data );
    }
}

$gateway = new Gateway( 'bKash' );
var_dump( $gateway->createCharge( '' ) );
