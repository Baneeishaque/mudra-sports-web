<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'dbconfig.php';
$con = mysqli_connect($host, $username, $password, $dbname);
$sql = "SELECT Max(id) AS id FROM product";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$c = $row['id'];
$name = $_POST['name'];
$modal = $_POST['modal'];
$desc = $_POST['desc'];
$brand = $_POST['brand'];
$category = $_POST['category'];
$status = $_POST['status'];

$target_dir = "images/products/medium/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);

$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
$target_file = $target_dir . basename(($c + 1) . '.' . $imageFileType);
move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
mysqli_query($con, "INSERT INTO `product`( `id`,`name`, `modal`, `description`, `brand_id`, `status`, `category_id`) VALUES (".($c + 1).",'$name','$modal','$desc',$brand,'$status',$category)");

$target_dir2 = "images/products/recommend/";
$target_file2 = $target_dir2 . basename(($c + 1) . '.' . $imageFileType);
copy($target_file, $target_file2);

$target_dir3 = "images/products/small/";
$target_file3 = $target_dir3 . basename(($c + 1) . '.' . $imageFileType);
copy($target_file, $target_file3);

$target_dir4 = "images/products/large/";
$target_file4 = $target_dir4 . basename(($c + 1) . '.' . $imageFileType);
copy($target_file, $target_file4);

echo 'inserted';