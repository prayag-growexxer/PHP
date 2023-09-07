<?php
    $x = 100;  
    $y = 50;

    // ?	True if both $x and $y are true
    if ($x == 10 and $y == 50) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";

    if ($x == 100 && $y == 50) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";

    // ?	True if either $x or $y is true
    if ($x == 10 or $y == 50) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";

    if ($x == 10 || $y == 0) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";
    
    // ?	True if either $x or $y is true, but not both
    if ($x == 100 Xor $y == 50) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";

    // ? True if $x is not true
    if (!($x == 10)) {
        echo "True";
    } else {
        echo "False";
    }
?>  