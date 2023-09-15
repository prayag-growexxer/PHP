<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation form</title>
    <style>
        .error{
            color:red
        }
    </style>
</head>
<body>
    <?php
        $fName = $lName = $email = $gender =  $mNumber = "";
        $fNameError = $lNameError = $emailError = $mNumberError = $genderError = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fName"])) {
                $fNameError = "First name is required";
            } else {
                $fName = test_input($_POST["fName"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/", $fName)) {
                    $fNameError = "Only letters and white space allowed";
                } else {
                    $fNameError = '';
                }
            }

            if (empty($_POST["lName"])) {
                $lNameError = 'Last name is required';
            } else {
                $lName = test_input($_POST["lName"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/", $lName)) {
                    $fNameError = "Only letters and white space allowed";
                } else {
                    $fNameError = '';
                }
            }

            if (empty($_POST["email"])) {
                $emailError = 'Email is required';
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["gender"])) {
                $genderError = '';
            } else {
                $gender = test_input($_POST["gender"]);
            }

            if (empty($_POST["mNumber"])) {
                $mNumberError = '';
            } else {
                $mNumber = test_input($_POST["mNumber"]);
                if (!preg_match("/^[0-9]*$/", $mNumber)) {
                    $mNumberError = "Only numbers allowed";
                } else {
                    if (strlen($mNumber) < 10) {
                        $mNumberError = '10 Dight number is required';
                    } else {
                        $mNumber = '';
                    }
                }
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        First Name: <input type="text" name="fName" id="fName">
        <span class="error">* <?php echo $fNameError;?></span>
        <br>
        <br>
        Last Name: <input type="text" name="lName" id="lName">
        <span class="error">* <?php echo $lNameError;?></span>
        <br>
        <br>
        Mobile Number: <input type="text" name="mNumber" id="mNumber">
        <span class="error"><?php echo $mNumberError;?></span>
        <br>
        <br>
        Email: <input type="email" name="email">
        <span class="error">* <?php echo $emailError;?></span>
        <br>
        <br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
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