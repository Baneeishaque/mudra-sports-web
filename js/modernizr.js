/*!
 * Modernizr v2.8.3
 * www.modernizr.com
 *
 * Copyright (c) Faruk Ates, Paul Irish, Alex Sexton
 * Available under the BSD and MIT licenses: www.modernizr.com/license/
 */

/*
 * Modernizr tests which native CSS3 and HTML5 features are available in
 * the current UA and makes the results available to you in two ways:
 * as properties on a global Modernizr object, and as classes on the
 * <html> element. This information allows you to progressively enhance
 * your pages with a granular level of control over the experience.
 *
 * Modernizr has an optional (not included) conditional resource loader
 * called Modernizr.load(), based on Yepnope.js (yepnopejs.com).
 * To get a build that includes Modernizr.load(), as well as choosing
 * which tests to include, go to www.modernizr.com/download/
 *
 * Authors        Faruk Ates, Paul Irish, Alex Sexton
 * Contributors   Ryan Seddon, Ben Alman
 */

window.Modernizr = function (e, t, n) {
    function A(e) {
        f.cssText = e
    }

    function O(e, t) {
        return A(p.join(e + ";") + (t || ""))
    }

    function M(e, t) {
        return typeof e === t
    }

    function _(e, t) {
        return !!~("" + e).indexOf(t)
    }

    function D(e, t) {
        for (var r in e) {
            var i = e[r];
            if (!_(i, "-") && f[i] !== n) {
                return t == "pfx" ? i : true
            }
        }
        return false
    }

    function P(e, t, r) {
        for (var i in e) {
            var s = t[e[i]];
            if (s !== n) {
                if (r === false)return e[i];
                if (M(s, "function")) {
                    return s.bind(r || t)
                }
                return s
            }
        }
        return false
    }

    function H(e, t, n) {
        var r = e.charAt(0).toUpperCase() + e.slice(1), i = (e + " " + v.join(r + " ") + r).split(" ");
        if (M(t, "string") || M(t, "undefined")) {
            return D(i, t)
        } else {
            i = (e + " " + m.join(r + " ") + r).split(" ");
            return P(i, t, n)
        }
    }

    function B() {
        i["input"] = function (n) {
            for (var r = 0, i = n.length; r < i; r++) {
                w[n[r]] = !!(n[r]in l)
            }
            if (w.list) {
                w.list = !!(t.createElement("datalist") && e.HTMLDataListElement)
            }
            return w
        }("autocomplete autofocus list placeholder max min multiple pattern required step".split(" "));
        i["inputtypes"] = function (e) {
            for (var r = 0, i, s, u, a = e.length; r < a; r++) {
                l.setAttribute("type", s = e[r]);
                i = l.type !== "text";
                if (i) {
                    l.value = c;
                    l.style.cssText = "position:absolute;visibility:hidden;";
                    if (/^range$/.test(s) && l.style.WebkitAppearance !== n) {
                        o.appendChild(l);
                        u = t.defaultView;
                        i = u.getComputedStyle && u.getComputedStyle(l, null).WebkitAppearance !== "textfield" && l.offsetHeight !== 0;
                        o.removeChild(l)
                    } else if (/^(search|tel)$/.test(s)) {
                    } else if (/^(url|email)$/.test(s)) {
                        i = l.checkValidity && l.checkValidity() === false
                    } else {
                        i = l.value != c
                    }
                }
                b[e[r]] = !!i
            }
            return b
        }("search tel url email datetime date month week time datetime-local number range color".split(" "))
    }

    var r = "2.8.3", i = {}, s = true, o = t.documentElement, u = "modernizr", a = t.createElement(u), f = a.style, l = t.createElement("input"), c = ":)", h = {}.toString, p = " -webkit- -moz- -o- -ms- ".split(" "), d = "Webkit Moz O ms", v = d.split(" "), m = d.toLowerCase().split(" "), g = {svg: "http://www.w3.org/2000/svg"}, y = {}, b = {}, w = {}, E = [], S = E.slice, x, T = function (e, n, r, i) {
        var s, a, f, l, c = t.createElement("div"), h = t.body, p = h || t.createElement("body");
        if (parseInt(r, 10)) {
            while (r--) {
                f = t.createElement("div");
                f.id = i ? i[r] : u + (r + 1);
                c.appendChild(f)
            }
        }
        s = ["&#173;", '<style id="s', u, '">', e, "</style>"].join("");
        c.id = u;
        (h ? c : p).innerHTML += s;
        p.appendChild(c);
        if (!h) {
            p.style.background = "";
            p.style.overflow = "hidden";
            l = o.style.overflow;
            o.style.overflow = "hidden";
            o.appendChild(p)
        }
        a = n(c, e);
        if (!h) {
            p.parentNode.removeChild(p);
            o.style.overflow = l
        } else {
            c.parentNode.removeChild(c)
        }
        return !!a
    }, N = function (t) {
        var n = e.matchMedia || e.msMatchMedia;
        if (n) {
            return n(t) && n(t).matches || false
        }
        var r;
        T("@media " + t + " { #" + u + " { position: absolute; } }", function (t) {
            r = (e.getComputedStyle ? getComputedStyle(t, null) : t.currentStyle)["position"] == "absolute"
        });
        return r
    }, C = function () {
        function r(r, i) {
            i = i || t.createElement(e[r] || "div");
            r = "on" + r;
            var s = r in i;
            if (!s) {
                if (!i.setAttribute) {
                    i = t.createElement("div")
                }
                if (i.setAttribute && i.removeAttribute) {
                    i.setAttribute(r, "");
                    s = M(i[r], "function");
                    if (!M(i[r], "undefined")) {
                        i[r] = n
                    }
                    i.removeAttribute(r)
                }
            }
            i = null;
            return s
        }

        var e = {
            select: "input",
            change: "input",
            submit: "form",
            reset: "form",
            error: "img",
            load: "img",
            abort: "img"
        };
        return r
    }(), k = {}.hasOwnProperty, L;
    if (!M(k, "undefined") && !M(k.call, "undefined")) {
        L = function (e, t) {
            return k.call(e, t)
        }
    } else {
        L = function (e, t) {
            return t in e && M(e.constructor.prototype[t], "undefined")
        }
    }
    if (!Function.prototype.bind) {
        Function.prototype.bind = function (t) {
            var n = this;
            if (typeof n != "function") {
                throw new TypeError
            }
            var r = S.call(arguments, 1), i = function () {
                if (this instanceof i) {
                    var e = function () {
                    };
                    e.prototype = n.prototype;
                    var s = new e;
                    var o = n.apply(s, r.concat(S.call(arguments)));
                    if (Object(o) === o) {
                        return o
                    }
                    return s
                } else {
                    return n.apply(t, r.concat(S.call(arguments)))
                }
            };
            return i
        }
    }
    y["flexbox"] = function () {
        return H("flexWrap")
    };
    y["flexboxlegacy"] = function () {
        return H("boxDirection")
    };
    y["canvas"] = function () {
        var e = t.createElement("canvas");
        return !!(e.getContext && e.getContext("2d"))
    };
    y["canvastext"] = function () {
        return !!(i["canvas"] && M(t.createElement("canvas").getContext("2d").fillText, "function"))
    };
    y["webgl"] = function () {
        return !!e.WebGLRenderingContext
    };
    y["touch"] = function () {
        var n;
        if ("ontouchstart"in e || e.DocumentTouch && t instanceof DocumentTouch) {
            n = true
        } else {
            T(["@media (", p.join("touch-enabled),("), u, ")", "{#modernizr{top:9px;position:absolute}}"].join(""), function (e) {
                n = e.offsetTop === 9
            })
        }
        return n
    };
    y["geolocation"] = function () {
        return "geolocation"in navigator
    };
    y["postmessage"] = function () {
        return !!e.postMessage
    };
    y["websqldatabase"] = function () {
        return !!e.openDatabase
    };
    y["indexedDB"] = function () {
        return !!H("indexedDB", e)
    };
    y["hashchange"] = function () {
        return C("hashchange", e) && (t.documentMode === n || t.documentMode > 7)
    };
    y["history"] = function () {
        return !!(e.history && history.pushState)
    };
    y["draganddrop"] = function () {
        var e = t.createElement("div");
        return "draggable"in e || "ondragstart"in e && "ondrop"in e
    };
    y["websockets"] = function () {
        return "WebSocket"in e || "MozWebSocket"in e
    };
    y["rgba"] = function () {
        A("background-color:rgba(150,255,150,.5)");
        return _(f.backgroundColor, "rgba")
    };
    y["hsla"] = function () {
        A("background-color:hsla(120,40%,100%,.5)");
        return _(f.backgroundColor, "rgba") || _(f.backgroundColor, "hsla")
    };
    y["multiplebgs"] = function () {
        A("background:url(https://),url(https://),red url(https://)");
        return /(url\s*\(.*?){3}/.test(f.background)
    };
    y["backgroundsize"] = function () {
        return H("backgroundSize")
    };
    y["borderimage"] = function () {
        return H("borderImage")
    };
    y["borderradius"] = function () {
        return H("borderRadius")
    };
    y["boxshadow"] = function () {
        return H("boxShadow")
    };
    y["textshadow"] = function () {
        return t.createElement("div").style.textShadow === ""
    };
    y["opacity"] = function () {
        O("opacity:.55");
        return /^0.55$/.test(f.opacity)
    };
    y["cssanimations"] = function () {
        return H("animationName")
    };
    y["csscolumns"] = function () {
        return H("columnCount")
    };
    y["cssgradients"] = function () {
        var e = "background-image:", t = "gradient(linear,left top,right bottom,from(#9f9),to(white));", n = "linear-gradient(left top,#9f9, white);";
        A((e + "-webkit- ".split(" ").join(t + e) + p.join(n + e)).slice(0, -e.length));
        return _(f.backgroundImage, "gradient")
    };
    y["cssreflections"] = function () {
        return H("boxReflect")
    };
    y["csstransforms"] = function () {
        return !!H("transform")
    };
    y["csstransforms3d"] = function () {
        var e = !!H("perspective");
        if (e && "webkitPerspective"in o.style) {
            T("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}", function (t, n) {
                e = t.offsetLeft === 9 && t.offsetHeight === 3
            })
        }
        return e
    };
    y["csstransitions"] = function () {
        return H("transition")
    };
    y["fontface"] = function () {
        var e;
        T('@font-face {font-family:"font";src:url("https://")}', function (n, r) {
            var i = t.getElementById("smodernizr"), s = i.sheet || i.styleSheet, o = s ? s.cssRules && s.cssRules[0] ? s.cssRules[0].cssText : s.cssText || "" : "";
            e = /src/i.test(o) && o.indexOf(r.split(" ")[0]) === 0
        });
        return e
    };
    y["generatedcontent"] = function () {
        var e;
        T(["#", u, "{font:0/0 a}#", u, ':after{content:"', c, '";visibility:hidden;font:3px/1 a}'].join(""), function (t) {
            e = t.offsetHeight >= 3
        });
        return e
    };
    y["video"] = function () {
        var e = t.createElement("video"), n = false;
        try {
            if (n = !!e.canPlayType) {
                n = new Boolean(n);
                n.ogg = e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, "");
                n.h264 = e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, "");
                n.webm = e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, "")
            }
        } catch (r) {
        }
        return n
    };
    y["audio"] = function () {
        var e = t.createElement("audio"), n = false;
        try {
            if (n = !!e.canPlayType) {
                n = new Boolean(n);
                n.ogg = e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/, "");
                n.mp3 = e.canPlayType("audio/mpeg;").replace(/^no$/, "");
                n.wav = e.canPlayType('audio/wav; codecs="1"').replace(/^no$/, "");
                n.m4a = (e.canPlayType("audio/x-m4a;") || e.canPlayType("audio/aac;")).replace(/^no$/, "")
            }
        } catch (r) {
        }
        return n
    };
    y["localstorage"] = function () {
        try {
            localStorage.setItem(u, u);
            localStorage.removeItem(u);
            return true
        } catch (e) {
            return false
        }
    };
    y["sessionstorage"] = function () {
        try {
            sessionStorage.setItem(u, u);
            sessionStorage.removeItem(u);
            return true
        } catch (e) {
            return false
        }
    };
    y["webworkers"] = function () {
        return !!e.Worker
    };
    y["applicationcache"] = function () {
        return !!e.applicationCache
    };
    y["svg"] = function () {
        return !!t.createElementNS && !!t.createElementNS(g.svg, "svg").createSVGRect
    };
    y["inlinesvg"] = function () {
        var e = t.createElement("div");
        e.innerHTML = "<svg/>";
        return (e.firstChild && e.firstChild.namespaceURI) == g.svg
    };
    y["smil"] = function () {
        return !!t.createElementNS && /SVGAnimate/.test(h.call(t.createElementNS(g.svg, "animate")))
    };
    y["svgclippaths"] = function () {
        return !!t.createElementNS && /SVGClipPath/.test(h.call(t.createElementNS(g.svg, "clipPath")))
    };
    for (var j in y) {
        if (L(y, j)) {
            x = j.toLowerCase();
            i[x] = y[j]();
            E.push((i[x] ? "" : "no-") + x)
        }
    }
    i.input || B();
    i.addTest = function (e, t) {
        if (typeof e == "object") {
            for (var r in e) {
                if (L(e, r)) {
                    i.addTest(r, e[r])
                }
            }
        } else {
            e = e.toLowerCase();
            if (i[e] !== n) {
                return i
            }
            t = typeof t == "function" ? t() : t;
            if (typeof s !== "undefined" && s) {
                o.className += " " + (t ? "" : "no-") + e
            }
            i[e] = t
        }
        return i
    };
    A("");
    a = l = null;
    (function (e, t) {
        function c(e, t) {
            var n = e.createElement("p"), r = e.getElementsByTagName("head")[0] || e.documentElement;
            n.innerHTML = "x<style>" + t + "</style>";
            return r.insertBefore(n.lastChild, r.firstChild)
        }

        function h() {
            var e = y.elements;
            return typeof e == "string" ? e.split(" ") : e
        }

        function p(e) {
            var t = f[e[u]];
            if (!t) {
                t = {};
                a++;
                e[u] = a;
                f[a] = t
            }
            return t
        }

        function d(e, n, r) {
            if (!n) {
                n = t
            }
            if (l) {
                return n.createElement(e)
            }
            if (!r) {
                r = p(n)
            }
            var o;
            if (r.cache[e]) {
                o = r.cache[e].cloneNode()
            } else if (s.test(e)) {
                o = (r.cache[e] = r.createElem(e)).cloneNode()
            } else {
                o = r.createElem(e)
            }
            return o.canHaveChildren && !i.test(e) && !o.tagUrn ? r.frag.appendChild(o) : o
        }

        function v(e, n) {
            if (!e) {
                e = t
            }
            if (l) {
                return e.createDocumentFragment()
            }
            n = n || p(e);
            var r = n.frag.cloneNode(), i = 0, s = h(), o = s.length;
            for (; i < o; i++) {
                r.createElement(s[i])
            }
            return r
        }

        function m(e, t) {
            if (!t.cache) {
                t.cache = {};
                t.createElem = e.createElement;
                t.createFrag = e.createDocumentFragment;
                t.frag = t.createFrag()
            }
            e.createElement = function (n) {
                if (!y.shivMethods) {
                    return t.createElem(n)
                }
                return d(n, e, t)
            };
            e.createDocumentFragment = Function("h,f", "return function(){" + "var n=f.cloneNode(),c=n.createElement;" + "h.shivMethods&&(" + h().join().replace(/[\w\-]+/g, function (e) {
                t.createElem(e);
                t.frag.createElement(e);
                return 'c("' + e + '")'
            }) + ");return n}")(y, t.frag)
        }

        function g(e) {
            if (!e) {
                e = t
            }
            var n = p(e);
            if (y.shivCSS && !o && !n.hasCSS) {
                n.hasCSS = !!c(e, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}" + "mark{background:#FF0;color:#000}" + "template{display:none}")
            }
            if (!l) {
                m(e, n)
            }
            return e
        }

        var n = "3.7.0";
        var r = e.html5 || {};
        var i = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i;
        var s = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i;
        var o;
        var u = "_html5shiv";
        var a = 0;
        var f = {};
        var l;
        (function () {
            try {
                var e = t.createElement("a");
                e.innerHTML = "<xyz></xyz>";
                o = "hidden"in e;
                l = e.childNodes.length == 1 || function () {
                    t.createElement("a");
                    var e = t.createDocumentFragment();
                    return typeof e.cloneNode == "undefined" || typeof e.createDocumentFragment == "undefined" || typeof e.createElement == "undefined"
                }()
            } catch (n) {
                o = true;
                l = true
            }
        })();
        var y = {
            elements: r.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",
            version: n,
            shivCSS: r.shivCSS !== false,
            supportsUnknownElements: l,
            shivMethods: r.shivMethods !== false,
            type: "default",
            shivDocument: g,
            createElement: d,
            createDocumentFragment: v
        };
        e.html5 = y;
        g(t)
    })(this, t);
    i._version = r;
    i._prefixes = p;
    i._domPrefixes = m;
    i._cssomPrefixes = v;
    i.mq = N;
    i.hasEvent = C;
    i.testProp = function (e) {
        return D([e])
    };
    i.testAllProps = H;
    i.testStyles = T;
    i.prefixed = function (e, t, n) {
        if (!t) {
            return H(e, "pfx")
        } else {
            return H(e, t, n)
        }
    };
    o.className = o.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (s ? " js " + E.join(" ") : "");
    return i
}(this, this.document)