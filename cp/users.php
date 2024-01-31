<?php
include '../themes/admin/header.php';
include '../inc/header.inc.php';

if ($_SESSION['pers_set']['role'] == 'a') {
    $dump = file('../' . $filename);
    echo '
    <div> class="users_1"
        <div>E-mail</div><div>Имя</div>Роль</div>
    </div>';
    foreach ($dump as $val) {
        $tmp = explode('~~~', $val);
        echo '
        <div> class="users_1"
            <div>' . $tmp[0] . '</div><div>' . $tmp[2] . '</div>' . $tmp[3] . '</div>
        </div>';
    }

} else {
    header("Location: ../index.php?res_mes=User not autorized");
    exit;
}

?>

<?php
include '../themes/admin/footer.php'; ?>