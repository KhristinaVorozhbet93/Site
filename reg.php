<?php
include 'inc/header.inc.php';
include 'themes/main/header.php';
?>
<h1>Регистрация</h1>
<form action="./actions.php" method="POST">
    Enter your email: <input type="email" name="email" required="1" /> <br />
    Name: <input type="text" name="first_name" /><br />
    Password: <input type="password" name="user_pass" /><br />
    Repeat password: <input type="password" name="user_pass_check" /><br />
    <input type="submit" name="register" value="Register" /><br />
</form>

<?php include 'themes/main/footer.php' ?>