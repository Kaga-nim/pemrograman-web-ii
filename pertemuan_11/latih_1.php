<?php
// Hostname atau IP server
$servername = 'localhost';

// Username dan password
$dbusername = 'root';
$dbpassword = '';

// Koneksi ke server MySQL
$link = mysqli_connect($servername, $dbusername, $dbpassword);

if (!$link) {
    die("Tidak dapat terhubung ke server: " . mysqli_connect_error());
} else {
    echo "OK.... koneksi berhasil";
}
?>



