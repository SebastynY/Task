<?php

//Вводится натуральное число. Найти сумму четных цифр, входящих в его состав.
$x = 22222323;

while($x !== 0) {
    $current = $x % 10;
    $x = intdiv($x, 10);
    $arr [] = $current;
}
//print_r($arr);

foreach($arr as $i) {
    if($i % 2 == 0) {
        $result [] = $i;
    }
}
echo array_sum($result);

