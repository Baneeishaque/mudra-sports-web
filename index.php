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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="animated-all">


        <?php
//        include_once './color-chooser.php';
        ?>

        <!-- Loader Landing Page -->
        <div id="ip-container" class="ip-container">
            <!-- initial header -->
            <header class="ip-header">
                <div class="col-lg-12 text-center">
                    <div class="ip-logo"><img src="img/loader-logo.png" alt="logo"></div>
                </div>
                <div class="ip-loader">
                    <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                    <path class="ip-loader-circlebg"
                          d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
                    <path id="ip-loader-circle" class="ip-loader-circle"
                          d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                    </svg>
                </div>
            </header>
        </div>
        <!-- Loader end -->

        <div id="cd-nav"><a href="#0" class="cd-nav-trigger">Menu<span></span></a>
            <nav id="cd-main-nav">
                <ul>
                    <li class="active"><a href="#"><span>Home</span>
                            <small>Mudra Sports Home Page</small>
                        </a></li>
                    <li><a href="blog.html"><span>NEWS & BLOG</span>
                            <small>Mudra Sports News</small>
                        </a></li>
                    <li><a href="post.html"><span>Post </span>
                            <small>Mudra Sports Post</small>
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
                            <small>Mudra Sports page</small>
                        </a></li>
                </ul>
            </nav>
        </div>

        <?php
        include_once './header.php';
        navigation_print('HOME');
        ?>

        <!--IVIEW-->
        <link rel="stylesheet" href="plugins/iview/css/iview.css"/>
        <link rel="stylesheet" href="plugins/iview/css/skin/style2.css"/>
        <script src="plugins/iview/js/iview.js"></script>
        <!--END-->

        <div id="iview">
            <div data-iview:thumbnail="media/1920x960/1.jpg" data-iview:image="media/1920x960/1.jpg"
                 data-iview:transition="block-drop-random" data-iview:pausetime="2000">
                <div class="container">
                    <div class="iview-caption text-center bg-no-caption" data-x="280" data-y="180" data-transition="expandUp">
                        <h3>COMMERCIAL FITNESS</h3>

                        <p> BEST PRODUCTS | TOP BRANDS, Commercial Fitness is Mudra's total fitness resource, providing a full
                            range of commercial exercise equipment, fitness center design, and equipment</p>
                        <a href="products.php" class="btn">EXPLORE NOW</a></div>
                </div>
            </div>
            <div data-iview:thumbnail="media/1920x960/2.jpg" data-iview:image="media/1920x960/2.jpg">
                <div class="container">
                    <div class="iview-caption text-center bg-no-caption" data-x="280" data-y="180" data-transition="expandUp">
                        <h3>HOME FITNESS</h3>

                        <p>Shop our home workout products today!</p>
                        <a href="products.php" class="btn">EXPLORE NOW</a></div>
                </div>
            </div>
            <div data-iview:thumbnail="media/1920x960/3.jpg" data-iview:image="media/1920x960/3.jpg">
                <div class="container">
                    <div class="iview-caption text-center bg-no-caption" data-x="380" data-y="180" data-transition="expandUp">
                        <h3>SPORTS FECILITIES</h3>

                        <p>TRACK AND FIELDS,COURTS & FECILITIES</p>
                        <a href="products.php" class="btn">EXPLORE NOW</a></div>
                </div>
            </div>
            <div data-iview:thumbnail="media/1920x960/4.jpg" data-iview:image="media/1920x960/4.jpg">
                <div class="container">
                    <div class="iview-caption text-center bg-no-caption" data-x="280" data-y="180" data-transition="expandUp">
                        <h3>TEAM SPORTS</h3>

                        <p> FIND YOUR TEAM SPORTS FECILITIES HERE</p>

                        <a href="products.php" class="btn">EXPLORE NOW</a></div>
                </div>
            </div>
            <div data-iview:thumbnail="media/1920x960/5.jpg" data-iview:image="media/1920x960/5.jpg">
                <div class="container">
                    <div class="iview-caption text-center bg-no-caption" data-x="280" data-y="180" data-transition="expandUp">
                        <h3>FITNESS FECILITIES</h3>

                        <p> We are providing commercial and home fitnes & Sports Fecilities.</p>
                        <a href="products.php" class="btn">EXPLORE NOW</a></div>
                </div>
            </div>
            <div data-iview:thumbnail="media/1920x960/6.jpg" data-iview:image="media/1920x960/6.jpg">
                <div class="container">
                    <div class="iview-caption text-center bg-no-caption" data-x="380" data-y="180" data-transition="expandUp">
                        <h3>TABELTOP GAMES</h3>

                        <p> BILLIARDS & SNOOKERS,TABLE TENNIS,ETC..</p>
                        <a href="products.php" class="btn">EXPLORE NOW</a></div>
                </div>
            </div>
        </div>
        <div id="banner01" class="banner-full-width primary-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-right">
                        <h3>Gear UP Time</h3>
                        <h5>SAVE ON ALL YOUR TRAINING NEEDS,WEGHTS & BENCHES,CARDIO EQUIPMENTS,FITNESS ACCESSORIES.</h5>
                    </div>
                    <div class="col-lg-2 text-left"><a class="btn" href="products.php">SHOP NOW</a></div>
                    <div class="col-lg-2 text-right"></div>
                </div>
            </div>
        </div>
        <section class="x-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div data-animation="flipInX" class="heading-wrap animated animation-done flipInX heading-wrap-style-2">
                            <div class="small-logo">WELCOME TO</div>
                            <h2 class="section-heading">MUDRA SPORTS | MEMBER IN FITNESS </h2>

                            <p>MUDRA SPORTS started Commercial & Home Fitness, Track & Field Athletic Equipment and Multi Sports
                                Courts Construction business in the year 2012 and steadily grew to be one of the leading Player
                                in the Sport Supplies in the country.

                                Today, MUDRA SPORTS is a strong supplier of Internationally well known brands of Sports
                                Equipment and keep availability on demand.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="double-line">
        </section>

        <!-- SECTION -->

        <section class="x-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-wrap animated" data-animation="flipInX">
                            <div class="small-logo">SHOP IN</div>
                            <h2 class="section-heading">FEATURED CATEGORY</h2>
                        </div>
                    </div>
                </div>
                <?php
                include_once './get-products-featured-by-category.php';
                ?>
                <div class="x-navigation navigation"><a href="products.php" class="btn btn-danger">VIEW MORE</a></div>
            </div>
        </section>


        <!-- SECTION -->

        <section id="contact" class="no-bg-color-parallax parallax-black home-section text-center "
                 style="background-image:url(media/bg/6.jpg)">
            <ul class="bg-slideshow">
                <li>
                    <div class="bg-slide" style="background-image:url(media/bg/6.jpg)"></div>
                </li>
                <li>
                    <div class="bg-slide" style="background-image:url(media/bg/5.jpg)"></div>
                </li>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-wrap animated" data-animation="flipInX">
                            <div class="small-logo"><img src="img/logo-white.png" width="106" height="36" alt=""/></div>
                            <h2 class="section-heading"> CONTACT US</h2>

                            <h3 class="section-subheading">WE’RE ALL ABOUT MUDRA SPORTS</h3>

                            <p>MUDRA SPORTS is not only known for its volumes, but also for the high standards of customer
                                satisfaction. Its well experienced sports specialty technicians and sales network boast of top
                                scores in quality parameters affecting customer experience year after year..

                                Teamwork is the forte of A MUDRA SPORTS. The leadership in the organization comprise of long
                                serving visionaries with proven track record in the field of Sports Equipment and Multi Sports
                                Facility. It is this strength that makes MUDRA SPORTS always remains ahead of the curve.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form name="sentMessage animated" data-animation="bounceInUp" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required
                                           data-validation-required-message="Please enter your name.">

                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required
                                           data-validation-required-message="Please enter your email address.">

                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required
                                           data-validation-required-message="Please enter your phone number.">

                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-text">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required
                                              data-validation-required-message="Please enter a message."></textarea>

                                    <p class="help-block text-danger"></p>

                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl  hang">Send Message</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <ul>
                                    <li>
                                        <div class="icon-set-wrap">
                                            <div class="icon-set"><a><i class="fa fa-map-marker   "></i></a></div>
                                            <div class="content-icon-set">Mudra Sports
                                                PO.Box 1234 - Postal code 121<br>
                                                Sultanate of Oman
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-set-wrap">
                                            <div class="icon-set"><a><i class="fa   fa-envelope   "></i></a></div>
                                            <div class="content-icon-set"><a href="mailto:info@mudrasports.com">info@mudrasports.com</a>
                                                <a href="mailto:support@mudrasports.com">support@mudrasports.com</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-set-wrap">
                                            <div class="icon-set"><a><i class="fa  fa-phone "></i></a></div>
                                            <div class="content-icon-set">Tel: +968 24 707009
                                                <br>Fax: +968 24 707003
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- SECTION -->

        <div class="map"><img src="media/map.jpg" alt="map.jpg"/></div>

        <!-- SECTION -->

        <?php
        include_once './footer.php';
        ?>

        <!-- AlLL SCRIPTS & PLUGINS -->

        <!--Color Switcher-->
        <script src="plugins/switcher/js/bootstrap-select.js"></script>
        <script src="plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script>
        <script src="plugins/switcher/js/dmss.js"></script>

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
<!--         SMart Menu 
        <script src="plugins/smart-menu/smart-menu.js"></script>-->
        <!-- User agent -->
        <script type="text/javascript" src="js/cssua.min.js"></script>
        <!-- Loader -->
        <script src="plugins/loader/js/classie.js"></script>
        <script src="plugins/loader/js/pathLoader.js"></script>
        <script src="plugins/loader/js/main.js"></script>

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
