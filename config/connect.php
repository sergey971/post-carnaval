<?php
$host = '127.0.0.1:3307';
$user = 'root';
$password = 'root';
$db_name = 'test';

$connect = mysqli_connect($host, $user, $password, $db_name);
mysqli_query($connect, "SET NAMES 'utf8'" );

?>