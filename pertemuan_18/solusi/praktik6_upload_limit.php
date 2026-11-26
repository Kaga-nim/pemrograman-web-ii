<!DOCTYPE html>
<html>
<head>
    <title>Praktik Batas Upload File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="80000000">
        Pilih File: <input type="file" name="berkas">
        <input type="submit" name="upload" value="Upload">
    </form>

    <?php
    if (isset($_POST['upload'])) {
        if ($_FILES['berkas']['error'] === UPLOAD_ERR_INI_SIZE || $_FILES['berkas']['error'] === UPLOAD_ERR_FORM_SIZE) {
            echo "Gagal upload: Ukuran file melebihi batas maksimum yang diizinkan!";
        } else {
            echo "File siap diproses: " . $_FILES['berkas']['name'];
        }
    }
    ?>
</body>
</html>


