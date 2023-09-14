<?php
    $number = array(1, 2, 3);
    echo  $number[0]." ". $number[1] . " and " . $number[2] .'</br>';
    echo count($number).'</br>';

    // Loop Through an Indexed Array
    for($x = 0; $x < count($number); $x++) {
        echo $number[$x];
        if ($number[$x] == 1) {
            # code...   
            break;
        }
        echo "<br>";
    }
?>