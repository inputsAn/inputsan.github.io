<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="/styles/styles.css">
    <meta name="viewpoint" content="width=device-width">
    <script src="/scripts/jquery-3.6.0.js"></script>
    <script src="/scripts/menu.js"></script>
</head>
<body>
    <div class="block_page_dark">
        <a href="/index.php"><img class="logotype" src="/images/logo.png" width="164" height="56" title="Главная" alt="Ошибка загрузки"></a></li>
        <div class="menu">
            <ul>
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/study.php">Учеба</a></li>
                <li><a href="/gallery.php">Галерея</a></li>
                <li><a href="/bio.php">Биография</a></li>
                <li><a href="/achievments.php">Достижения</a></li>
                <?php
                    if(isset($_SESSION['user'])) { ?>
                        <li><a href='/core/user.php'><?= $_SESSION['user']['user_name']?></a></li> <?
                    } else {
                        ?><li><a href="/registr.php">Регистрация</a></li>
                        <li><a href="/login.php">Вход</a></li>
                        <?
                    }
                ?>
            </ul>
        </div>
        <div class="adap_menu_lines">
            <span></span>
        </div>
    </div>
