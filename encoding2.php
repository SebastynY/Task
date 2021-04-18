<?php 

//на основе этого напиши функцию isUpper(), которая возвращает true или false, если строка в верхнем регистре. 


//Первый вариант 

function toUpperCase($letter) {
    if(strlen($letter) > 1) {
        return 'null';
    }
    $i = ord($letter);
    if($i > 64 and $i < 91) {
        return 'True';
    } elseif ($i > 96 and $i < 123) {
        return 'False';
    }
     else {
        return 'null';
    }
}

echo toUpperCase(5);
echo '<br>';
echo toUpperCase('F');
echo '<br>';
echo toUpperCase('f');
echo '<br>';
echo toUpperCase(')');
echo '<br>';
echo toUpperCase('-');
echo '<br>';

//Второй вариант

// function toUpperCase($letter) {
//     if(strlen($letter) > 1) {
//         return 'False';
//     }
//     $i = ord($letter);
//     if($i >= 97) {
//         $result = $i - 32;
//         return chr($result);
//     } elseif ($i < 97 && $i > 122) {
//         return 'null';
//     } elseif($i !== $result) {
//         return 'False';
//     }
//      else {
//         return chr($i);
//     }
// }




// echo toUpperCase(5);
// echo '<br>';
// echo toUpperCase('F');
// echo '<br>';
// echo toUpperCase('f');
// echo '<br>';
// echo toUpperCase(')');
// echo '<br>';
// echo toUpperCase('-');
// echo '<br>';