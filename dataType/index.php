<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data type</title>
</head>
<body>
    <!-- // ! string datatype  -->
    <?php
        $string = 'string';
        echo "$string";
    ?>
    <br>
    <!-- // ! integer datatype -->
    <?php
        $integer = 12;
        $float = 12.5;
        echo $integer;
        echo "<br>"; 
        echo $float;
        echo "<br>"; 
        var_dump($integer); // * var_dump for check datatype
        var_dump($float); // * var_dump for check datatype
    ?>
    <br>
    <!-- // ! Boolean datatype -->
    <?php
        $boolean1 = true;
        $boolean2 = false;
        echo "first result ". $boolean1 . " show";
        echo "<br>"; 
        echo "second result".$boolean2;
        var_dump($boolean1); // * var_dump for check datatype
        var_dump($boolean2); // * var_dump for check datatype
    ?>
    <br>
    <!-- // ! Array datatype -->
    <?php
        $name = array("prayag","talaviya");
        echo "first result ". $name[1];
        echo "first result ". $name;
        var_dump($name); // * var_dump for check datatype
    ?>
    <br>
    <!-- // ! Object datatype -->
    <?php
        class Car {
            public $color;
            public $model;
            function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }

            function message() {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }

            function setColor($color){
                $color =  $color;
            }
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar -> message();
        $myCar -> setColor('green');
        echo "<br>";
        echo $myCar -> message();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar -> message();
    ?>
    <!-- // !NUll datatype -->
    <?php
        $null = null;
        var_dump($x); // * var_dump for check datatype
    ?>  
</body>
</html>