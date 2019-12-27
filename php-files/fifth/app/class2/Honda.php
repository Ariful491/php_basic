<?php


namespace App\class2;


interface Car
{

    public function setName($name);
    public function getName();
}
class Honda implements Car{
    private $carName;


    public function setName($name)
    {
        $this->carName=$name;
    }
    public function getName()
    {
        return $this->carName;
    }
}