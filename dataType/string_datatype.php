<?php
    $sting = "some commonly used functions used to manipulate strings.";
    echo $sting;
    echo '<br>';
    echo strlen($sting); // * function returns the length of a string.
    echo '<br>';
    echo str_word_count($sting); // *function counts the number of words in a string.
    echo '<br>';
    echo strrev($sting); // *function reverses a string.
    echo '<br>';
    echo strpos($sting, 'used'); // *function searches for a specific text within a string. 
    echo '<br>';
    echo str_replace('used', 'use', $sting); // *function searches for a specific text within a string. 
?>