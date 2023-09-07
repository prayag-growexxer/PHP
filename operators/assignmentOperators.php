<?php
    // ? "=". It means that the left operand gets set to the value of the assignment expression on the right.
    $x = 10;
    $y = 10;
    $answer;
    $answer = $x + $y; // ? 10 + 10 and sum strode in answer variable
    
    echo $x += $y; // ? but here x + y and that value strode in x variable return 20
    echo '<br>';

    echo $answer;
    echo '<br>';
?>