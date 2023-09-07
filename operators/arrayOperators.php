<?php
    // ? The PHP array operators are used to compare arrays.
    // $nameArray = array('prayag', 'prayag1');
    // $ageArray = array('15', '26');
    
    $nameArray = array(0 => 'prayag', 1 => 'prayag1');
    $nameArray2 = array(0 => 'prayag1', 1 => 'prayag1');
    $ageArray = array(2 => '15', 3 => '26');
    $ageArray1 = array(2 => 15, 3 => 26);
    $ageArray2 = array(2 => 15, 3 => 26);

    print_r($ageArray + $nameArray); 
    echo '<br>';

    var_dump($nameArray2 == $nameArray);
    echo '<br>';
    
    var_dump($nameArray2 === $nameArray);
    echo '<br>';

    var_dump($nameArray2 != $nameArray);
    echo '<br>';

    var_dump($nameArray2 <> $nameArray);
    echo '<br>';
  
    var_dump($ageArray !== $ageArray1);
    echo '<br>';

    var_dump($ageArray1 !== $ageArray2);
    echo '<br>';
?>