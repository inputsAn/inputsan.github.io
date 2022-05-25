<?php include_once "../template/header.php" ?>
<?php session_start();
require_once 'connect.php';
$userid = $_GET['id'];
$user_name = $_GET['user_name'];
$avatar = $_GET['avatar'];
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
    <h2 align="center">Редактирование пользователя</h2>
    <div class = "edit-forms"
    <div class="admin_form">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $users['id'] ?>">
            <table>
                <tr>
                    <td>Имя</td>
                    <td>
                        <input type="text" name="user_name" value="<?= $users['user_name'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Изменить" id="submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="admin_form">
        <form action="updateavatar.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $users['id'] ?>">
            <table>
                <tr>
                    <td>Аватарка</td>
                    <td>
                        <input type="file" name="user_avatar" id="avatar" value="<?= "/" . $_SESSION['user']['avatar'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Изменить" id="submit"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a  href="../index.php"><p>На главную</p></a>
                    </td>
                    <td>
                        <a  href="adminpage.php"><p>Назад</p></a>
                    </td>

                </tr>
            </table>

        </form>
    </div>
</div>
</div>
</body>