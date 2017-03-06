<section class="shop-section ">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-12 col-xs-12 mobile-center">
                <div class="blog-logo text-left"><a href="index.php"> <img src="img/shop-logo.png" alt="logo"/></a>
                </div>
            </div>
            <div class="col-md-6  col-xs-6 mobile-center">
                <div class="input-group top-search">

                    <!--<input type="hidden" name="search_param" value="all" id="search_param">-->
                    <input type="text" id="search-box" class="form-control" name="key" placeholder="Search term...">
                    <!--<div id="suggesstion-box"></div>-->
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="search-button"><span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>

                </div>

            </div>
            <div class="col-md-3 col-xs-12 text-right mobile-center">
                <div class="popover-shorty">
                    <div class="popover popover-cart bottom">
                        <div class="media"><a href="#" class="left"> <img src="media/item/4/1.jpg" width="600"
                                                                          height="700" alt=""/> </a>

                            <div class="body">
                                <div class="entry-header">
                                    <h5 class="entry-title"><a href="#">item/4/1</a></h5>
                                </div>
                                <div class="entry-meta">
                                    <div class="price-box"><span class="price-regular-single">Dhs 000.00</span> <span
                                            class="price-reduction">70%</span></div>
                                    <div class="qty-cart">Quantity: 23</div>
                                </div>
                                <div class="del-cart-item"><i class="fa fa-times"></i></div>
                            </div>
                        </div>
                        <div class="media"><a href="#" class="left"> <img src="media/item/4/2.jpg" width="600"
                                                                          height="700" alt="img"/> </a>

                            <div class="body">
                                <div class="entry-header">
                                    <h5 class="entry-title"><a href="#">Phasellus vehicula</a></h5>
                                </div>
                                <div class="entry-meta">
                                    <div class="price-box"><span class="price-regular-single">$540.00</span></div>
                                    <div class="qty-cart">Quantity: 11</div>
                                </div>
                                <div class="del-cart-item"><i class="fa fa-times"></i></div>
                            </div>
                        </div>
                        <div class="media"><a href="#" class="left"> <img src="media/item/4/4.jpg" width="600"
                                                                          height="700" alt="img"/> </a>

                            <div class="body">
                                <div class="entry-header">
                                    <h5 class="entry-title"><a href="#">Phasellus vehicula</a></h5>
                                </div>
                                <div class="entry-meta">
                                    <div class="price-box"><span class="price-regular-single">$120.00</span> <span
                                            class="price-old">$700.00</span></div>
                                    <div class="qty-cart">Quantity: 1</div>
                                </div>
                                <div class="del-cart-item"><i class="fa fa-times"></i></div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row text-center">
                                <div class="col-xs-7 text-left"> Cart Subtotal:</div>
                                <div class="col-xs-5 text-right"> $ 1232.00</div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row text-center">
                                <div class="col-xs-7 text-left"> Shipping:</div>
                                <div class="col-xs-5 text-right"> $ 12.00</div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row text-center"><a class=" btn btn-cart" href="cart"> Checkout</a>
                                <button class=" btn btn-danger" type="button"> View Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popover-shorty"><a href="#"><i class="fa fa-truck"></i> </a>

                    <div class="popover bottom">
                        <div class="arrow"></div>
                        <h3 class="popover-title">Reliable delivery</h3>

                    </div>
                </div>
                <div class="popover-shorty"><a href="#"><i class="fa fa-thumbs-o-up"></i> </a>

                    <div class="popover bottom">
                        <div class="arrow"></div>
                        <h3 class="popover-title">Quality guarantee</h3>

                    </div>
                </div>
                <div class="popover-shorty"><a href="https://www.facebook.com/mudramet"><i class="fa fa-facebook"></i> </a>

                    <div class="popover bottom">
                        <div class="arrow"></div>
                        <h3 class="popover-title">Facebook follow </h3>

                    </div>
                </div>
                <div class="popover-shorty"><a href="https://twitter.com/mudrasports"><i class="fa fa-twitter"></i> </a>

                    <div class="popover bottom">
                        <div class="arrow"></div>
                        <h3 class="popover-title">Twitter follow </h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
// AJAX call for autocomplete 
    $(document).ready(function () {
//        $("#search-box").keyup(function () {
//            $.ajax({
//                type: "POST",
//                url: "readCountry.php",
//                data: 'keyword=' + $(this).val(),
//                beforeSend: function () {
//                    $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
//                },
//                success: function (data) {
//                    $("#suggesstion-box").show();
//                    $("#suggesstion-box").html(data);
//                    $("#search-box").css("background", "#FFF");
//                }
//            });
//        });
        $("#search-button").click(function () {
//            alert($("#search-box").val());
            if ($("#search-box").val().length !== 0)
            {
                window.window.location = "product_search.php?key=" + $("#search-box").val();
            }
        });
    });
//To select country name
//    function selectCountry(val) {
//        $("#search-box").val(val);
//        $("#suggesstion-box").hide();
//    }
</script>