<?php
interface GatewayInterface
{
    public function createCharge( $data );
    function paymentSuccess();
    function paymentCancel();
    function ipn();
}


class Gateway implements GatewayInterface
{
    public function createCharge( $data )
    {
        return $data;
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

$gateway = new Gateway();
$result = $gateway->createCharge( ['name' => 'Rasel'] );
print_r($result);
