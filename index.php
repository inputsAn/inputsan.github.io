<?php include_once "template/header.php" ?>
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
<div class ="main_content">
    <div class="startblock">
        <div class="startblockshadow">
            <h1>Антон Ступин</h1>
            <p>Сайт обо мне</p>
        </div>
    </div>
    <div class="block_page contactsbox">
        <?php
        if ($_SESSION['message']) {
            echo '<p class = "msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
        <h2 align="center">Мои контакты</h2>
            <table align="center" class="contacts">
                <tr>
                    <td>
                        <img src="/images/githubicon.png" title="GitHub" alt="Фото не прогрузилось">
                    </td>
                    <td><a href="https://github.com/inputsAn" target="_blank">GitHub: https://github.com/inputsAn</a> </td>
                    <td>
                        <img src="images/gmailicon.png" title="gmail" alt="Фото не прогрузилось">
                    </td>
                    <td><a href="mailto:astupin173@gmail.com" target="_blank">Gmail: astupin173@gmail.com</a> </td>
                </tr>
            </table>
    </div>
    <div class="block_page contactsbox">
        <table align="center" class = "contacts">
            <tr>
                <td><a href="https://vk.com/antonolegych" target="_blank"><img src="/images/vkicon.png" title="ВКонтакте" alt="Фото не прогрузилось"></a></td>
                <td><a href="https://www.instagram.com/fyngby/" target="_blank"><img src="/images/instaicon.png" title="Instagram" alt="Фото не прогрузилось"</a> </td>
                <td><a href="https://steamcommunity.com/profiles/76561198295694795/" target="_blank"><img src="/images/steamicon.png" title="Steam" alt="Фото не прогрузилось"></a></td>
                <td><a href="https://www.tiktok.com/@chikibryaaaak" target="_blank"><img src="/images/tiktokicon.png" title="TikTok" alt="Фото не прогрузилось"></a></td>
            </tr>
        </table>
    </div>
    <h2 align="center">Кто я?</h2>
    <div class="block_page">
        <div class="block_text">
            <p>Студент УлГТУ с 2021 года, группы ИВТАПбд-12 Факультета информационных систем и технологий.</p>
        </div>
        <div class="block_image">
            <img src="images/myph1.png" title="Я" alt="Фото не прогрузилось">
        </div>

    </div>
    <div class="block_page">
        <div class="block_text">
            <p>Всю свою жизнь провёл в городе Ульяновске, с семьёй из четырёх человек: матери, отца и старшего брата. В 2018 году к нам присоединился пёс Экей, которого мы ласково называем Кеша. А в 2019 году брат женился, и теперь строит своё гнёздышко отдельно.</p>
        </div>
        <div class="block_image">
            <img src="images/kesha.png" title="Мой пес" alt="Фото не прогрузилось">
        </div>
    </div>
    <div class="block_page">
        <div class="block_text">
            <p>Окончил в 2021 году Ульяновский городской лицей при УлГТУ, со средним баллом аттестата 4,74 и с 236 баллами за ЕГЭ..</p>
        </div>
        <div class="block_image">
            <img src="images/myph2" title="Выпускной 2021" alt="Фото не прогрузилось">
        </div>

    </div>
    <p class = "mpageresum" align="center">Более подробная информация обо мне указана в разделе <a href="/bio.php">Биография</a>, а о моей нынешней деятельности - в разделе <a href="/study.php">Учеба</a>.</p>



</div>

<?php include_once "template/footer.php" ?>