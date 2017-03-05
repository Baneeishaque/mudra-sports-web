<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'dbconfig.php';
$con = mysqli_connect($host, $username, $password, $dbname);

$sql = "SELECT DISTINCT name FROM product";
$result = mysqli_query($con, $sql);
//print_r(mysqli_num_rows($result) . 'test');
$names = array();
$counts = array();
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $name = $row['name'];
    $sql2 = "SELECT COUNT(name) AS coun FROM product where name='$name'";
    //print_r($sql2);
    $result2 = mysqli_query($con, $sql2);

    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

    $co = $row2['coun'];

    array_push($counts, $co);
    array_push($names, $name);

    //echo '<script>alert("' . $row2['coun'] . '");</script>';
    //echo '<li class="x-hover"> <a href="products-by-name.php?name=' . $row['name'] . '" class="x-hover-text"> ' . $row['name'] . '</a></li>';
}
for ($index = 0; $index < count($counts); $index++) {
    for ($index1 = ($index + 1); $index1 < count($counts); $index1++) {
        if ($counts[$index] < $counts[$index1]) {
            $counts[$index] = $counts[$index] + $counts[$index1];
            $counts[$index1] = $counts[$index] - $counts[$index1];
            $counts[$index] = $counts[$index] - $counts[$index1];

            $temp = $names[$index];
            $names[$index] = $names[$index1];
            $names[$index1] = $temp;
        }
    }
}
$capacity = 10;
$loopcount = $capacity;
if (count($counts) < $capacity) {
    $loopcount = count($counts);
}
for ($index = 0; $index < $loopcount; $index++) {
//    print_r('Count' . $counts[$index]);
//    print_r('Name' . $names[$index]);
    echo '<li class="x-hover"> <a href="products-by-name.php?name=' . $names[$index] . '" class="x-hover-text"> ' . $names[$index] . '</a></li>';
}


