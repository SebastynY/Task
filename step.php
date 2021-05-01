<?php 


function f_range($from, $to, $step) {
    $arr = [];
    for($i = $from; $i <= $to; $i = $i + $step) {
        $arr [] = $i;
    }
    
    return print_r($arr);
    

}
echo f_range(3, 10, 2);

// $step = 2;
// $array = [1,2,3,4,5,6];
// $array = unset($array[$i] > $step);
// print_r($array);