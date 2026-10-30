<?php
$conn = mysqli_connect("localhost", "root", "", "pemrograman_web_ii_p12");

// Menambah data
mysqli_query($conn, "INSERT INTO tbl_mhs
(FirstName, LastName, Age)
VALUES ('Budi', 'Santoso', 20)");

// Membaca data
$result = mysqli_query($conn, "SELECT * FROM tbl_mhs");

// Mengubah data
mysqli_query($conn, "UPDATE tbl_mhs SET Age = 21
WHERE FirstName = 'Budi'");

// Menghapus data
mysqli_query($conn, "DELETE FROM tbl_mhs
WHERE FirstName = 'Budi'");

mysqli_close($conn);
?>






