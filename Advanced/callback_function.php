<?php
    function my_callback($item) {
        //  $item." new product";
         if (strlen($item) > 5) {
            # code...
            return $item;
         }
    }
    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths); // new array
    echo "</br>";

    // ? Run a callback from a user-defined function:
    function sum($a, $b){
        return $a + $b;
    }

    function division($a, $b){
        return $a - $b;
    }

    function runCallBack($a, $b, $fun){
        echo $fun($a, $b)."</br>";
    }

    runCallBack(1,2,'sum');
    runCallBack(1,2,'division');
?>