<?php
    session_start();
    require_once 'connect.php';

    $user_name=filter_var(trim($_POST['user_name']),FILTER_SANITIZE_STRING);
    $user_password=filter_var(trim($_POST['user_password']),FILTER_SANITIZE_STRING);
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `user_name`='$user_name' AND  `password`=md5('$user_password')");
    $check_users2 = mysqli_query($connect, "SELECT * FROM `users` WHERE `user_name` = '$user_name' AND `password` = md5('$user_password') AND 
        `id` = '11' ");

if(mysqli_num_rows($check_users2) > 0){
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "user_name" => $user['user_name'],
        "avatar" => $user['avatar'],
    ];
    header('Location: adminpage.php');
}else {
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "user_name" => $user['user_name'],
            "avatar" => $user['avatar'],
        ];

        header('Location: user.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../login.php');
        $_SESSION['saving_name']=$user_name;
    }
}