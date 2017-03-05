jQuery(document).ready(function (e) {
    function i() {
        if (e(window).scrollTop() > t && !n.hasClass("is-fixed")) {
            n.addClass("is-fixed").find(".cd-nav-trigger").one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function () {
                r.addClass("has-transitions")
            })
        } else if (e(window).scrollTop() <= t) {
            if (r.hasClass("is-visible") && !e("html").hasClass("no-csstransitions")) {
                r.addClass("is-hidden").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function () {
                    r.removeClass("is-visible is-hidden has-transitions");
                    n.removeClass("is-fixed");
                    e(".cd-nav-trigger").removeClass("menu-is-open")
                })
            } else if (r.hasClass("is-visible") && e("html").hasClass("no-csstransitions")) {
                r.removeClass("is-visible has-transitions");
                n.removeClass("is-fixed");
                e(".cd-nav-trigger").removeClass("menu-is-open")
            } else {
                n.removeClass("is-fixed");
                r.removeClass("has-transitions")
            }
        }
    }

    var t = 300;
    var n = e("#cd-nav"), r = n.find("#cd-main-nav ul");
    i();
    e(window).scroll(function () {
        i()
    });
    e(".cd-nav-trigger").on("click", function () {
        e(this).toggleClass("menu-is-open");
        r.off("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend").toggleClass("is-visible")
    })
})