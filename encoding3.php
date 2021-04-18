<?php
//Функция, которая считает количество символов в верхнем регистре в строке.
function quantityUpper($letters) {
    for ($i = 0; $i < strlen($letters); $i++){
        $result [] = ord($letters[$i]);
    }
    foreach ($result as $key) {
        if($key >= 65 && $key <= 90) {
            $sum += 1;
        }
    }
    if($sum == 0) {
        echo '0';
    }
    echo $sum;
   
}
echo quantityUpper('aFBfFFsaF');
echo '<br>';
echo quantityUpper('FdadFaw');
echo '<br>';
echo quantityUpper('fFsawEew');
echo '<br>';
echo quantityUpper('FAefdsfEEafsafaEEE');
echo '<br>';
echo quantityUpper('-');
echo '<br>';
echo quantityUpper('dfsfdsfsdfs');
echo '<br>';
echo quantityUpper('AAAAAAAAAAAAAAAA');
echo '<br>';

