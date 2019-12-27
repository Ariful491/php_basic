<?php


class Bitm
{
    public $name = "Ariful";
    protected $email = "arif@gmail.com";
    private $location = "Dhaka";

    public function one(){
        //echo "One";
       echo $this->location;
    }

    protected  function Two(){
        echo "Two";
    }
    private function Three(){
        echo "Three";
    }


}