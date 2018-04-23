<?php
session_start();

if(isset($_POST['registerme'])){
    $data = array();
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];
    $data['email'] = $_POST['email'];
    $data['name'] = $_POST['name'];
    storeUser($data);
}

function getDb(){

    $host="localhost";
    $user ="root";
    $password = "";
    $db = "myplace";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}
    function storeUser($data){
    $sql = "INSERT INTO users (username, password, email, name)
     VALUES (:username, :password, :email, :name)";

    $sth = getDb()->prepare($sql);
    $sth->execute([
        'username' => $data['username'],
        'password' => $data['password'],
        'email' => $data['email'],
        'name' => $data['name']
    ]);
}

$_SESSION['user'] = $_POST['username'];
$_SESSION['pw'] = $_POST['password'];
$_SESSION['el'] = $_POST['email'];
$_SESSION['name'] = $_POST['name'];
header("Location: login.php");
?>
