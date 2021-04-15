<?php
// Посчитать сумму массивов и вывести индекс большего.
$arr = [[1,2,10], [8,-2,0], [2,5,3]];

foreach ($arr as $key) {
    $result[]= array_sum($key);
    $max = max($result);
}
//echo $max;
$arr2 = array_search($max, $result);
echo $arr2;


