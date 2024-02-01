<?php
include 'inc/header.inc.php';
include 'themes/main/header.php';

if ((!in_array(@$_SESSION['pers_set']['role'], array('a', 'u'))))
{
    header("Location: ./index.php?res_mes=User not autorized");
    exit;
}

$path = 'data/gallery/';

if (@$_POST['upload']) {
    move_uploaded_file($_FILES['file1']['tmp_name'], $path . $_FILES['file1']['name']);
    header("Location: ./gallery.php?res_mes=Загружено");
    exit;
}

if (@$_GET['delete_file']) {
    unlink($path . $_GET['delete_file']);
    header("Location: ./gallery.php?res_mes=Deleted");
    exit;
}
?>

<form action="./gallery.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file1" />
    <input type="submit" name="upload" value="Загрузить" />
</form>


<?php
if ($dir = opendir($path)) {
    while ($file = readdir($dir) !== false) {
        if ($file != '.' && $file != '..') {
            echo '
            <div class="item">
                <img src="' . $path . $file . '"/> 
                <a href="?delete_file=' . $file . '">Delete </a>
            </div>
            ';
        }
    }
    closedir($dir);
}

include 'themes/main/footer.php' ?>