<?php
    //? There are two ways to create an associative array: 
    // $age = array("prayag"=>"35", "jeel"=>"37", "none"=>"0");
    // ? OR
    $name['prayag'] = "35";
    $name['jeel'] = "37";
    $name['none'] = "0";

    echo $name[prayag ]. '<br>';

    // for ($i=0; $i < count($name); $i++) { 
    //     # code...
    //     echo $name[]
    // }

    foreach( $name as $a => $value) {
        echo $a. '<br>';
        echo $a.' age is'. $value . '<br>';
    }
?>