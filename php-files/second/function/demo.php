<?php
//$data = "i am a developer";
//echo strlen($data);
//echo strrev($data);
//echo str_word_count($data);


function demo($firstName,$lastName){
   $full_name=$firstName .' '. $lastName;
   return $full_name;
}
echo demo('Arif','khan');
