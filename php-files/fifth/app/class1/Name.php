<?php


namespace App\class1;


interface Arif
{
public function fullName();
}

class Name implements Arif {
 private $firstName;
 public function __construct($data)
 {
     $this->firstName = $data;
 }
 public function fullName()
 {
     return $this->firstName.' hoque';
 }
}
class Name2 implements Arif {
 private $firstName;
 public function __construct($data)
 {
     $this->firstName = $data;
 }
 public function fullName()
 {
     return $this->firstName.' hoque';
 }
}