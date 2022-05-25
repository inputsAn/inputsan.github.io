<?php
session_start();
require_once 'connect.php';
include_once "../template/header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="/styles/styles.css">
    <meta name="viewpoint" content="width=device-width">
</head>
<body>
<div class = "main_content">
    <h2 align="center">Профиль</h2>
    <div class="profile">
        <img alt="" src="<?= "/" . $_SESSION['user']['avatar'] ?>" width="300">
        <h2> <?= $_SESSION['user']['user_name']?></h2>
        <a href="logout.php" class="logout">Выход</a>
    </div>
</div>
<?php include_once "../template/footer.php" ?>

