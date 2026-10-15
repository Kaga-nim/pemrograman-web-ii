<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (!mysqli_select_db($con, "lat_dbase")) {
    die("Database tidak ditemukan: " . mysqli_error($con));
}

$sql1 = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
         VALUES ('Karina', 'Suwandi', 29)";

$sql2 = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
         VALUES ('Glenn', 'Gandari', 32)";

if (mysqli_query($con, $sql1) && mysqli_query($con, $sql2)) {
    echo "Data mahasiswa berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($con);
}

mysqli_close($con);
?>




