<?php
$link = mysqli_connect("localhost", "root", "");

if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (!mysqli_select_db($link, "lat_dbase")) {
    die("Database tidak ditemukan: " . mysqli_error($link));
}

// Membuat tabel jika belum tersedia
$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs (
    mhsID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

if (!mysqli_query($link, $sql)) {
    die("Gagal membuat tabel: " . mysqli_error($link));
}

// Input data mahasiswa
$input = mysqli_query(
    $link,
    "INSERT INTO tbl_mhs (FirstName, LastName, Age)
     VALUES ('Anjar', 'Prabowo', 25)"
);

if ($input) {
    echo "Data mahasiswa berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($link);
}

mysqli_close($link);
?>
