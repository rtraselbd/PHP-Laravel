<?php

abstract class UPApi{
    protected static $api_key;
    protected static $api_url;
}

class UddoktaPay extends UPApi{
    //private static $instance;

    public function __construct($apiKey, $apiUrl){
        parent::$api_key = $apiKey;
        parent::$api_url = $apiUrl;
    }

    public function createCharge(){
        echo parent::$api_key;
    }

    // public static function init(){
    //     if(self::$instance == null){
    //         self::$instance = new UddoktaPay;
    //     }
    //     return self::$instance;
    // }
}

$up = new UddoktaPay('Test API', 'Test URL');

echo $up->createCharge();


// $up = UddoktaPay::init();