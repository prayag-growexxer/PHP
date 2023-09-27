<?php
    session_start();
    // Set session variables
    // ? A session is started with the session_start() function.
    $_SESSION["game"] = "volley boll";
    $_SESSION["player"] = "12";
    echo "Session variables are set.";
?>

