<?php include_once "template/header.php" ?>
<?php session_start() ?>
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
        <div class="registration">
            <p align="center">Ещё нет аккаунта? Зарегистрируйтесь!</p>
            <form action="core/signup.php"method="post" enctype="multipart/form-data">
                <div class="form-reg">
                    <label for="username">Имя пользователя</label>
                    <input type="text" id="regname" name="user_name" value="<?=$_SESSION['saving_name'];?>" required="required"/>
                </div>
                <div class="form-reg">
                    <label for="password">Пароль</label>
                    <input type="password" id="regpassword" name="user_password" required="required"/>
                </div>
                <div class="form-reg">
                    <label for="check">Повторите пароль</label>
                    <input type="password" id="regcpassword" name="check" required="required"/>
                </div>
                <div class="form-reg">
                    <label for="cpassword">Аватар</label>
                    <input type="file" id="avatar" name="user_avatar" required="required"/>
                </div>
                <div class="form-reg">
                    <button type="submit" name="signup">Зарегистрироваться</button>
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
