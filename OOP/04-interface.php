<?php
interface GatewayInterface
{
    public function createCharge( $data );
    function paymentSuccess();
    function paymentCancel();
    function ipn();
}

class bKash implements GatewayInterface
{
    public function createCharge( $data )
    {
        var_dump( $data );
    }

    public function paymentSuccess()
    {

    }

    public function paymentCancel()
    {

    }

    public function ipn()
    {

    }
}

class Main
{
    public $name;

    public function __construct( $name )
    {
        $this->name = $name;
    }
}

class Gateway extends Main implements GatewayInterface
{
    public function createCharge( $data )
    {
        $class = $this->name;
        $init = new $class;
        return $init->createCharge( $data );
    }

    public function paymentSuccess()
    {

    }

    public function paymentCancel()
    {

    }

    public function ipn()
    {

    }
}

$gateway = new Gateway( 'bKash' );
$gateway->createCharge( ['name' => 'Rasel'] );
