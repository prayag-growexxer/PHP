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
    </form>
</body>
</html>