<?php include_once "template/header.php";
?>
<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход/регистрация</title>
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
</head>
<body>
<div class="main_content">
    <div class="entrance">
        <h2 align="center">Вход в аккаунт</h2>
        <form action="core/signin.php" method="post" enctype="multipart/form-data">
            <div class="form-entrance">
                <label for="username">Логин</label>
                <input type="text" id="username" name="user_name" value="<?=$_SESSION['saving_name'];?>" required="required"/>
            </div>
            <div class="form-entrance">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="user_password" required="required"/>
            </div>
            <div class="form-entrance">
                <button type="submit" name="submit">Войти</button>
            </div>
        </form>
        <?php
        if ($_SESSION['message']) {
            echo '<p class = "msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
    </div>
</div>
</body>
<?php include_once "template/footer.php" ?>
