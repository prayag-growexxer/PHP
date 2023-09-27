<?php
    $cookie_name = "owner_name";
    $cookie_value = "prayag talaviya";
    setcookie($cookie_name, $cookie_value, time() + (5), "/");

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Value is: " . $_COOKIE[$cookie_name];
    } else {
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
?>