<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
<?php
    //  declare(strict_types=1);
    //! Create a User Defined Function in PHP
    function printEcho(){
        echo 'run over function';
    }
    printEcho(); 
    echo "</br>";

    //! PHP Function with one Arguments
    function argumentFun($name){
        echo 'This is your name '.$name;
        echo "</br>";
    }
    argumentFun('prayag');
    argumentFun('prayag1');
    
    //! PHP Function with more Arguments
    function argumentFun2($x, $y = 5){
        echo $x + $y ."</br>";
    }
    argumentFun2(1, 2);
    argumentFun2(2, 5);
    // argumentFun2(2,'2 yr'); // it will give a error

    //! PHP Default Argument Value
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);

    //  function addNumbers(float $a, float $b) : float {
    //     return $a + $b;
    // }
    // echo addNumbers(1.2, 5.2);

    //! Passing Arguments by Reference
    function add_five(&$value) {
        $value += 5;
      }
      
      $num = 2;
      add_five($num);
      echo $num;
?>
</body>
</html>