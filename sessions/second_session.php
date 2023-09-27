<?php
    session_start();
    echo "</br>";
    echo "first game name is" .$_SESSION['game'];
    echo "</br>";
    echo "total payer" .$_SESSION['player'];
    echo "</br>";
    
    
    // ? Modify a PHP Session Variable
    // ? To change a session variable, just overwrite it:
    $_SESSION['player'] = 10;
    echo "total available payer" .$_SESSION['player'];

    echo "</br>";
    // Another way to show all the session variable values for a user session is to run the following code:
    print_r($_SESSION);

    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    
    echo "</br>";
    echo "total available payer" .$_SESSION['player']; // ? not show any value

?>

