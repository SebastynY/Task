<?php
// Создаём функцию, которая считает косинус.
include 'exponentiation.php'; // Функции брали отсюда. 



function f_cosine($x, $n) {
    $result = 0;
    for($i = 0; $i <= $n; $i++) {
        $result = $result + (f_pow(-1, $i) * (f_pow($x, 2 * $i) / f_fact(2 * $i)));
    }
    return $result;
}

echo f_cosine(pi() / 4, 5);