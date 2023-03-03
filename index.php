<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
    <style>
            .div1{
                margin: auto;
                position: absolute;
                top: 0px;
                bottom:0px;
                left: 0px;
                right: 0px;
                width: 470px;
                height: 140px;
                text-align: center;
            }
            
            h2{
                padding: 0px;
                font-weight: 700;
                margin: 10px;
                margin-top: 0px;
            }
            
            .button1{
                padding-top: 10px;
                background-color: blue;
                padding-bottom: 10px;
                padding-left: 20px;
                padding-right: 20px;
                border: 0px;
                border-radius: 10px;
                font-size: 18px;
                color: aliceblue;
            }
            .button2{
                margin-left: 30px;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 20px;
                padding-right: 20px;
                border: 1px solid gray;
                border-radius: 10px;
                font-size: 18px;
                color: black;
            }
        </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
    <div class="div1">
        <h2>Join us and get the update from anywhere</h2>
        <a href="#"><button class="button1">GO TO REGISTER</button></a>
        <a href="#"><button class="button2">GO TO LOGIN</button></a>
    </div>
</body>
</html>