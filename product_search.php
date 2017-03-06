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
//include_once './color-chooser.php';
?>


<div id="cd-nav"><a href="#0" class="cd-nav-trigger">Menu<span></span></a>
    <nav id="cd-main-nav">
        <ul>
            <li class="active"><a href="index.html"><span>Home</span>
                    <small>X-Sport Home Page</small>
                </a></li>
            <li><a href="blog.html"><span>NEWS & BLOG</span>
                    <small>X-Sport News</small>
                </a></li>
            <li><a href="post.html"><span>Post </span>
                    <small>X-Sport Post</small>
                </a></li>
            <li><a href="shop.html" class="dropdown-toggle" data-toggle="dropdown"><span>Shop<b
                            class="caret"></b></span>
                    <small>SEE ALL MODELS</small>
                </a>
                <ul>
                    <li><a href="shop.html">Home</a></li>
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
<main class="section layout-col-2" id="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar-resize">
                <aside class="sidebar ">
                    <div class="widget widget-category">
                        <h3 class="widget-title"><span>categories</span></h3>
                        <ul class="category-list unstyled clearfix">
                            <?php
                            include_once './get-categories.php';
                            ?>
                        </ul>
                    </div>

                    <!-- ARCHIVE WIDGET -->
                    <div class="widget widget-filter">
                        <div class="block_content">

                            <div class="list-group">

                                <div class="list-group-heading"><span
                                        class="list-group-heading-inner"> <span> Brands</span> </span>
                                </div>
                                <div class="list-content">
                                    <ul class="check-list">

                                        <?php
                                        include_once './get-brands.php';
                                        ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="widget widget-banner"><a href="#"><img src="media/promo/1.jpg" width="270" height="230"
                                                                       alt="img"/></a>
                    </div>

                    <?php
                    include_once 'get-products-special.php';
                    ?>

                </aside>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9  col-resize ">
                <section class="main-content" role="main">
                    <div class="points-wrap"><img src="media/1200x520/1.jpg" width="1920" height="1080" alt=""/>

                    </div>
                    <div class="subcategory-list" id="subcategories">
                        <ul>
                            <li class="x-hover sub-heading"><span class="x-hover-text">Subcategories</span></li>
                            <?php
                            include_once './get-product-subcategories.php';
                            ?>
                        </ul>
                    </div>


                    <?php
                    include_once './get-key-products.php';
                    if (isset($_GET['starting_index'])) {
                        paginate($_GET['starting_index'], $_GET['count'], $_GET['current_page'],$_GET['key']);
                    } else {
                        paginate_init($_GET['key']);
                    }
                    ?>
                    


                </section>
            </div>
        </div>
    </div>
</main>
<section class="x-section">
<div class="container">
<div class="row">
    <div class="col-lg-12 text-center">
        <div class="heading-wrap">
            <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
            <h2 class="section-heading ">RELATED PRODUCTS</h2>
        </div>
    </div>
</div>


<div class="row text-center">
<section class="xcarousel-4">
<div class="x-frame">
<ul class="x-slider product-grid">
    <?php
    include_once 'get-products-recommended.php';
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
            <section class="xcarousel-5 animated" data-animation="bounceInRight">
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
