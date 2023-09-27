<?php
    // ? The filter_list() function can be used to list what the PHP filter extension offers:
    // ? filter_var()
    // ==>        The variable you want to check
    // ==>        The type of check to use

    // ? Sanitize a String
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
    echo "</br>";
    
    // ? Validate an Integer
    $int = 155;
    echo filter_var($int, FILTER_VALIDATE_); // ? if is filter then return value is't not filter return nothing
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }
    echo "</br>";


    // ? Validate an IP Address
    $ip = "127.0.0.1.565";
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo("$ip is a valid IP address");
    } else {
        echo("$ip is not a valid IP address");
    } 
    echo "</br>";
    
    // ? Sanitize and Validate an Email Address
    $email = "<>prayag@gmail.com";
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email; // prayag@gmail.com after filter
    echo "</br>";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email is a valid email address");
    } else {
        echo("$email is not a valid email address");
    }
?>