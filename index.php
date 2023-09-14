<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        .card {
            box-sizing: border-box;
            width: 190px;
            height: 254px;
            background: rgba(217, 217, 217, 0.58);
            border: 1px solid white;
            box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
            backdrop-filter: blur(6px);
            border-radius: 17px;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s;
            display: flex;
            align-items: center;
            justify-content: center;
            user-select: none;
            font-weight: bolder;
            color: black;
        }

        .card:hover {
            border: 1px solid black;
            transform: scale(1.05);
        }

        .card:active {
            transform: scale(0.95) rotateZ(1.7deg);
        }

        .flex {
            display: flex;
            justify-content: space-around;
        }
        </style>
    </head>
    <body>
        <?php 
            function myFunction() {
                include 'dataType/math.php';
            }
        ?> 
        <div class="flex">
            <span class="card">
            Click me
            </span>
            <span class="card" onclick="myFunction()">
            Click me
            </span>
        </div>
    </body>
</html>