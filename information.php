<?php

$first = isset($_GET['first_name']) ? $_GET['first_name'] : "Bishal";
$last = isset($_GET['last_name']) ? $_GET['last_name'] : "Bhowmik";
$email = isset($_GET['email']) ? $_GET['email'] : "bishal@gmail.com";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Page</title>
</head>
<body>
    
    First Name <?php echo $first ?> <br>
    Last Name <?php echo $last ?> <br>
    Email Address <?php echo $email ?> <br>


</body>
</html>