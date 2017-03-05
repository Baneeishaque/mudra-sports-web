<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'dbconfig.php';
$con = mysqli_connect($host, $username, $password, $dbname);
$sql = "SELECT id,name FROM brand";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $id = $row['id'];
    $sql2 = 'SELECT COUNT(product.id) AS coun FROM product WHERE brand_id=' . $id;
    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $count = $row2['coun'];
    if ($count != 0) {
        /* echo '<li>
          <div class="roundedOne">
          <input type="checkbox" name="check" id="roundedOne' . $row['id'] . ' " value="None">
          <label for="roundedOne' . $row['id'] . ' "></label>
          </div>
          <label>' . $row['name'] . ' </label>
          </li>'; */
        echo '<li><a href="products-by-brand.php?name=' . $row['id'] . '">' . $row['name'] . '</a></li>';
    }
}


