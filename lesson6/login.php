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
   Username: <input type="text" name="user"><br>
   <br>
    Password: <input type="text" type="passw">
    <?php foreach($_SESSION as $info);
    if(!empty($info)){
        echo "<br>Registration successful!";
    }
    else
    echo "<br> Error";
?>
</body>
</html>