<?php
$data=[];
$data[0][0]=10;
$data[0][1]=20;
$data[0][2]=30;


$data[1][0]=40;
$data[1][1]=50;
$data[1][2]=60;

foreach ($data as $datum){
    //echo $datum[0].' '.$datum[1].' '.$datum[2].'<br>';

    foreach ($datum as $item){
        echo "$item"."<br>";
    }
}