<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="display.php" method="post">
        name = <input type="text" name="fName" id="fName">
        Email = <input type="email" name="email" id="email">

        <button type="submit">SEND</button>
    </form>
    <?php
        // ? The PHP superglobals $_GET and $_POST are used to collect form-data.
        // ? simple form
    ?>
</body>
</html>