<?php

namespace App\class2;
//class Example
//{
//    public  $name = "Sakib Khan ";
//
//    public function one(){
//        echo "one";
//    }
//
//}

abstract class Car2{
    protected $carName;
    public function setCarName($name){
        $this->carName=$name;

    }
    abstract public function carModel();
}
class Toyota extends Car2
{
    public function carModel()
    {
        $model = $this->carName;
        return $model;
    }
}






