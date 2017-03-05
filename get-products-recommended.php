<?php

include 'dbconfig.php';
$con = mysqli_connect($host, $username, $password, $dbname);


$sql3 = "SELECT id,name,modal,description FROM product where status='recommended'";
$result3 = mysqli_query($con, $sql3);
while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {

    echo '
<li>
    <div class="product-container label-hot-active">
        <div class="product-image">';


    echo '<span class="label-best">BESTSELLER</span>';

    echo ' <div class="label-star">
                <div class="starrr" data-rating="4"></div>
            </div>
            <div class="btn-action-item"><a href="product_view.php?id=' . $row3['id'] . '"> <i class="icomoon-heart"></i></a>
                <a href="images/products/large/' . $row3['id'] . '.jpg" class="magnific"> <i
                        class="icomoon-eye-open"></i></a></div>';
    $filename = '/images/products/large/' . $row3['id'] . '1.jpg';
    if (file_exists($filename)) {
        echo '<a href="product_view.php?id=' . $row3['id'] . '"> <img class=""
                                                                                  src="images/products/large/' . $row3['id'] . '.jpg" width="600" height="700" alt="img"/></a> <a href="product_view.php?id=' . $row3['id'] . '"> <img  class=" slider_img"
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
                    <button type="button" class="btn btn-danger"> Add to cart</button>
                </div>
                <div class="btn-group"><a class="btn " href="#product.html">View more</a></div>
            </div>
        </div>
    </div>
</li>';
}


