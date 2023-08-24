<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP basic</h1>
    <?php
        $a = 10; // global scope
        $b = 10;
        function myFun() {
            $a1 = 20;  // local scope
            echo "<p>$a1</p>";
        }
        myFun();
        echo $a + $b; 
        echo "we con't access function variable outside the function $a1"
    ?>
    <br>
    <?php
        $x = 5;
        $y = 10;
        
        function myFun1() {
        global $x, $y;
        $y = $x + $y;
        }
        
        myFun1();
        echo $y; // outputs 15
    ?>
    <br>
    <?php
        $x = 55;
        $y = 10;

        function myFun2() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        myFun2();
        echo $y; // outputs 15
    ?>
    <br>
    <?php
        function myTest() {
            static $x = 0;
            echo $x;
            $x++;
        }

        myTest();
        myTest();
        myTest();
    ?>
    <br>
    <?php
        echo 'this is the echo output data to the screen.'; 
    ?>
</body>
</html>