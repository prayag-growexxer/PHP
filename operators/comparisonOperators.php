<?php 
    $a = 10;
    $b = '10';
    $y = 10;
    $x = 8;

    // ? Equal returns true if $a is equal to $b 
    var_dump($a == $b); 

    // ? Identical returns true if $a is equal to $y, and they are of the same type
    var_dump($a === $b);  // false 
    var_dump($a === $y);  // true

    // ? Not equal returns true if $a is not equal to $x
    var_dump($a != $b); // false
    var_dump($a != $x); // true

    var_dump($a <> $x); // ! this also doing same things

    // ? Not identical returns true if $a is not equal to $b, or they are not of the same type	
    var_dump($a !== $b); // true because types are not equal

    // ? Greater than returns true if $x is greater than $y
    var_dump($x > $y);  // false

    // ? Less than returns true if $x is less than $y
    var_dump($x < $y); // true

    // ? Greater than or equal to returns true if $a is greater than or equal to $y
    var_dump($a >= $y); // true because both value is same

    // ? Less than or equal to to returns true if $a is less than or equal to to $y
    var_dump($a <= $y); // true because both value is same


    // ! <=> this return -1, 0, 1
    /* Returns an integer less than, equal to, or greater than zero, depending on if $x 
     is less than, equal to, or greater than $y. Introduced in PHP 7. */
    // echo ($x <=> $y); y is grater than x so print -1
?>