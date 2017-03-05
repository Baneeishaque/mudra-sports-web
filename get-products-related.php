<?php

function print_related_products($id, $name) {
    include 'dbconfig.php';
    $con = mysqli_connect($host, $username, $password, $dbname);
    $sql = "SELECT DISTINCT product.id,status,product.name,modal,description FROM product,brand WHERE product.id!=$id AND product.name='$name'";
    //echo $sql;
    $result = mysqli_query($con, $sql);
    if ((mysqli_num_rows($result)) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<li>
    <div class="product-container">
        <div class="product-image">';
            switch ($row['status']) {
                case 'recommended' :
                    echo '<span class="label-best">BESTSELLER</span>';
                    break;
                case 'featured' :
                    echo '<span class="label-hot">HOT</span>';
                    break;
                default :
                    echo '<span class="label-sale">sale</span>';
            }

            echo '<div class="btn-action-item">
			<a href="product_view.php?id=' . $row['id'] . '"> <i class="icomoon-heart"></i></a>
                 <a href="images/products/large/' . $row['id'] . '.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a></div>';
            $filename = '/images/products/large/' . $row['id'] . '1.jpg';
            if (file_exists($filename)) {
                echo '<a href="product_view.php?id=' . $row['id'] . '"> <img class=""
                                                                                  src="images/products/large/' . $row['id'] . '1.jpg" width="600" height="700" alt="img"/></a> <a href="product_view.php?id=' . $row['id'] . '"> <img  class=" slider_img"
                                                                                                                                                     src="images/products/large/' . $row['id'] . '1.jpg" width="600" height="700" alt="img"/></a>';
            } else {
                echo '<a href="product_view.php?id=' . $row['id'] . '"> <img class=""
                                                                                  src="images/products/large/' . $row['id'] . '.jpg" width="600" height="700" alt="img"/></a> <a href="product_view.php?id=' . $row['id'] . '"> <img  class=" slider_img"
                                                                                                                                                     src="images/products/large/' . $row['id'] . '.jpg" width="600" height="700" alt="img"/></a>';
            }


            echo '</div>

		<div class="product-bottom">
            <h3 class="product-name x-hover"><span class="x-hover-text">' . $row['name'] . ' : ' . $row['modal'] . '</span></h3>

            <div class="only-list-view">
                <div class="product-desc">
                    <p>' . $row['description'] . '</p>
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
    }
}
