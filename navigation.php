<?php
function navigation_print($active)
{
    echo '<div class="navbar yamm navbar-default ">
    <div class="container">
        <div class="navbar yamm navbar-default ">
            <div class="container">
                <nav id="navbar-collapse-1" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">';
    if ($active == 'HOME') {
        echo '<li class="active" ><a href="index.php">HOME</a></li>
                        <li><a href="#contact">ABOUT US</a></li>
                        <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">CATEGORIES<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">';
        include_once './get-categories_with_brands.php';
        echo ' </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </li><li   ><a href="products.php">PRODUCTS</a></li>
                <li class="dropdown yamm-classic"><a href="#" data-toggle="dropdown" class="dropdown-toggle">PROJECTS<b class="caret"></b></a>
                    <ul class="dropdown-menu ">
                        <li><a  href="products-by-category.php?name=9"> TRACK AND FIELD</a></li>
                        <li><a  href="products-by-category.php?name=7"> FITNESS FECILITIES</a></li>
                        <li><a  href="products-by-category.php?name=11"> SPORTS FECILITIES </a></li>
                        <li><a  href="products-by-category.php?name=13"> MEDICAL FITNESS FECILITIES</a></li>
                    </ul>
                </li><li   ><a href="#">DOWNLOADS</a></li>
                <li><a href="#contact">CONTACT US</a></li>
                <!-- Classic dropdown -->
                <!-- Pictures -->';
    } elseif ($active == 'ABOUT') {
        echo '<li><a href="index.php">HOME</a></li>
                        <li class="active" ><a href="#contact">ABOUT US</a></li>
                        <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">CATEGORIES<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">';
        include_once './get-categories_with_brands.php';
        echo ' </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </li><li   ><a href="products.php">PRODUCTS</a></li>
                <li class="dropdown yamm-classic"><a href="#" data-toggle="dropdown" class="dropdown-toggle">PROJECTS<b class="caret"></b></a>
                    <ul class="dropdown-menu ">
                        <li><a  href="products-by-category.php?name=9"> TRACK AND FIELD</a></li>
                        <li><a  href="products-by-category.php?name=7"> FITNESS FECILITIES</a></li>
                        <li><a  href="products-by-category.php?name=11"> SPORTS FECILITIES </a></li>
                        <li><a  href="products-by-category.php?name=13"> MEDICAL FITNESS FECILITIES</a></li>
                    </ul>
                </li><li   ><a href="#">DOWNLOADS</a></li>
                <li><a href="index.php#contact">CONTACT US</a></li>
                <!-- Classic dropdown -->
                <!-- Pictures -->';
    } elseif ($active == 'PRODUCTS') {
        echo '<li><a href="index.php">HOME</a></li>
                        <li ><a href="#contact">ABOUT US</a></li>
                        <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">CATEGORIES<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">';
        include_once './get-categories_with_brands.php';
        echo ' </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </li><li class="active"><a href="products.php">PRODUCTS</a></li>
                <li class="dropdown yamm-classic"><a href="#" data-toggle="dropdown" class="dropdown-toggle">PROJECTS<b class="caret"></b></a>
                    <ul class="dropdown-menu ">
                        <li><a  href="products-by-category.php?name=9"> TRACK AND FIELD</a></li>
                        <li><a  href="products-by-category.php?name=7"> FITNESS FECILITIES</a></li>
                        <li><a  href="products-by-category.php?name=11"> SPORTS FECILITIES </a></li>
                        <li><a  href="products-by-category.php?name=13"> MEDICAL FITNESS FECILITIES</a></li>
                    </ul>
                </li><li   ><a href="#">DOWNLOADS</a></li>
                <li><a href="index.php#contact">CONTACT US</a></li>
                <!-- Classic dropdown -->
                <!-- Pictures -->';
    } elseif ($active == 'DOWNLOADS') {
        echo '<li><a href="index.php">HOME</a></li>
                        <li ><a href="#contact">ABOUT US</a></li>
                        <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">CATEGORIES<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">';
        include_once './get-categories_with_brands.php';
        echo ' </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </li><li ><a href="products.php">PRODUCTS</a></li>
                <li class="dropdown yamm-classic"><a href="#" data-toggle="dropdown" class="dropdown-toggle">PROJECTS<b class="caret"></b></a>
                    <ul class="dropdown-menu ">
                        <li><a  href="products-by-category.php?name=9"> TRACK AND FIELD</a></li>
                        <li><a  href="products-by-category.php?name=7"> FITNESS FECILITIES</a></li>
                        <li><a  href="products-by-category.php?name=11"> SPORTS FECILITIES </a></li>
                        <li><a  href="products-by-category.php?name=13"> MEDICAL FITNESS FECILITIES</a></li>
                    </ul>
                </li><li  class="active"><a href="#">DOWNLOADS</a></li>
                <li><a href="index.php#contact">CONTACT US</a></li>
                <!-- Classic dropdown -->
                <!-- Pictures -->';
    }
    echo '</ul>
        </nav>
    </div>
</div>
</div>
</div>';
}