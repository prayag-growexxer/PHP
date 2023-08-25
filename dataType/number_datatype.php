<?php
    $number1 = 5;
    $number2 = 2.3;
    $number3;
    $string = 'hello word';
    $string1 = '15.223';

    echo $number1 * $number2;
    echo '<br>';
    echo var_dump(is_int($number1));
    echo var_dump(is_int($number2));
    echo '<br>';
    echo var_dump(is_float($number2));
    echo var_dump(is_float($number1));
    echo '<br>';
    echo var_dump(is_null($number3));
    echo var_dump(is_null($number2));
    echo '<br>';
    echo var_dump(is_numeric($number1));
    echo var_dump(is_numeric($string));
    
    echo '<br>';
    $cast = (int)$string1;
    echo $cast;
?>