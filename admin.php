<?php

    session_start();

    if(!isset($_SESSION['test'])){

        header('location: home.php');
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <h1>WELCOME TO ADMIN PANEL</h1>

    <a href="logout.php">Log Out</a>
</body>
</html>