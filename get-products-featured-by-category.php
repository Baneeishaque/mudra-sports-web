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
echo '<div class="row">
                    <div class="text-center" >
                        <ul id="filter" class="clearfix">
                        <li><a href="" class="current btn" data-filter="*">ALL</a></li>';
$ids = array();
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $id = $row['id'];
    $sql2 = "SELECT COUNT(product.id) AS coun FROM product WHERE category_id=$id AND status='featured'";
    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $count = $row2['coun'];
    if ($count != 0) {
        array_push($ids, $row['id']);
        echo '<li><a href = "" class = "btn" data-filter = ".' . $row['id'] . '">' . $row['name'] . '</a></li>';
    }
}
echo '</ul>
                    </div>
                </div>';
echo '<div class="isotope-frame animated" data-animation="bounceInUp">
                    <ul class="isotope-filter product-grid  product-grid">';
foreach ($ids as $value) {
    $sql3 = "SELECT id,name,modal,description FROM product where category_id='$value' AND status='featured'";
    $result3 = mysqli_query($con, $sql3);
    while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
        echo '<li class="isotope-item ' . $value . '">
                            <div class="product-container">
                                <div class="product-image"> <span class="label-hot">HOT</span>
                                    <div class="btn-action-item"> <a href="product_view.php?id=' . $row3['id'] . '"> <i class="icomoon-heart"></i></a><a href="images/products/large/' . $row3['id'] . '.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>';
        
		$filename = '/images/products/large/' . $row3['id'] . '1.jpg';
        if (file_exists($filename)) {
            echo '<a href="product_view.php?id=' . $row3['id'] . '"> <img class=""
                                                                                  src="images/products/large/' . $row3['id'] . '1.jpg" width="600" height="700" alt="img"/></a> <a href="product_view.php?id=' . $row3['id'] . '"> <img  class=" slider_img"
                                                                                                                                                     src="images/products/large/' . $row3['id'] . '1.jpg" width="600" height="700" alt="img"/></a>';
        } else {
            echo '<a href="product_view.php?id=' . $row3['id'] . '"> <img class=""
                                                                                  src="images/products/large/' . $row3['id'] . '.jpg" width="600" height="700" alt="img"/></a> <a href="product_view.php?id=' . $row3['id'] . '"> <img  class=" slider_img"
                                                                                                                                                     src="images/products/large/' . $row3['id'] . '.jpg" width="600" height="700" alt="img"/></a>';
        }


        echo '</div>
                                <div class="product-bottom">
                                    <h3 class="product-name x-hover"><span class="x-hover-text">' . $row3['name'] . ' : ' . $row3['modal'] . '</span></h3>
                                    <div class="only-list-view">
                                        <div class="product-desc">
                                            <p>' . $row3['description'] . '</p>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger"> Add to cart </button>
                                        </div>
                                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
    }
}
echo ' </ul>
                </div>';
