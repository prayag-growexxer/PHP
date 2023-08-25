<?php
    $pi = pi(); // *pi value 
    $random = rand();
    $nativeValue = -4;
    $number1 = 0.6;
    $number2 = 0.3;
    echo $pi;
    echo"<br>";
    echo(min(1,8,6,5,7,5,6));  // returns 1
    echo"<br>";
    echo(max(1,8,6,5,7,5,6));  // returns 8
    echo"<br>";
    echo(abs($nativeValue)); // *  function returns the absolute (positive) value of a number: 
    echo"<br>";
    echo(round($number1)); // * function rounds a floating-point number to its nearest integer:
    echo"<br>";
    echo(round($number2)); // * function rounds a floating-point number to its nearest integer:
    echo"<br>";
    echo(sqrt(abs($nativeValue))); // * function returns the square root of a number:
    echo"<br>";
    echo($random); // * function generates a random number:
    echo"<br>";
    echo(rand(10, 100));
?>