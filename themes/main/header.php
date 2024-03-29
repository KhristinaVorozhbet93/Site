<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="themes/main/main.css" type="text/css">
    <script type=" text/javascript" src="/themes/main/jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>

<body>
    <header>Наша компания
        <p>
            <a href="./">Главная</a>
            <a href="./about.php?division=1">О подразделении 1</a>
            <a href="./about.php?division=2">О подразделении 2</a>
            <?php echo (in_array(@$_SESSION['pers_set']['role'], array('a', 'u'))) ? '<a href="./gallery.php">Картинки</a>' : ' ' ?>
            <a href="./products.php">Продукция</a>
            <a href="./contacts.php">Контакты</a>
            <a href="./reg.php">Регистрация</a>
            <?php echo (@$_SESSION['pers_set']['role'] == 'a') ? '<a href="./cp/users.php">Пользователи</a>' : ' ' ?>
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