<?php
    // ? To modify a cookie, just set (again) the cookie using the setcookie() function:
    $cookie_name = "owner_name"; // key name is same when you want to modify cookies 
    $cookie_value = "test owner";
    setcookie($cookie_name, $cookie_value, time() + (5), "/");

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Value is: " . $_COOKIE[$cookie_name];
    } else {
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    // ? Delete cookies 
    // ? To delete a cookie, use the setcookie() function with an expiration date in the past:
    setcookie("user", "", time() - 3600); // ! set pass time for delete cookies
?>