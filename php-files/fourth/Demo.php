<?php


class Demo
{
public function calculator($operation,$firstnum,$lastnum){
    if($operation== '+'){
        $result = $firstnum + $lastnum;
    }
    elseif ($operation== '-'){
        $result = $firstnum - $lastnum;
    }
    elseif ($operation== '*'){
        $result = $firstnum * $lastnum;
    }
    elseif ($operation== '/'){
        $result = $firstnum / $lastnum;
    }

    return $result;
}


}