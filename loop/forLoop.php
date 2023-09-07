<?php
    // loop we need like if we need some block of code repeat so we use loop
    for ($index=0; $index < 5; $index++) { 
        echo 'test'. $index;
        echo '<br>';
    }

    $sum = 0;
    for ($index=0; $index < 5; $index++) { 
         $sum +=  $index;
    }
    echo $sum;
?>  