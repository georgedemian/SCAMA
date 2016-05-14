<?php
$name = utf8_decode($_POST['name']);
$password = ($_POST['password']);
$email = ($_POST['email']);

$con = mysql_connect('localhost:3306', 'root', 'root');
mysql_select_db("login_ajax", $con);

$insert = "INSERT INTO users (user, password, email) VALUES ('$name', '$password', '$email')";
mysql_query($insert);
?>