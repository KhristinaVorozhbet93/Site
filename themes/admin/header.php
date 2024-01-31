<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../themes/admin/main.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <header>Админка
        <p>
            <a href="../">Перейти на сайт</a>
            <a href="../actions.php?logout=1">Logout</a>
        </p>
        <hr />

    </header>
    <main>

        <?php
        if (isset($_GET['res_mes'])) {
            echo '<div class="res_mes">' . $_GET['res_mes'] . '</div>';
        }
        ?>