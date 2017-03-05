<?php

include 'dbconfig.php';
$con = mysqli_connect($host, $username, $password, $dbname);

$sql = "SELECT * FROM category";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
}
