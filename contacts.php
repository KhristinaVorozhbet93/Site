<?php
include 'inc/header.inc.php';

if (@$_POST['upload']) {
    move_uploaded_file($_FILES['file1']['tmp_name'], 'data/' . uniqid() . $_FILES['file1']['name']);
    header("Location: ./contacts.php?res_mes=Загружено");
    exit;
}

include 'themes/main/header.php';
?>

Наши контакты.Наши контакты.Наши контакты.Наши контакты.Наши контакты.
Наши контакты.Наши контакты.Наши контакты.Наши контакты.Наши контакты.

<p>
<form action="./contacts.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file1" />
    <input type="submit" name="upload" value="Загрузить" />
</form>
</p>


<?php include 'themes/main/footer.php' ?>