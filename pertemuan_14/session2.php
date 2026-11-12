
<?php
session_start();

echo "Username: " . $_SESSION['username'];
echo "<br>Status: " . $_SESSION['status'];
echo "<br><a href='session3.php'>Hapus Session</a>";
?>


