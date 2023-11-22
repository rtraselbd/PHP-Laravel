<?php

trait ConsTrait
{

    public function getTraitName(){
        echo "Trait nams is: " . __TRAIT__ . PHP_EOL;
    }
}

class Cons
{
    use ConsTrait;

    public function getClassName(){
        echo "Class nams is: " . __CLASS__ . PHP_EOL;
    }

    public function getMetodName(){
        echo "Method nams is: " . __METHOD__ . PHP_EOL;
    }

    public function getNamespaceName(){
        echo "Namespace nams is: " . __NAMESPACE__ . PHP_EOL;
    }

    public function getFuncName(){
        echo "Function nams is: " . __FUNCTION__ . PHP_EOL;
    }

    public function getLine(){
        echo "Line Number: " . __LINE__ . PHP_EOL;
    }

    public function getFile(){
        echo "File location: " . __FILE__ . PHP_EOL;
    }

    public function getDir(){
        echo "Dir location: " . __DIR__ . PHP_EOL;
    }
}

$cons = new Cons();
$cons->getTraitName();
$cons->getMetodName();
$cons->getClassName();
$cons->getNamespaceName();
$cons->getFuncName();
$cons->getLine();
$cons->getFile();
$cons->getDir();