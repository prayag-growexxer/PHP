<?php 
    // ? To create a constant, use the define() function.
    // ? define(name, value, case-insensitive)  SYNTAX
    define('test', 5, true); // ! if case-insensitive is true it work with TEST and print value
    echo TEST; 
    echo"<br>";

    // ? Constant Arrays
    // ! In PHP7, you can create an Array constant using the define() function.
    // define('newArray',[
    //     '1',
    //     '2',
    //     '3'
    // ]);

    // echo newArray[0];

    // ? Constants are Global
    // ! Constants are automatically global and can be used across the entire script.
    define('prayag', 'prayag'); // ! by default case-insensitive value is false 
    function testName() {
        echo prayag;
    }
    testName();
?>