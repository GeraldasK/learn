<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
   Username: <input type="text" name="user"><br>
   <br>
    Password: <input type="text" type="passw">
    <input type="submit" value="Submit" name="submit">
</form>
    <?php 
     if (!empty($_SESSION['username']) && !empty($_SESSION ['password']))
     {
         echo "Login Successful";
     }
     else
         {
         echo "Error";
     }
     unset ($_SESSION['username'], $_SESSION ['password']);
     
?>
</body>
</html>
