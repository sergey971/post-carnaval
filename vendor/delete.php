<?php

require_once '../config/connect.php';


$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `blog` WHERE `blog`.`id` = '$id'");

header('Location: ../');
?>