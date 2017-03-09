<?php

include '../dbconfig.php';
$id=$_GET['id'];
$con = mysqli_connect($host, $username, $password, $dbname);
$sql = "DELETE FROM product where id=$id";
//echo $sql;
mysqli_query($con, $sql);
echo '<script>alert("Attendance Deleted Successfully")</script>';
echo '<script>window.location="products.php"</script>';
