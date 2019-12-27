<?php


class Prac
{
    protected $car;
//    private $carModel;
//public function __construct($data,$data1)
//{
//    //echo  "this is magic method";
////   echo
//
// $this->car=$data;
// $this->carModel=$data1;
//}
//public function getCarName(){
//    return "This is my car name ".$this->car." And the model is ".$this->carModel;
//}

    public function setCarName($data)
    {
        $this->car = $data;

    }

}
class Car extends Prac{
    public function hello(){
        return "The car Name is ".$this->car;
    }
}