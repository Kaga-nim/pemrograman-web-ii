<?php
$conn = mysqli_connect("localhost", "root", "", "pemrograman_web_ii_p12");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO tbl_mhs
        (FirstName, LastName, Age)
        VALUES ('Budi', 'Santoso', 20)";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Gagal: " . mysqli_error($conn);
}

mysqli_close($conn);
?>





