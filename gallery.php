<?php
include 'inc/header.inc.php';
include 'themes/main/header.php';

if (@$_POST['upload']) {
    move_uploaded_file($_FILES['file1']['tmp_name'], 'data/gallery/' . $_FILES['file1']['name']);
    header("Location: ./gallery.php?res_mes=Загружено");
    exit;
}
?>

<form action="./gallery.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file1" />
    <input type="submit" name="upload" value="Загрузить" />
</form>

<?php
$path = 'data/gallery/';
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