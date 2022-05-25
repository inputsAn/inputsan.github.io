<?php

require_once 'connect.php';

$userid = $_POST['id'];

$avatar = $_POST['avatar'];


if (isset($_FILES['user_avatar']) && !empty($_FILES['user_avatar'])) {

    $path = 'images/avatars/' . time() . $_FILES['user_avatar']['name'];
    if (!move_uploaded_file($_FILES['user_avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] .= 'Ошибка при загрузке изображения<br>';
    } else {
        echo "Файл был загружен";
    }
}
mysqli_query($connect, "UPDATE `users` SET `avatar` = '$path' WHERE `users`.`id` = '$userid'");

header('Location: adminpage.php');
