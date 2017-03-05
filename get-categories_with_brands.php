<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'dbconfig.php';
$con = mysqli_connect($host, $username, $password, $dbname);
$sql = "SELECT id,name FROM category";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $id = $row['id'];
    $sql2 = 'SELECT COUNT(product.id) AS coun FROM product WHERE category_id=' . $id;
    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $count = $row2['coun'];
    if ($count != 0) {
        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                            <h5> ' . $row['name'] . ' </h5>';

        $sql3 = "SELECT DISTINCT brand.id,brand.name FROM product,brand where product.category_id=$id AND brand_id=brand.id";
        $result3 = mysqli_query($con, $sql3);
        while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
            echo '<ul>
                                                                <li> <a href="products-by-category-brand.php?name=' . $id . '&name2=' . $row3['id'] . '">' . $row3['name'] . ' </a></li>


                                                            </ul>';
        }
        echo '</div>';
    }
}


