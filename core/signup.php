<?php
    session_start();
    require_once 'connect.php';

    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $check = $_POST['check'];

    $query = mysqli_query($connect, "SELECT * FROM `users` WHERE `user_name` = '$user_name'");

    if (mysqli_num_rows($query) > 0) {
        $_SESSION['message'] = 'Пользователь с таким логином уже существует!';
        header('Location: ../registr.php');
    } else {

        if ($user_password === $check) {


            $path = 'images/avatars/' . time() . $_FILES['user_avatar']['name'];
            if (!move_uploaded_file($_FILES['user_avatar']['tmp_name'], '../' . $path)) {
                $_SESSION['message'] = 'Ошибка аватара';
                header('Location: ../registr.php');
            }
            $user_password = md5($user_password);
            mysqli_query($connect, "INSERT INTO `users` (`id`, `user_name`, `password`, `avatar`) VALUES (NULL, '$user_name', '$user_password', '$path')");
            $_SESSION['message'] = 'Регистрация прошла успешно';
            header('Location: /');

        } else {
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: ../registr.php');
            $_SESSION['saving_name']=$user_name;
        }
    }

?>
