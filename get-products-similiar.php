<?php

function print_similar_products($id,$name)
{
    include 'dbconfig.php';
    $con = mysqli_connect($host, $username, $password, $dbname);
    $sql = "SELECT product.id,product.name,modal,description,brand.name AS brand,brand.id AS branding_id FROM product,brand WHERE product.id!=$id AND product.name='$name' AND product.brand_id=brand.id";
    //echo $sql;
    $result = mysqli_query($con, $sql);
    if((mysqli_num_rows($result))!=0)
    {
        echo '<h3 class="widget-title"><span>Similar Products</span></h3>
<ul class="entry-list unstyled verticale-carousel">';
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            echo '<li>
        <div class="entry-thumbnail"><a href="product_view.php?id=' . $row['id'] . '" class="img"> <img src="images/products/large/' . $row['id'] . '.jpg" width="600"
                                                                   height="700" alt=""/></a></div>
        <div class="entry-main">
            <div class="entry-header">
                <h5 class="entry-title"><a href="product_view.php?id=' . $row['id'] . '">' . $row['name'] . ' : ' . $row['modal'] . '</a></h5>
            </div>
            <div class="entry-meta">
                <div class="price-box"><a href="products-by-brand.php?name=' . $row['branding_id'] . '"><span class="price-regular">' . $row['brand'] . '</a></span></div>
            </div>
        </div>
    </li>';
        }
        echo '</ul>';
    }

}