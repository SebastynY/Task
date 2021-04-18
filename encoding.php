<?php 

//Пользуясь понятием кодирования текстовой информации, напиши функцию, которая превращает символ нижнего регистра в символ верхнего.

function toUpperCase($letter) {
    if(strlen($letter) > 1) {
        return false;
    }
    $i = ord($letter);
    if($i >= 97) {
        $result = $i - 32;
        return chr($result);
    } elseif ($i < 97 && $i > 122) {
        return chr($i);
    } else {
        return chr($i);
    }

}
echo toUpperCase('1'); // '1'
echo '<br>';
echo toUpperCase('!!!!'); // '!'
echo '<br>';
echo toUpperCase('-1'); // '-'
echo '<br>';
echo toUpperCase('B'); // 'B'
echo '<br>';
echo toUpperCase('a'); // 'A'
echo '<br>';
echo toUpperCase('fs'); // False
echo '<br>';
echo toUpperCase('@'); // '@'

