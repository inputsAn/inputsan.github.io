<?php
session_start();
require_once 'connect.php';
include_once "../template/header.php";


$user_name = $_POST['user_name'];
$user_password = $_POST['password'];
$avatar = $_POST['avatar'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админ очень старался</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <style>
        #okno {
            width: 300px;
            height: 50px;
            text-align: center;
            padding: 15px;
            border: 3px solid #0000cc;
            border-radius: 10px;
            color: #0000cc;
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
        }
        #okno:target {display: block;}
            .close {
                display: inline-block;
                border: 1px solid #0000cc;
                color: #0000cc;
                padding: 0 12px;
                margin: 10px;
                text-decoration: none;
                background: #f2f2f2;
                font-size: 14pt;
                cursor:pointer;
            }
        .close:hover {background: #e6e6ff;}
    </style>
</head>
<body>
<table class="admin_table">

    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>IMAGE</th>
        <th>AVATAR</th>
        <th>RECORDS</th>
        <th></th>
    </tr>

    <?php
    $users = mysqli_query($connect, "SELECT * FROM `users` ");
    $users = mysqli_fetch_all($users);
    foreach ($users as $users) {
        ?>
        <tr>
            <td><?= $users[0] ?></td>
            <td><?= $users[1] ?></td>
            <td><?= $users[3] ?></td>
            <td><img src="../<?= $users[3] ?>" class = "imgadmin" alt="изображения нет"></td>

            <td>
                <?php if ($users[0] != 11) { ?>
                    <a href="edituser.php?id=<?= $users[0] ?>"><img src="../images/карандаш.jpg"  class="imga" ></a>
                    <a href="delete_user_checking.php?id=<?= $users[0] ?>"><img src="../images/крестик.jpg" class="imga"></a>
                <?php }else{ ?>
                    <a href="adminpage.php"><img src="../images/карандаш.jpg" class="imga"></a>
                    <a href="adminpage.php"><img src="../images/крестик.jpg" class="imga" title="Админа нельзя удалить"></a>
                <?php } ?>
            </td>
        </tr>

        <?php
    }; ?>

</table>

</body>
</html>

