<?php
    // echo readfile('test.txt');

    $myFile = fopen("test.txt", "r") or die("Unable to open file!");
    echo fread($myFile,filesize("test.txt")); // file name and  file byte
    fclose($myFile);    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    // ? PHP Read Single Line - fgets()
    echo "PHP Read Single Line - fgets()". "<br>";
    $myFile = fopen("test.txt", "r") or die("Unable to open file!");
    echo fgets($myFile); // move to next line 
    echo fgets($myFile); // move to next line
    fclose($myFile);    
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // ? PHP Check End-Of-File - feof()
    echo "PHP Check End-Of-File - feof() <br>";
    $myFile = fopen("test.txt", "r");
    while(!feof($myFile)) {
        echo fgets($myFile). "<br>";
    }
    fclose($myFile);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // ? PHP Read Single Character - fgetc()
    echo "PHP Read Single Character - fgetc() <br>";
    $myFile = fopen("test.txt", "r");
    // echo fgetc($myFile);
    while(!feof($myFile)){
        echo fgetc($myFile)."<br>";
    }

?>