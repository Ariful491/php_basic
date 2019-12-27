<?php


class Prac
{
public $first_name;

public function hello(){
    echo "hello".' '.$this->first_name;
    return $this;
}
public function register(){
    echo">>Registered";
    return $this;
}
public function email(){
    echo ">>Email sent";
}


}