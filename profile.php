<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main_reg.css">
</head>
<body>
    <!-- Профиль -->
    <form>
        <img src="assets/img/gallery/exit.gif" alt="gif">
        <h1 style="margin: 20px 150px;"><?= $_SESSION['user']['full_name'] ?></h1>
        <a href="vendor/logout.php" class="logout">Выход из учетной записи</a>
    </form>

</body>
</html>