<?php

interface CondInterface
{

}

trait CondTrait
{

}

// 1
if ( !interface_exists( 'CondInterface' ) ) {
    echo "This Interface is not exist.\n";
}

// 2
if ( !trait_exists( 'CondTrait' ) ) {
    echo "This Trait is not exist.\n";
}

class ParentClass
{

}

class Cond extends ParentClass
{
    public $name;

    public function __construct()
    {
        // 3
        if ( !method_exists( $this, 'testMethod' ) ) {
            echo "This Method is not exist\n";
        }

        // 4
        if ( !property_exists( $this, 'name' ) ) {
            echo "This Property is not exist";
        }
    }

    public function testMethod()
    {

    }
}

// 5
if ( !class_exists( 'Cond' ) ) {
    echo "This Class is not exist";
}

$cond = new Cond();

if ( !is_a( $cond, "Cond" ) ) {
    echo "This object is not of Class: Cond\n";
}

if(!is_subclass_of($cond, 'ParentClass')){
    echo "This \$cond is not a object of subclass of ParentClass";
}
