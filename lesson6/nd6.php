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
    <form action="register.php" method="POST">
    UserName:<input type="text" name="username">
    Password:<input type="password" name="password">
    E-mail:<input type="email" name="email">
    Name:<input type="text"  name="name">
    <input type="submit" value="Register" name="registerme">
</form>
</body>
</html>