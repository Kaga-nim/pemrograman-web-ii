<?php

$conn = mysqli_connect("localhost","root","","pemrograman_web_ii_p12");

mysqli_query($conn, "create table tbl_mhs(FirstName varchar(50), LastName varchar(50), Age INT)");

mysqli_close($conn);
?>






