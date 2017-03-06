<?php

function paginate_init($key) {
    //Pagination
    $starting_index = 0;
    $capacity = 16;


    include 'dbconfig.php';
    $con = mysqli_connect($host, $username, $password, $dbname);

    //Pagination
    $sql = "SELECT COUNT(name) AS coun FROM product where name like '$key%' or modal like '$key%' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = $row['coun'];

    common_display();

    if ($count < $capacity) {
        display_all($starting_index, $count,$key);
    } else {

        display_pagination($starting_index, $capacity, $count, 1,$key);
    }
}

function paginate($starting_index, $count, $current_page,$key) {
    //Pagination
    $capacity = 16;
    common_display();
    display_pagination($starting_index, $capacity, $count, $current_page,$key);
}

function common_display() {
    echo '<div class="filter-panel">
                                <div class="panel panel-line">
                                    <div class="panel-body">
                                        <form class="form-inline" role="form">
                                            <div class="form-group float-left">
                                                <label class="filter-col" style="margin-right:0;" for="pref-perpage">Sort By:</label>
                                                <select id="pref-perpage" class="form-control">
                                                    <option value="2">Sale</option>
                                                    <option value="3">Bestseller</option>
                                                    <option value="4">Date</option>
                                                    <option value="5">Rating</option>
                                                </select>
                                            </div>

                                            <!-- form group [rows] -->
                                            <div class="form-group float-left ">
                                                <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>
                                                <input type="text" class="form-control input-sm" id="pref-search">
                                            </div>
                                            <!-- form group [search] -->

                                            <div class="form-group float-right">
                                                <label class="filter-col" style="margin-right:0;" for="pref-perpage">VIEW</label>
                                                <div class="btn-group switcher-view"> <a href="#" id="grid" class="btn btn-default btn-sm active-btn"> <span  class="glyphicon glyphicon-th-large"></span></a> <a href="#" id="list" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-th-list"></span></a></div>
                                            </div>
                                            <div  class="form-group float-right btn-resize">
                                                <div id="resize-anchor"></div>
                                                <label class="filter-col" >Resize</label>
                                                <a href="#resize-anchor" class="toggle_sidebar btn btn-default btn-sm"> <i class="fa fa-arrows-h"></i></a> </div>
                                        </form>
                                    </div>';
}

function display_all($starting_index, $count,$key) {

    echo '<div class="panel-body">
                                        <div class="form-group float-left"> Showing ' . ($starting_index + 1) . ' - ' . $count . ' of ' . $count . ' items </div>

                                    </div>
                                </div>
                            </div>';
    include 'dbconfig.php';
    $con = mysqli_connect($host, $username, $password, $dbname);
    echo '<div class="catalog-grid">
                                <ul class=" product-grid">';
    $sql = "SELECT id,name,modal,description,status FROM product where name like '$key%' or modal like '$key%' ";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '<li class="  animated"   data-animation="bounceInUp" >
                                        <div class="product-container">
                                            <div class="product-image"> ';
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

        echo '<div class="label-star">
                        <div  class="starrr" data-rating="4"></div>
                    </div> <div class="btn-action-item"> <a href="product_view.php?id=' . $row['id'] . '"> <i class="icomoon-heart"></i></a> <a href="images/products/large/' . $row['id'] . '.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                                                <a href="product_view.php?id=' . $row['id'] . '"> <img class=""
                                                                                  src="images/products/large/' . $row['id'] . '.jpg" width="600" height="700" alt="img"/></a> <a href="product_view.php?id=' . $row['id'] . '"> <img  class=" slider_img"
                                                                                                                                                     src="images/products/large/' . $row['id'] . '1.jpg" width="600" height="700" alt="img"/></a> </div>
                                            <div class="product-bottom">
                                                <h3 class="product-name x-hover"><span class="x-hover-text">' . $row['name'] . ' : ' . $row['modal'] . '</span></h3>

                                                <div class="only-list-view">
                                                    <div class="product-desc">
                                                        <p>' . $row['description'] . '</p>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger"> View more </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>';
    }
    echo ' </ul>
                            </div>';
}

function display_pagination($starting_index, $capacity, $count, $current_page,$key) {
    $ending_index = $starting_index + $capacity;
    $no_of_pages = $count / $capacity;
    echo '<div class="panel-body">
                                        <div class="form-group float-left"> Showing ' . ($starting_index + 1) . ' - ' . $ending_index . ' of ' . $count . ' items </div>

                                    </div>
                                </div>
                            </div>';
    include 'dbconfig.php';
    $con = mysqli_connect($host, $username, $password, $dbname);

    echo '<div class="catalog-grid">
                                <ul class=" product-grid">';
    $sql = "SELECT id,name,modal,description,status FROM product where name like '$key%' or modal like '$key%' LIMIT $starting_index,$capacity";
    //echo $sql;
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '<li class="  animated"   data-animation="bounceInUp" >
                                        <div class="product-container">
                                            <div class="product-image"> ';
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

        echo '<div class="label-star">
                        <div  class="starrr" data-rating="4"></div>
                    </div>
                                                <div class="btn-action-item"> <a href="product_view.php?id=' . $row['id'] . '"> <i class="icomoon-heart"></i></a> <a href="images/products/large/' . $row['id'] . '.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>';
        $filename = '/images/products/large/' . $row['id'] . '1.jpg';
        if (file_exists($filename)) {
            echo '<a href="product_view.php?id=' . $row['id'] . '"> <img class=""
                                                                                  src="images/products/large/' . $row['id'] . '.jpg" width="600" height="700" alt="img"/></a> <a href="product_view.php?id=' . $row['id'] . '"> <img  class=" slider_img"
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
                                                        <button type="button" class="btn btn-danger"> View more </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>';
    }
    echo ' </ul>
                            </div>';

    echo '<nav class="pagination">
                                <ul>';
    $ending_index = $capacity;
    for ($index = 0; $index < $no_of_pages; $index++) {
        if (($index + 1) == $current_page) {
            //echo '<script>alert("' . $current_page . '");</script>';
            echo '<li class="active">';
            if ($index == 0) {
                echo '<a href="product_search.php?key=' . $key . '" class="btn btn-primary"><span>1</span></a></li>';
            } else {
                echo '<a href="product_search.php?starting_index=' . $ending_index . '&count=' . $count . '&current_page=' . ($index + 1) . '&key=' . $key . '" class="btn btn-primary"><span>' . ($index + 1) . '</span></a></li>';
                $ending_index = $ending_index + $capacity;
            }
        } else {
            echo '<li>';
            if ($index == 0) {
                echo '<a href="products.php?key=' . $key . '" class="btn btn-default"><span>1</span></a></li>';
            } else {
                echo '<a href="products.php?starting_index=' . $ending_index . '&count=' . $count . '&current_page=' . ($index + 1) . '&key='.$key.'" class="btn btn-default"><span>' . ($index + 1) . '</span></a></li>';
                $ending_index = $ending_index + $capacity;
            }
        }
    }


    echo '</ul>
                            </nav>';
}
