<?php 

// Реализовать функцию возведения в степень.

function f_pow($a, $b) {
    if($b < 0) return -1;

    $result = 1;
    for($i = 1; $i <= $b; $i++) {
        $result = $result * $a;
    }
    return $result;
}




function f_fact($n) {
    $result = 1;
    for($i = 1; $i <= $n; $i++) {
        $result = $result * $i;
    }
    return $result;
}



function f_equation($x, $n) {
    $result = 1;
    for($j = 1; $j <= $n; $j++) {
        $result = $result + (f_pow($x, $j) / f_fact($j));
    }
    return $result;

}

echo f_equation(1, 100);