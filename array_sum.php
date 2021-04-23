<?php 

// Найти сумму массива без использований функций 

$a = [2, 4, 12, -1, 0, 9];
function f_sum($arr){ 
    $result = 0;
    for($i = 0; $i < count($arr); $i++) {
        $result = $result + $arr[$i];
    }
    return $result;
}

echo f_sum($a);