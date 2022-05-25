<?php
require_once 'connect.php';

$userid = $_POST['id'];
$user_name = $_POST['user_name'];

mysqli_query($connect, "UPDATE `users` SET `user_name` = '$user_name' WHERE `users`.`id` = '$userid'");

header('Location: adminpage.php');
