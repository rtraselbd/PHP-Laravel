<?php

abstract class UPApi{
    protected static $api_key;
    protected static $api_url;

    abstract public function createCharge();
}

class UddoktaPay extends UPApi{

    public function __construct($apiKey, $apiUrl){
        parent::$api_key = $apiKey;
        parent::$api_url = $apiUrl;
    }

    public function createCharge(){
        echo parent::$api_key;
    }
}

$up = new UddoktaPay('Test API', 'Test URL');

echo $up->createCharge();