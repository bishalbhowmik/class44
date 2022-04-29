<?php

session_start();

if(isset($_SESSION['test'])){
    header('location: admin.php');
}

if(isset($_POST['login'])){

  

    define("EMAIL" , "bishal@gmail.com");
    define("PASSWORD" , 12345);

    $email =  $_POST['email'];
    $password = $_POST['password']; 

    if($email==EMAIL && $password==PASSWORD){

        $_SESSION['test'] = "";
        
        header ('location: admin.php');
    }
    else {
        $fail= "Wrong password or email";
    }
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email Address" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="login" value ="Log In"> <br>
    </form>

    <br>

    <p>
        <?php

        if(isset($fail)){
            echo $fail;
        }

        ?>
    </p>
</body>
</html>