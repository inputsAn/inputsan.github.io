<?php

    require_once 'connect.php';

    $userid = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = '$userid'");

    header('Location: adminpage.php');


?>