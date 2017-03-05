<footer class="footer footer-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-12 col-xs-12 mobile-center">
                <div class="fot-box">
                    <h3 class="fot-title">Contact Us</h3>

                    <div class="media fot-contact">
                        <div class="left"><i class="fa fa-home"></i></div>
                        <div class="body">
                            <p> Mudra Sports
                                <br>PO.Box 1234 - Postal code 121
                                <br>Sultanate of Oman </p>
                        </div>
                    </div>
                    <div class="media fot-contact">
                        <div class="left"><i class="fa fa-envelope"></i></div>
                        <div class="body">
                            <p><a href="mailto:mudramuscat@gmail.com">mudramuscat@gmail.com</a>
                                <br><a href="mailto:mudrame@omantel.net.om">mudrame@omantel.net.om</a></p>
                        </div>
                    </div>
                    
                </div>

            </div>
            <div class="col-md-4 col-md-12 col-xs-12 mobile-center">
                <div class="fot-box">
                    <h3 class="fot-title">Information</h3>
                    
                    <div class="media fot-contact">
                        <div class="left"><i class="fa fa-whatsapp"></i></div>
                        <div class="body">
                            <p> Tel: +968 24 707009<br>
                                fax: +968 24 707003<br>
                                fax: +968 24 707003
                            </p>
                        </div>
                    </div>
                    <br>
                    <ul>
                        <li><a href="#"> Terms</a></li>
                        <li><a href="#"> Policies</a></li>
                        <li><a href="#"> Legal Notices</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-md-12 col-xs-12 mobile-center">


                <div class="fot-box">
                    <h3 class="fot-title">FIND US ON</h3>

                    <div class="social-box">
                        <ul class="social-links">
                            <li><a target="_blank" href="https://www.facebook.com/mudramet"><i class="icomoon-facebook"></i></a>
                            </li>
                            <li class=""><a target="_blank" href="https://twitter.com/mudrasports"><i class="icomoon-twitter"></i></a>
                            </li>
                            <li><a target="_blank" href="https://www.google.com/mudrasports"><i class="icomoon-googleplus"></i></a>
                            </li>
                            <li><a target="_blank" href="https://www.pinterest.com/mudrasports"><i
                                        class="icomoon-pinterest"></i></a></li>

                        </ul>
                    </div>
                    <div class="media fot-contact">
                        <div class="left"><i class="fa fa-phone-square"></i></div>
                        <div class="body">
                            <p> Tel: +968 24 707009<br>
                                fax: +968 24 707003
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/58a80cda6398130aabd55d3a/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script>
    (function (w, i, d, g, e, t, s) {
        w[d] = w[d] || [];
        t = i.createElement(g);
        t.async = 1;
        t.src = e;
        s = i.getElementsByTagName(g)[0];
        s.parentNode.insertBefore(t,
                s);
    })(window, document,
            '_gscq', 'script', '//widgets.getsitecontrol.com/74331/script.js');
</script>
<script>
    _gscq.push(['callback', 'submit', function (widgetId, data) {
            /*Execute the following function when a survey/contact/subscribe response has been submitted*/
//                                        alert(data.form.email[0].value);
//                                        alert(data.form.message[0].value);
            var email = data.form.email[0].value;
            var message = data.form.message[0].value;
            $.ajax({
                url: "mail/message_me.php",
                type: "POST",
                data: {
                    email: email,
                    message: message
                },
                cache: false,
                success: function () {
                    // Success message
                },
                error: function () {
                    // Fail message
                }
            });
        }]);
</script>