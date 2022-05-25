<?php include_once "../template/header.php" ?>
<?php session_start();
require_once 'connect.php';
$userid = $_GET['id'];
$user_name = $_GET['user_name'];
$users = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$userid'");
$users = mysqli_fetch_assoc($users)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админ очень старался</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div class = "main_content">
    <h2 align="center">Удаление пользователя</h2>
    <p align="center">Вы действительно хотите удалить пользователя <?= $users['user_name'] ?>?</p>
    <div class="admin_form">
        <form action="deleteuser.php?id=<?= $users['id'] ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $users['id'] ?>">
            <table>
                <tr>
                    <td>
                        <input type="submit" value="Удалить" id="submit"/>
                    </td>
                    <td>
                        <a href="adminpage.php"><p>Нет</p></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
