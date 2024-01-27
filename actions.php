<?php
include 'inc/header.inc.php';

//Registration
if (isset($_POST['register'])) {
    $user = $_POST['email'] . '~~~' . $_POST['user_pass'] . '~~~' . $_POST['first_name'] . '~~~u' . "\n";
    $fh = fopen($filename, 'a');
    fwrite($fh, $user);
    fclose($fh);
    header("Location: ./reg.php?res_mes=Registred");
}
//Logout
if (isset($_GET['logout'])) {
    unset($_SESSION['pers_set']);
    header("Location: ./index.php?res_mes=Logged out");
    exit;
}
//Autherization
if (isset($_POST['auth'])) {
    $dump = file($filename);
    foreach ($dump as $val) {
        $tmp = explode('~~~', $val);
        if ($tmp[0] == $_POST['email'] && $tmp[1] == $_POST['user_pass']) {
            $_SESSION['pers_set']['email'] = $_POST['email'];
            $_SESSION['pers_set']['first_name'] = $tmp[2];
            $_SESSION['pers_set']['role'] = trim($tmp[3]);
            header("Location: ./index.php?res_mes=Authorized");
            exit;
        }
    }
    header("Location: ./index.php?res_mes=User not found");
    exit;
}
?>