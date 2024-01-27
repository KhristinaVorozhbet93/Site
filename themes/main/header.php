<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="themes/main/main.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <header>Наша компания
        <p>
            <a href="./">Главная</a>
            <a href="./about.php">О компании</a>
            <a href="./contacts.php">Контакты</a>
            <a href="./reg.php">Регистрация</a>
            <a href="cp/users.php">Пользователи</a>
            <?php (@$_SESSION['pers_set']['role'] == 'a') ? '<a href="cp/users.php">Пользователи</a>' : ' ' ?>
        </p>
        <hr />

        <?php
        if (@$_SESSION['pers_set']['email'] == '') {
            echo ' <form action="./actions.php" method="POST">
            Enter your email: <input type="email" name="email" /><br />
            Enter your password: <input type="password" name="user_pass" /></br>
            <input type="submit" name="auth" value="Login" />
        </form>';
        } else {
            echo 'Welcome' . ' ' . $_SESSION['pers_set']['first_name'] . ($_SESSION['pers_set']['role'] == 'a' ? '[admin]' : '') .
                '<a href="./actions.php?logout=1">Logout</a>';
        }
        ?>

    </header>
    <main>

        <?php
        if (isset($_GET['res_mes'])) {
            echo '<div class="res_mes">' . $_GET['res_mes'] . '</div>';
        }
        ?>