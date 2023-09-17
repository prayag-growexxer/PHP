<?php
    // echo getcwd();
    $file = fopen('prayag.txt', "a+") or die("Unable to open file!");
    $txt = "new file\n";
    fwrite($file, $txt);
    $txt = "close file after update\n";
    fwrite($file, $txt);
    fclose($file);

    // ? PHP Overwriting
    $file = fopen("prayag.txt", "w") or die("Unable to open file!");
    $txt = "delete all data \n";
    fwrite($file, $txt);
    $txt = "add new data \n";
    fwrite($file, $txt);
    fclose($file);

    // ? PHP Append Text
    $myfile = fopen("prayag.txt", "a") or die("Unable to open file!");
    $txt = "get old data\n";
    fwrite($myfile, $txt);
    $txt = "append with new data\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>