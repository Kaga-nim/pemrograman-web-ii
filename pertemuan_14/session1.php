
<?php
session_start();

$_SESSION['username'] = "Habib";
$_SESSION['status'] = "Mahasiswa";

echo "Session berhasil dibuat.";
echo "<br><a href='session2.php'>Lihat Session</a>";
?>




