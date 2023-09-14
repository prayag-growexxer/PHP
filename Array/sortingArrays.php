<?php
    $numbers = array (4, 6, 2, 22, 11);
    // echo sort($numbers);
    // var_dump(sort($numbers))
    sort($numbers);
    for ($i=0; $i < count($numbers); $i++) { 
        # code...
        echo $numbers[$i]. "<br>";
    }
    
    rsort($numbers);
    for ($i=0; $i < count($numbers); $i++) { 
        # code...
        echo $numbers[$i]. "<br>";
    }
?>