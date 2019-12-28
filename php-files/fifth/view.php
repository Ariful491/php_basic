<?php
//require "app/class1/Example.php";
//require  "app/class2/Example.php";


//use App\class2\Honda;
use App\class1\Name;
use App\class1\Name2;

require "vendor/autoload.php";
//
////$example =  new App\class1\Example();
////$example2 = new App\class2\Toyota();
//////$example->one();
////$example2->setCarName("Honda");
////echo $example2->carModel();
//
//$honda = new Honda();
//$honda->setName('honda');
//echo $honda->getName();
//

$name = new Name('Arif');
$name2 = new Name2('Sadia');
echo $name2->fullName();
echo $name->fullName();
