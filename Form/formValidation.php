<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        First Name: <input type="text" name="fName" id="fName">
        <br>
        <br>
        Last Name: <input type="text" name="lName" id="lName">
        <br>
        <br>
        Mobile Number: <input type="number" name="mNumber" id="mNumber">
        <br>
        <br>
        Email: <input type="email" name="email">
        <br>
        <br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other

        <button >Submit</button>
    </form>
    <?php
        $fName = $lName = $email = $gender = '';
        $mNumber = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fName = test_input($_POST["fName"]);
            $lName = test_input($_POST["lName"]);
            $email = test_input($_POST["email"]);
            $mNumber = test_input($_POST["mNumber"]);
            $gender = test_input($_POST["gender"]);
        }
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        echo "<h2>Your Input:</h2>";
        echo $fName;
        echo "<br>";
        echo $lName;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $mNumber;
        echo "<br>";
        echo $gender;
    ?>
</body>
</html>