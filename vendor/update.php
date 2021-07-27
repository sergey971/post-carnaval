<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$post = $_POST['post'];

mysqli_query($connect, "UPDATE `blog` SET `user` = '$name', `post` = '$post' WHERE `blog`.`id` = '$id'");

header('Location: ../');

?>
