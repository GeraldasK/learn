<?php
session_start();
$username = $_POST['username'];
$_SESSION['user'] = $username;
header("Location: index.php");
?>