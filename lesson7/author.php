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
      Name:  <input type="text" name="name">
       Surname: <input type="text" name="surname">
       E-mail: <input type="email" name="email">
        <input type="submit" value="SUBMIT" name="submit">
    </form>
    

    <?php if(isset($_POST['submit'])): 
        $data = array();
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        $data['email'] = $_POST['email'];
        storeUser($data);
        unset($data);
    endif;
    
    ?>
    <?php 
     function getDb(){

        $host= "localhost";
        $user= "root";
        $password = "";
        $db = "myplace";
        $dsn = "mysql:host=$host;dbname=$db";
        return new PDO($dsn, $user, $password);
    } 
        function storeUser($data){
            $sql = "INSERT INTO author (name, surname, email) 
            VALUES (:name, :surname, :email)";

            $sth = getDb()->prepare($sql);
            $sth->execute([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email']
            ]);
        }
    ?>
 
</body>
</html>