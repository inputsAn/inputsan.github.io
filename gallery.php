<?php include_once "template/header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="/styles/styles.css">
    <script type="text/javascript" src="/scripts/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="/scripts/gallery.js"></script>
    <script type="text/javascript" src="/scripts/labfive.js"></script>
</head>
<body>
<div class = "main_content">
    <h2 align="center">Фотогалерея</h2>
    <div id="gallery">
        <div class = "photos">
            <ul>
                <li><img src = "images/gallery/gal1.jpg" onclick="Show(1)" title = "Я" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal2.jpg" onclick="Show(2)" title = "В гостях" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal3.jpg" onclick="Show(3)" title = "Выпускной" alt="Фото не прогрузилось"></li>
            </ul>
            <ul>
                <li><img src = "images/gallery/gal4.jpg" onclick="Show(4)" title = "Лицей, группа 1-19" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal5.jpg" onclick="Show(5)" title = "В Казани" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal6.jpg" onclick="Show(6)" title = "В Свияжске" alt="Фото не прогрузилось"></li>
            </ul>
            <ul>
                <li><img src = "images/gallery/gal7.jpg" onclick="Show(7)" title = "В Свияжске" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal8.jpg" onclick="Show(8)" title = "На фабрике Boston" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal9.jpg" onclick="Show(9)" title = "На дне рождения" alt="Фото не прогрузилось"></li>
            </ul>
            <ul>
                <li><img src = "images/gallery/gal10.jpg" onclick="Show(10)" title = "Гуляю" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal11.jpg" onclick="Show(11)" title = "Гуляю" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal12.jpg" onclick="Show(12)" title = "Гуляю" alt="Фото не прогрузилось"></li>
            </ul>
        </div>
        <div class = "photos">
            <ul>
                <li><img src = "images/gallery/gal13.jpg" onclick="Show(13)" title = "Гуляю" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal14.jpg" onclick="Show(14)" title = "Илья, Андрей и Я" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal15.jpg" onclick="Show(15)" title = "Новый год 2022" alt="Фото не прогрузилось"></li>
            </ul>
            <ul>
                <li><img src = "images/gallery/gal16.jpg" onclick="Show(16)" title = "Гуляю" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal17.jpg" onclick="Show(17)" title = "Я" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal18.jpg" onclick="Show(18)" title = "Я" alt="Фото не прогрузилось"></li>
            </ul>
            <ul>
                <li><img src = "images/gallery/gal19.jpg" onclick="Show(19)" title = "В Казани" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal20.jpg" onclick="Show(20)" title = "В гостях" alt="Фото не прогрузилось"></li>
                <li><img src = "images/gallery/gal21.jpg" onclick="Show(21)" title = "" alt=""></li>
            </ul>
            <ul>
                <li><img src = "images/gallery/gal22.jpg" onclick="Show(22)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal23.jpg" onclick="Show(23)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal24.jpg" onclick="Show(24)" title = "" alt=""></li>
            </ul>
        </div>
        <div class="photos">
            <ul>
                <li><img src = "images/gallery/gal25.jpg" onclick="Show(25)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal26.jpg" onclick="Show(26)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal27.jpg" onclick="Show(27)" title = "" alt=""></li>
            </ul>
            <ul>
                <li><img src = "images/gallery/gal28.jpg" onclick="Show(28)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal29.jpg" onclick="Show(29)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal30.jpg" onclick="Show(30)" title = "" alt=""></li>
            </ul>
            <ul>
                <li><img src = "images/gallery/gal31.jpg" onclick="Show(31)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal32.jpg" onclick="Show(32)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal33.jpg" onclick="Show(33)" title = "" alt=""></li>
            </ul>
            <ul>
                <li><img src = "images/gallery/gal34.jpg" onclick="Show(34)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal35.jpg" onclick="Show(35)" title = "" alt=""></li>
                <li><img src = "images/gallery/gal36.jpg" onclick="Show(36)" title = "" alt=""></li>
            </ul>
        </div>
    </div>
    <div class="window">
        <div class="content">
            <button class="icon_close"><img src="images/gallery/iclose.png" width="30" alt=""></button>
            <div class="main-gallery">
                <div class="buttonGallery" onclick="leftClick()">
                    <button><img class="but" src="images/gallery/buttontoleft.png"></button>
                </div>
                <div class="photo">
                    <img id="mainimg">
                </div>
                <div class="buttonGallery" onclick="rightClick()">
                    <button><img class="but" src="images/gallery/buttontoright.png"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/scripts/index.js"></script>
</body>

<?php include_once "template/footer.php" ?>