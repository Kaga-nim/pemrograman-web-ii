<?php
$con = mysqli_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }

mysqli_select_db($con, "pemrograman_web_ii_p12");

mysqli_query($con, "UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");

mysqli_close($con);
?>



