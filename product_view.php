<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Mudra Sports</title>

        <!-- Master CSS -->
        <link href="css/master.css" rel="stylesheet">


        <!-- jQuery-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.js"></script>


        <!-- Switcher Only -->


        <link rel="stylesheet" id="switcher-css" type="text/css" href="plugins/switcher/css/switcher.css" media="all"/>
        <link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/pink.css" title="pink" media="all"/>
        <link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/purple.css" title="purple" media="all"/>
        <link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/blue.css" title="blue" media="all"/>
        <link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/green.css" title="green" media="all"/>
        <link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/red.css" title="red" media="all"/>
        <link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/yellow.css" title="yellow" media="all"/>


        <!-- Switcher Only -->


    </head>

    <body class="animated-all">


        <?php
//        include_once './color-chooser.php';
        ?>


        <div id="cd-nav"><a href="#0" class="cd-nav-trigger">Menu<span></span></a>
            <nav id="cd-main-nav">
                <ul>
                    <li class="active"><a href="index.html"><span>Home</span>
                            <small>Home Page</small>
                        </a></li>
                    <li><a href="blog.html"><span>NEWS & BLOG</span>
                            <small> News</small>
                        </a></li>
                    <li><a href="post.html"><span>Post </span>
                            <small> Post</small>
                        </a></li>
                    <li><a href="index.html" class="dropdown-toggle" data-toggle="dropdown"><span>Shop<b
                                    class="caret"></b></span>
                            <small>SEE ALL MODELS</small>
                        </a>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="catalog.html">Catalog</a></li>
                            <li><a href="product_view.html">Product</a></li>
                        </ul>
                    </li>
                    <li><a href="page.html"><span>Page</span>
                            <small>X-Sport page</small>
                        </a></li>
                </ul>
            </nav>
        </div>



        <?php
        include_once './header.php';
        navigation_print('PRODUCTS');
        ?>





        <div class="page-header">

        </div>
        <div class="product-paging">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="pull-left"><a href="catalog.html" class="btn-arrow"> BACK TO CATEGORY</a></div>
                        <div class="pull-right"><a href="#" class="btn btn-arrow-left"><span class="icomoon-arrow-left"></span></a><a
                                class="btn btn-arrow-right" href="#"><span class="icomoon-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <main class="section layout-col-1" id="main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12  ">
                        <section class="main-content" role="main">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="product-image-left animated" data-animation="bounceInUp">
                                        <div class="clearfix" id="image-block">
                                            <div id="slider-product" class="flexslider">
                                                <ul class="slides">
                                                    <?php
                                                    include 'dbconfig.php';
                                                    $con = mysqli_connect($host, $username, $password, $dbname);

                                                    $sql = "SELECT id,name,modal,description FROM product WHERE id=" . $_GET['id'];
                                                    //echo $sql;
                                                    $result = mysqli_query($con, $sql);
                                                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                                    ?>
                                                    <li><a href="<?php echo 'images/products/large/' . $row['id'] . '.jpg' ?>"> <img
                                                                src="<?php echo 'images/products/large/' . $row['id'] . '.jpg' ?>" width="600"
                                                                height="700" alt="img"/></a></li>
                                                    <li><a href="<?php
                                                        $filename = 'images/products/large/' . $row['id'] . '1.jpg';
                                                        if (file_exists($filename)) {
                                                            echo 'images/products/large/' . $row['id'] . '1.jpg';
                                                        } else {
                                                            echo 'images/products/large/' . $row['id'] . '.jpg';
                                                        }
                                                        ?>"> <img
                                                                src="<?php
                                                                $filename = 'images/products/large/' . $row['id'] . '1.jpg';
                                                                if (file_exists($filename)) {
                                                                    echo 'images/products/large/' . $row['id'] . '1.jpg';
                                                                } else {
                                                                    echo 'images/products/large/' . $row['id'] . '.jpg';
                                                                }
                                                                ?>" width="600"
                                                                height="700" alt="img"/></a></li>
                                                    <li><a href="<?php
                                                        $filename = 'images/products/large/' . $row['id'] . '2.jpg';
                                                        if (file_exists($filename)) {
                                                            echo 'images/products/large/' . $row['id'] . '2.jpg';
                                                        } else {
                                                            echo 'images/products/large/' . $row['id'] . '.jpg';
                                                        }
                                                        ?>"> <img
                                                                src="<?php
                                                                $filename = 'images/products/large/' . $row['id'] . '2.jpg';
                                                                if (file_exists($filename)) {
                                                                    echo 'images/products/large/' . $row['id'] . '2.jpg';
                                                                } else {
                                                                    echo 'images/products/large/' . $row['id'] . '.jpg';
                                                                }
                                                                ?>" width="600"
                                                                height="700" alt="img"/></a></li>
                                                    <li><a href="<?php
                                                        $filename = 'images/products/large/' . $row['id'] . '3.jpg';
                                                        if (file_exists($filename)) {
                                                            echo 'images/products/large/' . $row['id'] . '3.jpg';
                                                        } else {
                                                            echo 'images/products/large/' . $row['id'] . '.jpg';
                                                        }
                                                        ?>"> <img
                                                                src="<?php
                                                                $filename = 'images/products/large/' . $row['id'] . '3.jpg';
                                                                if (file_exists($filename)) {
                                                                    echo 'images/products/large/' . $row['id'] . '3.jpg';
                                                                } else {
                                                                    echo 'images/products/large/' . $row['id'] . '.jpg';
                                                                }
                                                                ?>" width="600"
                                                                height="700" alt="img"/></a></li>
                                                    <li><a href="<?php
                                                        $filename = 'images/products/large/' . $row['id'] . '4.jpg';
                                                        if (file_exists($filename)) {
                                                            echo 'images/products/large/' . $row['id'] . '4.jpg';
                                                        } else {
                                                            echo 'images/products/large/' . $row['id'] . '.jpg';
                                                        }
                                                        ?>"> <img
                                                                src="<?php
                                                                $filename = 'images/products/large/' . $row['id'] . '4.jpg';
                                                                if (file_exists($filename)) {
                                                                    echo 'images/products/large/' . $row['id'] . '4.jpg';
                                                                } else {
                                                                    echo 'images/products/large/' . $row['id'] . '.jpg';
                                                                }
                                                                ?>" width="600"
                                                                height="700" alt="img"/></a></li>

                                                </ul>
                                            </div>
                                            <div id="carousel" class="flexslider">
                                                <ul class="slides">
                                                    <li><img src="<?php echo 'images/products/large/' . $row['id'] . '.jpg' ?>" width="600"
                                                             height="700" alt="img"/></li>
                                                    <li><img src="<?php
                                                        $filename = 'images/products/large/' . $row['id'] . '1.jpg';
                                                        if (file_exists($filename)) {
                                                            echo 'images/products/large/' . $row['id'] . '1.jpg';
                                                        } else {
                                                            echo 'images/products/large/' . $row['id'] . '.jpg';
                                                        }
                                                        ?>" width="600"
                                                             height="700" alt="img"/></li>
                                                    <li><img src="<?php
                                                        $filename = 'images/products/large/' . $row['id'] . '2.jpg';
                                                        if (file_exists($filename)) {
                                                            echo 'images/products/large/' . $row['id'] . '2.jpg';
                                                        } else {
                                                            echo 'images/products/large/' . $row['id'] . '.jpg';
                                                        }
                                                        ?>" width="600"
                                                             height="700" alt="img"/></li>
                                                    <li><img src="<?php
                                                        $filename = 'images/products/large/' . $row['id'] . '3.jpg';
                                                        if (file_exists($filename)) {
                                                            echo 'images/products/large/' . $row['id'] . '3.jpg';
                                                        } else {
                                                            echo 'images/products/large/' . $row['id'] . '.jpg';
                                                        }
                                                        ?>" width="600"
                                                             height="700" alt="img"/></li>
                                                    <li><img src="<?php
                                                        $filename = 'images/products/large/' . $row['id'] . '4.jpg';
                                                        if (file_exists($filename)) {
                                                            echo 'images/products/large/' . $row['id'] . '4.jpg';
                                                        } else {
                                                            echo 'images/products/large/' . $row['id'] . '.jpg';
                                                        }
                                                        ?>" width="600"
                                                             height="700" alt="img"/></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="product-right animated" data-animation="bounceInUp">
                                        <h3 class="product-title"><?php echo $row['name'] . ' : ' . $row['modal'] ?></h3>

                                        <div class="product-desc"><?php echo $row['description'] ?></div>
                                        <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                                class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> 16 Review
                                            (s) / <a class="add-rev-link" href="#tab-info-anchore">Add a Review </a></div>

                                        <hr>
                                        <div class="shorty-desc">
                                            <p> <?php echo $row['description'] ?></p>
                                        </div>
                                        <hr>
                                        <div class="footer-panel">


                                            <div class="social-box">
                                                <h4>SHARE THIS STORY</h4>
                                                <ul class="social-links">
                                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="icomoon-facebook"></i></a>
                                                    </li>
                                                    <li class=""><a href="https://twitter.com/" target="_blank"><i class="icomoon-twitter"></i></a>
                                                    </li>
                                                    <li><a href="https://www.google.com/" target="_blank"><i class="icomoon-googleplus"></i></a>
                                                    </li>
                                                    <li><a href="https://www.pinterest.com/" target="_blank"><i class="icomoon-pinterest"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-label"><img src="media/label/guarantee.png" alt="img"/></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9  col-sm-9 product-info animated" data-animation="bounceInUp">
                                    <div id="tab-info-anchore"></div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab1" role="tab" data-toggle="tab">DESCRIPTION</a></li>
                                        <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab">PRODUCT INFO</a></li>
                                        <li role="presentation"><a href="#tab3" role="tab" data-toggle="tab">REVIEWS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="tab1">
                                            <p><?php echo $row['description'] ?></p>

                                            <p></p>

                                            <p>&nbsp;</p>

                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <h4><i class="fa fa-flag"></i> One Font, 479 Icons</h4>
                                                    In a single collection, Font Awesome is a pictographic language of web-related actions.
                                                    <hr>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <h4><i class="fa fa-pencil"></i> CSS Control</h4>
                                                    Easily style icon color, size, shadow, and anything that's possible with CSS.
                                                    <hr>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <h4><i class="fa fa-eye"></i> Perfect on Retina Displays</h4>
                                                    Font Awesome icons are vectors, which mean they're gorgeous on high-resolution displays.

                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <h4><i class="fa fa-desktop"></i> Desktop Friendly</h4>
                                                    To use on the desktop or for a complete set of vectors,
                                                    check out the <a href="./cheatsheet/">cheatsheet</a>.
                                                </div>

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab2">
                                            <?php echo $row['description'] ?>
                                            <img src="<?php echo 'images/products/large/' . $row['id'] . '.jpg' ?>" width="300" height="207"
                                                 class="size-medium  alignright" alt="img"/>

                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab3">
                                            <div class="rew_blk clearfix">
                                                <h5>Excellent </h5>

                                                <div class="top_row clearfix">
                                                    <div class="date"><span class="fa fa-calendar"></span>1/3/2020</div>
                                                    <a class="user" href="#"><span class="fa fa-user"></span>Sheldon</a>

                                                    <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                                            class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                                            class="fa fa-star-o"></i></div>
                                                </div>
                                                <p>Test Review 1</p>
                                            </div>
                                            <div class="rew_blk clearfix">
                                                <h5>Awesome!</h5>

                                                <div class="top_row clearfix">
                                                    <div class="date"><span class="fa fa-calendar"></span>3/12/2020</div>
                                                    <a class="user" href="#"><span class="fa fa-user"></span>Sasha</a>

                                                    <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                                            class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
                                                            class="fa fa-star gold"></i></div>
                                                </div>
                                                <p>Test Review 2</p>
                                            </div>
                                            <form accept-charset="UTF-8" action="action.php" method="post">
                                                <input id="ratings-hidden" name="rating" type="hidden">
                                                <textarea class="form-control animated" cols="50" id="new-review" name="comment"
                                                          placeholder="Enter your review here..." rows="5"></textarea>

                                                <div class="text-right form-star-box">
                                                    <div class="starrr" data-rating='0'></div>
                                                    <button class="btn btn-success btn-lg" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3   col-sm-3  product-carousel-right animated" data-animation="bounceInUp">
                                    <div class="widget widget-special">
                                        <?php
                                        include_once 'get-products-similiar.php';
                                        print_similar_products($row['id'], $row['name']);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>


        <section class="x-section ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-wrap animated" data-animation="flipInX">
                            <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
                            <h2 class="section-heading ">RELATED PRODUCTS</h2>
                        </div>
                    </div>
                </div>


                <div class="row text-center">
                    <section class="xcarousel-4 animated " data-animation="bounceInUp">
                        <div class="x-frame">
                            <ul class="x-slider product-grid ">
                                <?php
                                include_once 'get-products-related.php';
                                print_related_products($row['id'], $row['name']);
                                ?>
                            </ul>
                        </div>
                        <div class="x-navigation navigation"><a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i
                                    class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);"
                                                                    class="btn  slider-direction next-page"><i
                                    class="icomoon-arrow-right2"></i></a></div>
                    </section>
                </div>
            </div>
        </section>


        <section class="x-section">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-wrap">
                            <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
                            <h2 class="section-heading ">OUR BRAND</h2>
                        </div>
                    </div>
                </div>

                <!--Modal box-->
                <div class="quick-view-modal modal fade" id="quick-view-id47">
                    <div class="modal-content"></div>
                </div>

                <!---->

                <div class="row text-center">
                    <section class="xcarousel-5 animated" data-animation="bounceInUp">
                        <div class="x-frame">
                            <ul class="x-carousel brand-carousel">
                                <li><a href="#"><img src="images/brands/1.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/2.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/3.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/4.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/5.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/6.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/7.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/8.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/9.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/10.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/11.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/12.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/13.jpg" alt="img"/></a></li>
                                <li><a href="#"><img src="images/brands/14.jpg" alt="img"/></a></li>

                            </ul>
                        </div>
                        <div class="x-navigation navigation"><a href="javascript:void(0);"
                                                                class="btn slider-direction prev-page disabled"><i
                                    class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);"
                                                                    class="btn  slider-direction next-page"><i
                                    class="icomoon-arrow-right2"></i></a></div>
                    </section>
                </div>
            </div>
        </section>

        <?php
        include_once './footer.php';
        ?>
        <div class="footer-absolute">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mobile-center"><img src="img/pay.png" width="244"
                                                                                           height="23" alt="pay"/></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right  mobile-center"><img
                            src="img/fot-logo-small.png" width="175" height="38" alt="logo"/></div>
                </div>
            </div>
            <a href="#" class="scroll-top "><span class="icomoon-arrow-up2"></span></a></div>


        <!-- AlLL SCRIPTS & PLUGINS -->


        <!-- SWITCHER -->
        <script src="plugins/switcher/js/bootstrap-select.js"></script>
        <script src="plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script>
        <script src="plugins/switcher/js/dmss.js"></script>
        <!-- MAIN SCRIPTS-->

        <!--Blazy image-->
        <script type="text/javascript" src="js/blazy.min.js"></script>

        <!--Waypoint-->
        <script src="js/waypoints.min.js"></script>
        <!--Ios Fix-->
        <script src="js/ios-orientationchange-fix.js"></script>
        <!--Element form Styled-->
        <script src="plugins/selectbox/jquery.selectbox-0.2.js"></script>

        <!--Sly Slider-->
        <script type="text/javascript" src="plugins/sly/sly.min.js"></script>
        <!--Bx Slider-->
        <script src="plugins/bxslider/jquery.bxslider.min.js"></script>
        <!--Flex Slider-->
        <script src="plugins/flexslider/jquery.flexslider-min.js"></script>
        <!-- Flickr-->
        <script src="plugins/jflickrfeed/jflickrfeed.min.js"></script>
        <!-- Catalog Price-->
        <script src="plugins/nouislider/jquery.nouislider.min.js"></script>
        <!-- Magnific-->
        <script type="text/javascript" src="plugins/magnific/jquery.magnific-popup.js"></script>
        <!-- Pretty Photo -->
        <script src="plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <!-- SMart Menu -->
        <script src="plugins/smart-menu/smart-menu.js"></script>
        <!-- User agent -->
        <script type="text/javascript" src="js/cssua.min.js"></script>


        <!--SHOP SCRIPTS -->

        <!--Catalog Points-->
        <script src="plugins/points/points.js"></script>


        <!--HOME SCRIPTS-->

        <!--Isotope filter-->
        <script type="text/javascript" src="plugins/isotope/jquery.isotope.min.js"></script>
        <!--Contact form-->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <!-- SMart Grid-->
        <script src="plugins/events/masonry.pkgd.min.js"></script>
        <!-- Events -->
        <script src="plugins/events/events.js"></script>
        <!--Count Down-->
        <script src="plugins/countdown/jquery.countdown.min.js"></script>
        <!-- Newsletter -->
        <script src="plugins/newsletter/main.js"></script>
        <!-- Bio -->
        <script type="text/javascript" src="plugins/bio/js/bio.js"></script>
        <!--IVIEW-->
        <script src="plugins/iview/js/iview.js"></script>


        <!--Scripts-->
        <script type="text/javascript" src="js/scripts.js"></script>

    </body>
</html>
