<?php
    // ? if statement - executes some code if one condition is true

    $x = 10;
    if($x == 10) {
        echo "it's true"; 
    }
    echo'<br>';

    // ? if...else statement - executes some code if a condition is true and another code if that condition is false

    $x = 9;
    if($x >= 10) {
        echo "it's true"; 
    } else {
        echo "it's false"; 
    }
    echo'<br>';
    
    // ? if...elseif...else statement - executes different codes for more than two conditions
    $age = 10;
    $currentAge = 21;
    if($age > $currentAge) {
        echo "pass"; 
    } else if ($age == $currentAge){
        echo "please wait"; 
    } else {
        echo 'fail';
    }
?>