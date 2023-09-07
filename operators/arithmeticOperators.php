<?php 

    // Arithmetic Operators
    // ? Arithmetical operations, such as addition, subtraction, multiplication, Division etc.
    $x = 10;  
    $y = '8';
    
    // !Addition
    function sum($a, $b = 10){
        echo $a + $b;
        echo '<br>';
    }
    
    sum($x); // ? print sum 20
    sum($x, $y); // ? print sum 16

    // !Subtraction
    function subtraction($a, $b = 20){
        echo $a - $b;
        echo '<br>';
    }
    
    subtraction($x); // ? print subtraction -10
    subtraction($x, $y); // ? print subtraction 2

    // !Multiplication 
    function multiplication($a, $b = 10){
        echo $a * $b;
        echo '<br>';
    }
    multiplication($x); // ? print multiplication 100
    multiplication($x, $y); // ? print multiplication 80

    // !Division
    function division($a, $b = 10){
        echo $a / $b;
        echo '<br>';
    }
    division($x); // ? print Division value
    division($x, $y); // ? print Division value

    // !Modulus
    function module($a, $b = 10){
        echo $a % $b;
        echo '<br>';
    }
    module($x); // ? print module 0 
    module($x, $y); // ? print module 2

    // !Exponentiation
    function exponentiation($a, $b = 2){
        echo $a ** $b;
        echo '<br>';
    }
    exponentiation($x); // ? print exponentiation 100
    exponentiation($x, $y); // ? print exponentiation 100000000, 10 ** 8 
?>