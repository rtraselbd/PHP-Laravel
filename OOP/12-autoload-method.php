<?php

spl_autoload_register(function ($class){
    require "classes/{$class}.php";
});

// $user = new User();
$product = new Product();