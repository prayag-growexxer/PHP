<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include and require</title>
</head>
<body>
    <!-- require will produce a fatal error (E_COMPILE_ERROR) and stop the script -->
    <!-- include will only produce a warning (E_WARNING) and the script will continue -->
    <?php 
        // include 'prayag.php'; 
        // echo "it is working";
    ?>
    
    <?php 
        // require 'prayag.php'; 
        // echo "it is working";
    ?>

    <?php
        include 'var.php';
        echo $myProjectName."<br>";
        echo $startDate;
    ?>
    <br>
    <?php include "button.php" ?>
    <br>
    <?php include "copy.php" ?>


</body>
</html>