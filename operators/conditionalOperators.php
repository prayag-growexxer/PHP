<?php
    $currentAge = 20;
    $basedAge = 18;

    $answer = ($currentAge > $basedAge) ? 
    'please open you back account' : 
    'please wait'.( $basedAge - $currentAge ).'Years';
    echo $answer; 
    echo '<br>';
    
    // ? Null coalescing
    // variable $age is 23 if $color does not exist or is null
//    echo $age = $age ?? 23;
?>