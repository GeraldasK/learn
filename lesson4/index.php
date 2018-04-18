<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="user.php" method="POST">
<input type="text" name="username" id="">
<input type="password" name="password">
<input type="submit" value="Submit">
</form>

   <?php if(!empty($_SESSION['user'])){
       echo "Welcome back ".$_SESSION['user'];}
       else 
       echo "Nieko nera.";
   ?>
</body>
</html>