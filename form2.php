<?php

$first = isset($_POST['first_name']) ? $_POST['first_name'] : NULL;
$last = isset($_POST['last_name']) ? $_POST['last_name'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;

if(isset($_POST['info_set'])) {

    $submit = "Submission successful";

    
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET METHOD </title>
</head>
<body>

    <form action="" method="POST">


        <input type="text" name = "first_name" placeholder ="First Name"> <br>
        <input type="text" name = "last_name" placeholder ="Last Name"> <br>
        <input type="email" name = "email" placeholder ="Email"> <br>
        <input type="submit" name = "info_set" value = "Submit"> <br>

    </form>

    <br>

    <?php

    if(isset($_POST['info_set'])){
        echo $submit;
    }

        


    ?>



    <br>

    First Name: <?php echo $first ?> <br>
    Last Name:  <?php echo $last ?> <br>
    Email Address:  <?php echo $email ?> <br>



    
    

</body>
</html>