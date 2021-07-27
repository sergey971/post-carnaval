<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$post = $_POST['post'];

mysqli_query($connect, "INSERT INTO `blog` (`id`, `user`, `post`) VALUES (NULL,'$name', '$post')");

header('Location: ../');

?>

