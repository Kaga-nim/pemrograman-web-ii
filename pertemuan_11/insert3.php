<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Could not connect: " . mysqli_connect_error());
}

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($con, $sql);

if (!$stmt) {
    die("Error: " . mysqli_error($con));
}

mysqli_stmt_bind_param(
    $stmt,
    "ssi",
    $firstname,
    $lastname,
    $age
);

$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$age = (int) ($_POST['age'] ?? 0);

if (!mysqli_stmt_execute($stmt)) {
    die("Error: " . mysqli_stmt_error($stmt));
}

echo "1 record added";

mysqli_stmt_close($stmt);
mysqli_close($con);
?>


