<?php


class Demo
{
public function oddEvenCheck($data){

    $starting_number = $data['starting_number'];
    $ending_number   = $data['ending_number'];
    $check = $data['check'];


    $res = '';
    for ($i = $starting_number; $i<=$ending_number; $i++){
        if ($i%2!=0 &&  $check  = 'odd'){
            $res .= $i.' ';

        }
        elseif ($i%2==0  && $check = 'even'){
            $res .= $i.' ';
        }


       // $res .= $i.' ';

    }return $res;


}
}