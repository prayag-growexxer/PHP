<?php
    // ? d - Represents the day of the month (01 to 31)
    // ? m - Represents a month (01 to 12)
    // ? y - Represents a year (in Two digits)
    // ? Y - Represents a year (in four digits)
    // ? l (lowercase 'L') - Represents the day of the week

    echo date("d") . "<br>";
    echo date("m") . "<br>";
    echo date("Y") . "<br>";
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l"). "<br>";; 

    // ? H - 24-hour format of an hour (00 to 23)
    // ? h - 12-hour format of an hour with leading zeros (01 to 12)
    // ? i - Minutes with leading zeros (00 to 59)
    // ? s - Seconds with leading zeros (00 to 59)
    // ? a - Lowercase Ante meridiem and Post meridiem (am or pm)
    echo date('h'). "<br>";
    echo date('H'). "<br>";
    echo date('i'). "<br>";
    echo date('h:i'). "<br>";
    echo date('h:i:s a'). "<br>";

    // ? The example below sets the timezone to "America/New_York", then outputs the current time in the specified format:
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa")."<br>";   

    // ? Create a Date With mktime()
    $mkDate = mktime(12, 59, 59, 10, 10, 1999);
    echo date("Y/m/d l h:i:s a",$mkDate)."<br>"; 

    //? Create a Date From a String With strtotime()
    $oneDate = strtotime("10:23pm April 15 2014");
    echo date('Y/m/d l h:i:s a', $oneDate) . "<br>";

    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    
    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";


    // ? get all sunday date in 2023
    $firstDay = strtotime('sunday');
    $endDay = strtotime('31 december 2023', $firstDay);
    echo date($endDay)."<br>";
    echo date($firstDay)."<br>";
    echo var_dump($firstDay > $endDay)."<br>";
    while($firstDay < $endDay){
        echo date("d/m",$firstDay)."<br>";
        $firstDay = strtotime("+1 week",$firstDay);
    }
?>