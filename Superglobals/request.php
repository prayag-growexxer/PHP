<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php  echo $_SERVER['PHP_SELF'] ?>">
        name : <input type="text" name="name" id="name">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['name'];
            if (empty($name)) {
              echo "Name is empty";
            } else {
              echo $name;
            }
          }
    ?>
</body>
</html>