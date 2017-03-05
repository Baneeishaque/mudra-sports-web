<?php

include 'dbconfig.php';
$con = mysqli_connect($host, $username, $password, $dbname);
$sql = "SELECT Max(id) AS id FROM product";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$c = $row['id'];
$name = $_POST['product_name'];
$modal = $_POST['product_modal'];
$desc = $_POST['product_description'];
$brand = $_POST['product_brand'];
$category = $_POST['product_category'];
$status = $_POST['product_status'];

$target_dir = "../images/products/large/";

$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
$target_file = $target_dir . basename(($c + 1) . '.' . $imageFileType);
move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);

if (file_exists($_FILES['product_image1']['tmp_name']) && is_uploaded_file($_FILES['product_image1']['tmp_name'])) {
    $target_file = $target_dir . basename($_FILES["product_image1"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    $target_file = $target_dir . basename(($c + 1) . '1.' . $imageFileType);
    move_uploaded_file($_FILES["product_image1"]["tmp_name"], $target_file);
}


if (file_exists($_FILES['product_image2']['tmp_name']) && is_uploaded_file($_FILES['product_image2']['tmp_name'])) {
    $target_file = $target_dir . basename($_FILES["product_image2"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    $target_file = $target_dir . basename(($c + 1) . '2.' . $imageFileType);
    move_uploaded_file($_FILES["product_image2"]["tmp_name"], $target_file);
}


if (file_exists($_FILES['product_image3']['tmp_name']) && is_uploaded_file($_FILES['product_image3']['tmp_name'])) {
    $target_file = $target_dir . basename($_FILES["product_image3"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    $target_file = $target_dir . basename(($c + 1) . '3.' . $imageFileType);
    move_uploaded_file($_FILES["product_image3"]["tmp_name"], $target_file);
}


if (file_exists($_FILES['product_image4']['tmp_name']) && is_uploaded_file($_FILES['product_image4']['tmp_name'])) {
    $target_file = $target_dir . basename($_FILES["product_image4"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    $target_file = $target_dir . basename(($c + 1) . '4.' . $imageFileType);
    move_uploaded_file($_FILES["product_image4"]["tmp_name"], $target_file);
}

mysqli_query($con, "INSERT INTO `product`( `id`,`name`, `modal`, `description`, `brand_id`, `status`, `category_id`) VALUES (" . ($c + 1) . ",'$name','$modal','$desc',$brand,'$status',$category)");
echo '<script>alert("Attendance Inserted Successfully")</script>';
echo '<script>window.location="product-insertion.php"</script>';


