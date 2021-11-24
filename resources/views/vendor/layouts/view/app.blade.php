<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name', 'Blogger') }}</title>

            {{--  <script>
                (function () {
                    var html5 = (
                        "abbr,article,aside,audio,canvas,datalist,details," +
                        "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
                        "progress,section,time,video"
                    ).split(",");
                    for (var i = 0; i < html5.length; i++) {
                        document.createElement(html5[i]);
                    }
                    try {
                        document.execCommand("BackgroundImageCache", false, true);
                    } catch (e) {}
                })();
            </script>

            <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "WebSite",
                    "name": "Sora Times",
                    "url": "https://sora-times-soratemplates.blogspot.com/",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "https://sora-times-soratemplates.blogspot.com/search?q={search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                }
            </script>  --}}

        <!-- Fonts -->
            {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
            <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700|Playfair+Display:400,500,600,700" media="all"
                rel="stylesheet" type="text/css" />

        <!-- Styles -->

            <!-- Font Awesome Icons -->
            <link href="{{ asset('sora/css/font-awesome/4-7-0/css/font-awesome.min.css') }}" rel="stylesheet" />
            <link href="{{ asset('sora/css/skin.css') }}" rel="stylesheet">
            <link href="{{ asset('sora/css/typography.css') }}" rel="stylesheet">
            @stack('css')
            <script type="text/javascript"> //<![CDATA[
                // Global variables with content. "Available for Edit"
                var monthFormat=[ "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
                ],
                noThumbnail="public/images/nth.png",
                postPerPage=7,
                fixedSidebar=true,
                commentsSystem="blogger",
                disqusShortname="soratemplates";

                //]]>
            </script>

    </head>
    <body class="index home">

        <div class="theme-options"style="display: none;">
            <div class="sora-panel section" id="sora-panel" name="Theme Options">
                <div class="widget LinkList" data-version="2" id="LinkList70">
                    <style type="text/css">#outer-wrapper {
                        max-width: none;
                    }
                    </style>
                </div>
                <div class="widget LinkList" data-version="2" id="LinkList71">

                    <script type="text/javascript"> //<![CDATA[
                        var disqusShortname="soratemplates";
                        var commentsSystem="blogger";
                        var fixedSidebar=true;
                        var postPerPage=5;
                        //]]>
                    </script>
                </div>
            </div>
        </div>

        <div id="outer-wrapper">
            <div id="header-wrap">
                <div class="header-header">
                    <div class="container row">
                        <div class="header-logo section"id="header-logo"name="Header Logo">
                            <div class="widget Header" data-version="2" id="Header1">
                                <div class="header-widget">
                                    <a class="header-image-wrapper" href="#">
                                        <img alt="Sora Times" data-height="90" data-width="352" src="{{ asset('sora/images/sora-times.png') }}"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-header">
                    <span class="slide-menu-toggle"></span>
                    <span class="show-mobile-search"></span>
                    <form action="#" class="mobile-search-form" role="search">
                        <input class="mobile-search-input" name="q" placeholder="Search this blog" type="search" value=""/>
                        <span class="hide-mobile-search"></span>
                    </form>
                    <div class="mobile-menu"></div>
                </div>
                <div class="header-menu">
                    <div class="container row">
                        <div class="main-menu section" id="main-menu" name="Main Menu">
                            <div class="widget LinkList" data-version="2"  {{-- id="LinkList74"  --}}>
                                <ul id="main-menu-nav" role="menubar">
                                    <li><a href="#" role="menuitem">Home</a></li>
                                    <li><a href="#" role="menuitem">Features</a></li>
                                    <li><a href="#" role="menuitem">_Multi DropDown</a></li>
                                    <li><a href="#" role="menuitem">__DropDown 1</a></li>
                                    <li><a href="#" role="menuitem">__DropDown 2</a></li>
                                    <li><a href="#" role="menuitem">__DropDown 3</a></li>
                                    <li><a href="#" role="menuitem">_ShortCodes</a></li>
                                    <li><a href="#" role="menuitem">_SiteMap</a></li>
                                    <li><a href="#" role="menuitem">_Error Page</a></li>
                                    <li><a href="#" role="menuitem">Mega Menu</a></li>
                                    <li><a href="#" role="menuitem">Learn Blogging</a></li>
                                    <li><a href="#" role="menuitem">Documentation</a></li>
                                    <li><a href="#" role="menuitem">_Web Documentation</a></li>
                                    <li><a href="#" role="menuitem">_Video Documentation</a></li>
                                    <li><a href="#" role="menuitem">Download This Template</a></li>
                                </ul>
                            </div>
                        </div>

                        <div id="nav-search">
                            <form action="#" class="search-form" role="search">
                                <input autocomplete="off" class="search-input"name="q" placeholder="Search this blog" type="search"value=""/>
                                <span class="hide-search"></span>
                            </form>
                        </div>
                        <span class="show-search"></span>
                    </div>

            </div>
        </div>
        
        <div class="clearfix"></div>

        <div>
            @yield('header')
        </div>

        <div class="clearfix"></div>
        <div class="row" id="content-wrapper" style="transform: none;">
            <div class="container" style="transform: none;">
                <!-- Main Wrapper -->
                <div id="main-wrapper" style=" position: relative; overflow: visible; box-sizing: border-box; min-height: 1px; ">
                    @yield('content')
                </div>
                <!-- Sidebar Wrapper -->
                <div id="sidebar-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1;">
                    <!-- --------------------------- Sidebar ---------------------------------------- -->

                        @include('layouts.view.partial.sidebar.sidebar')

                    <!-- -------------x------------- Sidebar --------------------x------------------- -->
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <!-- Footer Wrapper -->

        <div id='footer-wrapper'>
            <!-- --------------------------- Footer ---------------------------------------- -->
                @include('layouts.view.partial.footer.footer')
            <!-- -------------x------------- Footer --------------------x------------------- -->
        </div>


        <!-- Scripts -->

        <script src="{{ asset('sora/js/jquery.min.js') }}" type="text/javascript"></script>

        <script type="text/javascript">
            //<![CDATA[
            /*! Slick.js | v1.8.0 - https://kenwheeler.github.io/slick */
            !(function (i) {
                "use strict";
                "function" == typeof define && define.amd ?
                    define(["jquery"], i) :
                    "undefined" != typeof exports ?
                    (module.exports = i(require("jquery"))) :
                    i(jQuery);
            })(function (i) {
                "use strict";
                var e = window.Slick || {};
                ((e = (function () {
                    var e = 0;
                    return function (t, o) {
                        var s,
                            n = this;
                        (n.defaults = {
                            accessibility: !0,
                            adaptiveHeight: !1,
                            appendArrows: i(t),
                            appendDots: i(t),
                            arrows: !0,
                            asNavFor: null,
                            prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
                            nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
                            autoplay: !1,
                            autoplaySpeed: 3e3,
                            centerMode: !1,
                            centerPadding: "50px",
                            cssEase: "ease",
                            customPaging: function (e, t) {
                                return i('<button type="button" />').text(t + 1);
                            },
                            dots: !1,
                            dotsClass: "slick-dots",
                            draggable: !0,
                            easing: "linear",
                            edgeFriction: 0.35,
                            fade: !1,
                            focusOnSelect: !1,
                            focusOnChange: !1,
                            infinite: !0,
                            initialSlide: 0,
                            lazyLoad: "ondemand",
                            mobileFirst: !1,
                            pauseOnHover: !0,
                            pauseOnFocus: !0,
                            pauseOnDotsHover: !1,
                            respondTo: "window",
                            responsive: null,
                            rows: 1,
                            rtl: !1,
                            slide: "",
                            slidesPerRow: 1,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            speed: 500,
                            swipe: !0,
                            swipeToSlide: !1,
                            touchMove: !0,
                            touchThreshold: 5,
                            useCSS: !0,
                            useTransform: !0,
                            variableWidth: !1,
                            vertical: !1,
                            verticalSwiping: !1,
                            waitForAnimate: !0,
                            zIndex: 1e3,
                        }),
                        (n.initials = {
                            animating: !1,
                            dragging: !1,
                            autoPlayTimer: null,
                            currentDirection: 0,
                            currentLeft: null,
                            currentSlide: 0,
                            direction: 1,
                            $dots: null,
                            listWidth: null,
                            listHeight: null,
                            loadIndex: 0,
                            $nextArrow: null,
                            $prevArrow: null,
                            scrolling: !1,
                            slideCount: null,
                            slideWidth: null,
                            $slideTrack: null,
                            $slides: null,
                            sliding: !1,
                            slideOffset: 0,
                            swipeLeft: null,
                            swiping: !1,
                            $list: null,
                            touchObject: {},
                            transformsEnabled: !1,
                            unslicked: !1,
                        }),
                        i.extend(n, n.initials),
                            (n.activeBreakpoint = null),
                            (n.animType = null),
                            (n.animProp = null),
                            (n.breakpoints = []),
                            (n.breakpointSettings = []),
                            (n.cssTransitions = !1),
                            (n.focussed = !1),
                            (n.interrupted = !1),
                            (n.hidden = "hidden"),
                            (n.paused = !0),
                            (n.positionProp = null),
                            (n.respondTo = null),
                            (n.rowCount = 1),
                            (n.shouldClick = !0),
                            (n.$slider = i(t)),
                            (n.$slidesCache = null),
                            (n.transformType = null),
                            (n.transitionType = null),
                            (n.visibilityChange = "visibilitychange"),
                            (n.windowWidth = 0),
                            (n.windowTimer = null),
                            (s = i(t).data("slick") || {}),
                            (n.options = i.extend({}, n.defaults, o, s)),
                            (n.currentSlide = n.options.initialSlide),
                            (n.originalSettings = n.options),
                            void 0 !== document.mozHidden ?
                            ((n.hidden = "mozHidden"),
                                (n.visibilityChange = "mozvisibilitychange")) :
                            void 0 !== document.webkitHidden &&
                            ((n.hidden = "webkitHidden"),
                                (n.visibilityChange = "webkitvisibilitychange")),
                            (n.autoPlay = i.proxy(n.autoPlay, n)),
                            (n.autoPlayClear = i.proxy(n.autoPlayClear, n)),
                            (n.autoPlayIterator = i.proxy(n.autoPlayIterator, n)),
                            (n.changeSlide = i.proxy(n.changeSlide, n)),
                            (n.clickHandler = i.proxy(n.clickHandler, n)),
                            (n.selectHandler = i.proxy(n.selectHandler, n)),
                            (n.setPosition = i.proxy(n.setPosition, n)),
                            (n.swipeHandler = i.proxy(n.swipeHandler, n)),
                            (n.dragHandler = i.proxy(n.dragHandler, n)),
                            (n.keyHandler = i.proxy(n.keyHandler, n)),
                            (n.instanceUid = e++),
                            (n.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/),
                            n.registerBreakpoints(),
                            n.init(!0);
                    };
                })()).prototype.activateADA = function () {
                    this.$slideTrack
                        .find(".slick-active")
                        .attr({
                            "aria-hidden": "false",
                        })
                        .find("a, input, button, select")
                        .attr({
                            tabindex: "0",
                        });
                }),
                (e.prototype.addSlide = e.prototype.slickAdd = function (e, t, o) {
                    var s = this;
                    if ("boolean" == typeof t)(o = t), (t = null);
                    else if (t < 0 || t >= s.slideCount) return !1;
                    s.unload(),
                        "number" == typeof t ?
                        0 === t && 0 === s.$slides.length ?
                        i(e).appendTo(s.$slideTrack) :
                        o ?
                        i(e).insertBefore(s.$slides.eq(t)) :
                        i(e).insertAfter(s.$slides.eq(t)) :
                        !0 === o ?
                        i(e).prependTo(s.$slideTrack) :
                        i(e).appendTo(s.$slideTrack),
                        (s.$slides = s.$slideTrack.children(this.options.slide)),
                        s.$slideTrack.children(this.options.slide).detach(),
                        s.$slideTrack.append(s.$slides),
                        s.$slides.each(function (e, t) {
                            i(t).attr("data-slick-index", e);
                        }),
                        (s.$slidesCache = s.$slides),
                        s.reinit();
                }),
                (e.prototype.animateHeight = function () {
                    var i = this;
                    if (
                        1 === i.options.slidesToShow &&
                        !0 === i.options.adaptiveHeight &&
                        !1 === i.options.vertical
                    ) {
                        var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
                        i.$list.animate({
                                height: e,
                            },
                            i.options.speed
                        );
                    }
                }),
                (e.prototype.animateSlide = function (e, t) {
                    var o = {},
                        s = this;
                    s.animateHeight(),
                        !0 === s.options.rtl && !1 === s.options.vertical && (e = -e),
                        !1 === s.transformsEnabled ?
                        !1 === s.options.vertical ?
                        s.$slideTrack.animate({
                                left: e,
                            },
                            s.options.speed,
                            s.options.easing,
                            t
                        ) :
                        s.$slideTrack.animate({
                                top: e,
                            },
                            s.options.speed,
                            s.options.easing,
                            t
                        ) :
                        !1 === s.cssTransitions ?
                        (!0 === s.options.rtl && (s.currentLeft = -s.currentLeft),
                            i({
                                animStart: s.currentLeft,
                            }).animate({
                                animStart: e,
                            }, {
                                duration: s.options.speed,
                                easing: s.options.easing,
                                step: function (i) {
                                    (i = Math.ceil(i)),
                                    !1 === s.options.vertical ?
                                        ((o[s.animType] = "translate(" + i + "px, 0px)"),
                                            s.$slideTrack.css(o)) :
                                        ((o[s.animType] = "translate(0px," + i + "px)"),
                                            s.$slideTrack.css(o));
                                },
                                complete: function () {
                                    t && t.call();
                                },
                            })) :
                        (s.applyTransition(),
                            (e = Math.ceil(e)),
                            !1 === s.options.vertical ?
                            (o[s.animType] = "translate3d(" + e + "px, 0px, 0px)") :
                            (o[s.animType] = "translate3d(0px," + e + "px, 0px)"),
                            s.$slideTrack.css(o),
                            t &&
                            setTimeout(function () {
                                s.disableTransition(), t.call();
                            }, s.options.speed));
                }),
                (e.prototype.getNavTarget = function () {
                    var e = this,
                        t = e.options.asNavFor;
                    return t && null !== t && (t = i(t).not(e.$slider)), t;
                }),
                (e.prototype.asNavFor = function (e) {
                    var t = this.getNavTarget();
                    null !== t &&
                        "object" == typeof t &&
                        t.each(function () {
                            var t = i(this).slick("getSlick");
                            t.unslicked || t.slideHandler(e, !0);
                        });
                }),
                (e.prototype.applyTransition = function (i) {
                    var e = this,
                        t = {};
                    !1 === e.options.fade ?
                        (t[e.transitionType] =
                            e.transformType +
                            " " +
                            e.options.speed +
                            "ms " +
                            e.options.cssEase) :
                        (t[e.transitionType] =
                            "opacity " + e.options.speed + "ms " + e.options.cssEase),
                        !1 === e.options.fade ?
                        e.$slideTrack.css(t) :
                        e.$slides.eq(i).css(t);
                }),
                (e.prototype.autoPlay = function () {
                    var i = this;
                    i.autoPlayClear(),
                        i.slideCount > i.options.slidesToShow &&
                        (i.autoPlayTimer = setInterval(
                            i.autoPlayIterator,
                            i.options.autoplaySpeed
                        ));
                }),
                (e.prototype.autoPlayClear = function () {
                    var i = this;
                    i.autoPlayTimer && clearInterval(i.autoPlayTimer);
                }),
                (e.prototype.autoPlayIterator = function () {
                    var i = this,
                        e = i.currentSlide + i.options.slidesToScroll;
                    i.paused ||
                        i.interrupted ||
                        i.focussed ||
                        (!1 === i.options.infinite &&
                            (1 === i.direction && i.currentSlide + 1 === i.slideCount - 1 ?
                                (i.direction = 0) :
                                0 === i.direction &&
                                ((e = i.currentSlide - i.options.slidesToScroll),
                                    i.currentSlide - 1 == 0 && (i.direction = 1))),
                            i.slideHandler(e));
                }),
                (e.prototype.buildArrows = function () {
                    var e = this;
                    !0 === e.options.arrows &&
                        ((e.$prevArrow = i(e.options.prevArrow).addClass("slick-arrow")),
                            (e.$nextArrow = i(e.options.nextArrow).addClass("slick-arrow")),
                            e.slideCount > e.options.slidesToShow ?
                            (e.$prevArrow
                                .removeClass("slick-hidden")
                                .removeAttr("aria-hidden tabindex"),
                                e.$nextArrow
                                .removeClass("slick-hidden")
                                .removeAttr("aria-hidden tabindex"),
                                e.htmlExpr.test(e.options.prevArrow) &&
                                e.$prevArrow.prependTo(e.options.appendArrows),
                                e.htmlExpr.test(e.options.nextArrow) &&
                                e.$nextArrow.appendTo(e.options.appendArrows),
                                !0 !== e.options.infinite &&
                                e.$prevArrow
                                .addClass("slick-disabled")
                                .attr("aria-disabled", "true")) :
                            e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({
                                "aria-disabled": "true",
                                tabindex: "-1",
                            }));
                }),
                (e.prototype.buildDots = function () {
                    var e,
                        t,
                        o = this;
                    if (!0 === o.options.dots) {
                        for (
                            o.$slider.addClass("slick-dotted"),
                            t = i("<ul />").addClass(o.options.dotsClass),
                            e = 0; e <= o.getDotCount(); e += 1
                        )
                            t.append(
                                i("<li />").append(o.options.customPaging.call(this, o, e))
                            );
                        (o.$dots = t.appendTo(o.options.appendDots)),
                        o.$dots.find("li").first().addClass("slick-active");
                    }
                }),
                (e.prototype.buildOut = function () {
                    var e = this;
                    (e.$slides = e.$slider
                        .children(e.options.slide + ":not(.slick-cloned)")
                        .addClass("slick-slide")),
                    (e.slideCount = e.$slides.length),
                    e.$slides.each(function (e, t) {
                            i(t)
                                .attr("data-slick-index", e)
                                .data("originalStyling", i(t).attr("style") || "");
                        }),
                        e.$slider.addClass("slick-slider"),
                        (e.$slideTrack =
                            0 === e.slideCount ?
                            i('<div class="slick-track"/>').appendTo(e.$slider) :
                            e.$slides.wrapAll('<div class="slick-track"/>').parent()),
                        (e.$list = e.$slideTrack
                            .wrap('<div class="slick-list"/>')
                            .parent()),
                        e.$slideTrack.css("opacity", 0),
                        (!0 !== e.options.centerMode && !0 !== e.options.swipeToSlide) ||
                        (e.options.slidesToScroll = 1),
                        i("img[data-lazy]", e.$slider)
                        .not("[src]")
                        .addClass("slick-loading"),
                        e.setupInfinite(),
                        e.buildArrows(),
                        e.buildDots(),
                        e.updateDots(),
                        e.setSlideClasses(
                            "number" == typeof e.currentSlide ? e.currentSlide : 0
                        ),
                        !0 === e.options.draggable && e.$list.addClass("draggable");
                }),
                (e.prototype.buildRows = function () {
                    var i,
                        e,
                        t,
                        o,
                        s,
                        n,
                        r,
                        l = this;
                    if (
                        ((o = document.createDocumentFragment()),
                            (n = l.$slider.children()),
                            l.options.rows > 1)
                    ) {
                        for (
                            r = l.options.slidesPerRow * l.options.rows,
                            s = Math.ceil(n.length / r),
                            i = 0; i < s; i++
                        ) {
                            var d = document.createElement("div");
                            for (e = 0; e < l.options.rows; e++) {
                                var a = document.createElement("div");
                                for (t = 0; t < l.options.slidesPerRow; t++) {
                                    var c = i * r + (e * l.options.slidesPerRow + t);
                                    n.get(c) && a.appendChild(n.get(c));
                                }
                                d.appendChild(a);
                            }
                            o.appendChild(d);
                        }
                        l.$slider.empty().append(o),
                            l.$slider
                            .children()
                            .children()
                            .children()
                            .css({
                                width: 100 / l.options.slidesPerRow + "%",
                                display: "inline-block",
                            });
                    }
                }),
                (e.prototype.checkResponsive = function (e, t) {
                    var o,
                        s,
                        n,
                        r = this,
                        l = !1,
                        d = r.$slider.width(),
                        a = window.innerWidth || i(window).width();
                    if (
                        ("window" === r.respondTo ?
                            (n = a) :
                            "slider" === r.respondTo ?
                            (n = d) :
                            "min" === r.respondTo && (n = Math.min(a, d)),
                            r.options.responsive &&
                            r.options.responsive.length &&
                            null !== r.options.responsive)
                    ) {
                        s = null;
                        for (o in r.breakpoints)
                            r.breakpoints.hasOwnProperty(o) &&
                            (!1 === r.originalSettings.mobileFirst ?
                                n < r.breakpoints[o] && (s = r.breakpoints[o]) :
                                n > r.breakpoints[o] && (s = r.breakpoints[o]));
                        null !== s ?
                            null !== r.activeBreakpoint ?
                            (s !== r.activeBreakpoint || t) &&
                            ((r.activeBreakpoint = s),
                                "unslick" === r.breakpointSettings[s] ?
                                r.unslick(s) :
                                ((r.options = i.extend({},
                                        r.originalSettings,
                                        r.breakpointSettings[s]
                                    )),
                                    !0 === e && (r.currentSlide = r.options.initialSlide),
                                    r.refresh(e)),
                                (l = s)) :
                            ((r.activeBreakpoint = s),
                                "unslick" === r.breakpointSettings[s] ?
                                r.unslick(s) :
                                ((r.options = i.extend({},
                                        r.originalSettings,
                                        r.breakpointSettings[s]
                                    )),
                                    !0 === e && (r.currentSlide = r.options.initialSlide),
                                    r.refresh(e)),
                                (l = s)) :
                            null !== r.activeBreakpoint &&
                            ((r.activeBreakpoint = null),
                                (r.options = r.originalSettings),
                                !0 === e && (r.currentSlide = r.options.initialSlide),
                                r.refresh(e),
                                (l = s)),
                            e || !1 === l || r.$slider.trigger("breakpoint", [r, l]);
                    }
                }),
                (e.prototype.changeSlide = function (e, t) {
                    var o,
                        s,
                        n,
                        r = this,
                        l = i(e.currentTarget);
                    switch (
                        (l.is("a") && e.preventDefault(),
                            l.is("li") || (l = l.closest("li")),
                            (n = r.slideCount % r.options.slidesToScroll != 0),
                            (o = n ?
                                0 :
                                (r.slideCount - r.currentSlide) % r.options.slidesToScroll),
                            e.data.message)
                    ) {
                        case "previous":
                            (s =
                                0 === o ?
                                r.options.slidesToScroll :
                                r.options.slidesToShow - o),
                            r.slideCount > r.options.slidesToShow &&
                                r.slideHandler(r.currentSlide - s, !1, t);
                            break;
                        case "next":
                            (s = 0 === o ? r.options.slidesToScroll : o),
                            r.slideCount > r.options.slidesToShow &&
                                r.slideHandler(r.currentSlide + s, !1, t);
                            break;
                        case "index":
                            var d =
                                0 === e.data.index ?
                                0 :
                                e.data.index || l.index() * r.options.slidesToScroll;
                            r.slideHandler(r.checkNavigable(d), !1, t),
                                l.children().trigger("focus");
                            break;
                        default:
                            return;
                    }
                }),
                (e.prototype.checkNavigable = function (i) {
                    var e, t;
                    if (
                        ((e = this.getNavigableIndexes()), (t = 0), i > e[e.length - 1])
                    )
                        i = e[e.length - 1];
                    else
                        for (var o in e) {
                            if (i < e[o]) {
                                i = t;
                                break;
                            }
                            t = e[o];
                        }
                    return i;
                }),
                (e.prototype.cleanUpEvents = function () {
                    var e = this;
                    e.options.dots &&
                        null !== e.$dots &&
                        (i("li", e.$dots)
                            .off("click.slick", e.changeSlide)
                            .off("mouseenter.slick", i.proxy(e.interrupt, e, !0))
                            .off("mouseleave.slick", i.proxy(e.interrupt, e, !1)),
                            !0 === e.options.accessibility &&
                            e.$dots.off("keydown.slick", e.keyHandler)),
                        e.$slider.off("focus.slick blur.slick"),
                        !0 === e.options.arrows &&
                        e.slideCount > e.options.slidesToShow &&
                        (e.$prevArrow && e.$prevArrow.off("click.slick", e.changeSlide),
                            e.$nextArrow && e.$nextArrow.off("click.slick", e.changeSlide),
                            !0 === e.options.accessibility &&
                            (e.$prevArrow &&
                                e.$prevArrow.off("keydown.slick", e.keyHandler),
                                e.$nextArrow &&
                                e.$nextArrow.off("keydown.slick", e.keyHandler))),
                        e.$list.off("touchstart.slick mousedown.slick", e.swipeHandler),
                        e.$list.off("touchmove.slick mousemove.slick", e.swipeHandler),
                        e.$list.off("touchend.slick mouseup.slick", e.swipeHandler),
                        e.$list.off("touchcancel.slick mouseleave.slick", e.swipeHandler),
                        e.$list.off("click.slick", e.clickHandler),
                        i(document).off(e.visibilityChange, e.visibility),
                        e.cleanUpSlideEvents(),
                        !0 === e.options.accessibility &&
                        e.$list.off("keydown.slick", e.keyHandler),
                        !0 === e.options.focusOnSelect &&
                        i(e.$slideTrack).children().off("click.slick", e.selectHandler),
                        i(window).off(
                            "orientationchange.slick.slick-" + e.instanceUid,
                            e.orientationChange
                        ),
                        i(window).off("resize.slick.slick-" + e.instanceUid, e.resize),
                        i("[draggable!=true]", e.$slideTrack).off(
                            "dragstart",
                            e.preventDefault
                        ),
                        i(window).off("load.slick.slick-" + e.instanceUid, e.setPosition);
                }),
                (e.prototype.cleanUpSlideEvents = function () {
                    var e = this;
                    e.$list.off("mouseenter.slick", i.proxy(e.interrupt, e, !0)),
                        e.$list.off("mouseleave.slick", i.proxy(e.interrupt, e, !1));
                }),
                (e.prototype.cleanUpRows = function () {
                    var i,
                        e = this;
                    e.options.rows > 1 &&
                        ((i = e.$slides.children().children()).removeAttr("style"),
                            e.$slider.empty().append(i));
                }),
                (e.prototype.clickHandler = function (i) {
                    !1 === this.shouldClick &&
                        (i.stopImmediatePropagation(),
                            i.stopPropagation(),
                            i.preventDefault());
                }),
                (e.prototype.destroy = function (e) {
                    var t = this;
                    t.autoPlayClear(),
                        (t.touchObject = {}),
                        t.cleanUpEvents(),
                        i(".slick-cloned", t.$slider).detach(),
                        t.$dots && t.$dots.remove(),
                        t.$prevArrow &&
                        t.$prevArrow.length &&
                        (t.$prevArrow
                            .removeClass("slick-disabled slick-arrow slick-hidden")
                            .removeAttr("aria-hidden aria-disabled tabindex")
                            .css("display", ""),
                            t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove()),
                        t.$nextArrow &&
                        t.$nextArrow.length &&
                        (t.$nextArrow
                            .removeClass("slick-disabled slick-arrow slick-hidden")
                            .removeAttr("aria-hidden aria-disabled tabindex")
                            .css("display", ""),
                            t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove()),
                        t.$slides &&
                        (t.$slides
                            .removeClass(
                                "slick-slide slick-active slick-center slick-visible slick-current"
                            )
                            .removeAttr("aria-hidden")
                            .removeAttr("data-slick-index")
                            .each(function () {
                                i(this).attr("style", i(this).data("originalStyling"));
                            }),
                            t.$slideTrack.children(this.options.slide).detach(),
                            t.$slideTrack.detach(),
                            t.$list.detach(),
                            t.$slider.append(t.$slides)),
                        t.cleanUpRows(),
                        t.$slider.removeClass("slick-slider"),
                        t.$slider.removeClass("slick-initialized"),
                        t.$slider.removeClass("slick-dotted"),
                        (t.unslicked = !0),
                        e || t.$slider.trigger("destroy", [t]);
                }),
                (e.prototype.disableTransition = function (i) {
                    var e = this,
                        t = {};
                    (t[e.transitionType] = ""),
                    !1 === e.options.fade ?
                        e.$slideTrack.css(t) :
                        e.$slides.eq(i).css(t);
                }),
                (e.prototype.fadeSlide = function (i, e) {
                    var t = this;
                    !1 === t.cssTransitions ?
                        (t.$slides.eq(i).css({
                                zIndex: t.options.zIndex,
                            }),
                            t.$slides.eq(i).animate({
                                    opacity: 1,
                                },
                                t.options.speed,
                                t.options.easing,
                                e
                            )) :
                        (t.applyTransition(i),
                            t.$slides.eq(i).css({
                                opacity: 1,
                                zIndex: t.options.zIndex,
                            }),
                            e &&
                            setTimeout(function () {
                                t.disableTransition(i), e.call();
                            }, t.options.speed));
                }),
                (e.prototype.fadeSlideOut = function (i) {
                    var e = this;
                    !1 === e.cssTransitions ?
                        e.$slides.eq(i).animate({
                                opacity: 0,
                                zIndex: e.options.zIndex - 2,
                            },
                            e.options.speed,
                            e.options.easing
                        ) :
                        (e.applyTransition(i),
                            e.$slides.eq(i).css({
                                opacity: 0,
                                zIndex: e.options.zIndex - 2,
                            }));
                }),
                (e.prototype.filterSlides = e.prototype.slickFilter = function (i) {
                    var e = this;
                    null !== i &&
                        ((e.$slidesCache = e.$slides),
                            e.unload(),
                            e.$slideTrack.children(this.options.slide).detach(),
                            e.$slidesCache.filter(i).appendTo(e.$slideTrack),
                            e.reinit());
                }),
                (e.prototype.focusHandler = function () {
                    var e = this;
                    e.$slider
                        .off("focus.slick blur.slick")
                        .on("focus.slick blur.slick", "*", function (t) {
                            t.stopImmediatePropagation();
                            var o = i(this);
                            setTimeout(function () {
                                e.options.pauseOnFocus &&
                                    ((e.focussed = o.is(":focus")), e.autoPlay());
                            }, 0);
                        });
                }),
                (e.prototype.getCurrent = e.prototype.slickCurrentSlide = function () {
                    return this.currentSlide;
                }),
                (e.prototype.getDotCount = function () {
                    var i = this,
                        e = 0,
                        t = 0,
                        o = 0;
                    if (!0 === i.options.infinite)
                        if (i.slideCount <= i.options.slidesToShow) ++o;
                        else
                            for (; e < i.slideCount;)
                                ++o,
                                (e = t + i.options.slidesToScroll),
                                (t +=
                                    i.options.slidesToScroll <= i.options.slidesToShow ?
                                    i.options.slidesToScroll :
                                    i.options.slidesToShow);
                    else if (!0 === i.options.centerMode) o = i.slideCount;
                    else if (i.options.asNavFor)
                        for (; e < i.slideCount;)
                            ++o,
                            (e = t + i.options.slidesToScroll),
                            (t +=
                                i.options.slidesToScroll <= i.options.slidesToShow ?
                                i.options.slidesToScroll :
                                i.options.slidesToShow);
                    else
                        o =
                        1 +
                        Math.ceil(
                            (i.slideCount - i.options.slidesToShow) /
                            i.options.slidesToScroll
                        );
                    return o - 1;
                }),
                (e.prototype.getLeft = function (i) {
                    var e,
                        t,
                        o,
                        s,
                        n = this,
                        r = 0;
                    return (
                        (n.slideOffset = 0),
                        (t = n.$slides.first().outerHeight(!0)),
                        !0 === n.options.infinite ?
                        (n.slideCount > n.options.slidesToShow &&
                            ((n.slideOffset =
                                    n.slideWidth * n.options.slidesToShow * -1),
                                (s = -1),
                                !0 === n.options.vertical &&
                                !0 === n.options.centerMode &&
                                (2 === n.options.slidesToShow ?
                                    (s = -1.5) :
                                    1 === n.options.slidesToShow && (s = -2)),
                                (r = t * n.options.slidesToShow * s)),
                            n.slideCount % n.options.slidesToScroll != 0 &&
                            i + n.options.slidesToScroll > n.slideCount &&
                            n.slideCount > n.options.slidesToShow &&
                            (i > n.slideCount ?
                                ((n.slideOffset =
                                        (n.options.slidesToShow - (i - n.slideCount)) *
                                        n.slideWidth *
                                        -1),
                                    (r =
                                        (n.options.slidesToShow - (i - n.slideCount)) *
                                        t *
                                        -1)) :
                                ((n.slideOffset =
                                        (n.slideCount % n.options.slidesToScroll) *
                                        n.slideWidth *
                                        -1),
                                    (r =
                                        (n.slideCount % n.options.slidesToScroll) * t * -1)))) :
                        i + n.options.slidesToShow > n.slideCount &&
                        ((n.slideOffset =
                                (i + n.options.slidesToShow - n.slideCount) * n.slideWidth),
                            (r = (i + n.options.slidesToShow - n.slideCount) * t)),
                        n.slideCount <= n.options.slidesToShow &&
                        ((n.slideOffset = 0), (r = 0)),
                        !0 === n.options.centerMode &&
                        n.slideCount <= n.options.slidesToShow ?
                        (n.slideOffset =
                            (n.slideWidth * Math.floor(n.options.slidesToShow)) / 2 -
                            (n.slideWidth * n.slideCount) / 2) :
                        !0 === n.options.centerMode && !0 === n.options.infinite ?
                        (n.slideOffset +=
                            n.slideWidth * Math.floor(n.options.slidesToShow / 2) -
                            n.slideWidth) :
                        !0 === n.options.centerMode &&
                        ((n.slideOffset = 0),
                            (n.slideOffset +=
                                n.slideWidth * Math.floor(n.options.slidesToShow / 2))),
                        (e = !1 === n.options.vertical ?
                            i * n.slideWidth * -1 + n.slideOffset :
                            i * t * -1 + r),
                        !0 === n.options.variableWidth &&
                        ((o =
                                n.slideCount <= n.options.slidesToShow ||
                                !1 === n.options.infinite ?
                                n.$slideTrack.children(".slick-slide").eq(i) :
                                n.$slideTrack
                                .children(".slick-slide")
                                .eq(i + n.options.slidesToShow)),
                            (e = !0 === n.options.rtl ?
                                o[0] ?
                                -1 *
                                (n.$slideTrack.width() - o[0].offsetLeft - o.width()) :
                                0 :
                                o[0] ?
                                -1 * o[0].offsetLeft :
                                0),
                            !0 === n.options.centerMode &&
                            ((o =
                                    n.slideCount <= n.options.slidesToShow ||
                                    !1 === n.options.infinite ?
                                    n.$slideTrack.children(".slick-slide").eq(i) :
                                    n.$slideTrack
                                    .children(".slick-slide")
                                    .eq(i + n.options.slidesToShow + 1)),
                                (e = !0 === n.options.rtl ?
                                    o[0] ?
                                    -1 *
                                    (n.$slideTrack.width() - o[0].offsetLeft - o.width()) :
                                    0 :
                                    o[0] ?
                                    -1 * o[0].offsetLeft :
                                    0),
                                (e += (n.$list.width() - o.outerWidth()) / 2))),
                        e
                    );
                }),
                (e.prototype.getOption = e.prototype.slickGetOption = function (i) {
                    return this.options[i];
                }),
                (e.prototype.getNavigableIndexes = function () {
                    var i,
                        e = this,
                        t = 0,
                        o = 0,
                        s = [];
                    for (
                        !1 === e.options.infinite ?
                        (i = e.slideCount) :
                        ((t = -1 * e.options.slidesToScroll),
                            (o = -1 * e.options.slidesToScroll),
                            (i = 2 * e.slideCount)); t < i;

                    )
                        s.push(t),
                        (t = o + e.options.slidesToScroll),
                        (o +=
                            e.options.slidesToScroll <= e.options.slidesToShow ?
                            e.options.slidesToScroll :
                            e.options.slidesToShow);
                    return s;
                }),
                (e.prototype.getSlick = function () {
                    return this;
                }),
                (e.prototype.getSlideCount = function () {
                    var e,
                        t,
                        o = this;
                    return (
                        (t = !0 === o.options.centerMode ?
                            o.slideWidth * Math.floor(o.options.slidesToShow / 2) :
                            0),
                        !0 === o.options.swipeToSlide ?
                        (o.$slideTrack.find(".slick-slide").each(function (s, n) {
                                if (
                                    n.offsetLeft - t + i(n).outerWidth() / 2 >
                                    -1 * o.swipeLeft
                                )
                                    return (e = n), !1;
                            }),
                            Math.abs(i(e).attr("data-slick-index") - o.currentSlide) || 1) :
                        o.options.slidesToScroll
                    );
                }),
                (e.prototype.goTo = e.prototype.slickGoTo = function (i, e) {
                    this.changeSlide({
                            data: {
                                message: "index",
                                index: parseInt(i),
                            },
                        },
                        e
                    );
                }),
                (e.prototype.init = function (e) {
                    var t = this;
                    i(t.$slider).hasClass("slick-initialized") ||
                        (i(t.$slider).addClass("slick-initialized"),
                            t.buildRows(),
                            t.buildOut(),
                            t.setProps(),
                            t.startLoad(),
                            t.loadSlider(),
                            t.initializeEvents(),
                            t.updateArrows(),
                            t.updateDots(),
                            t.checkResponsive(!0),
                            t.focusHandler()),
                        e && t.$slider.trigger("init", [t]),
                        !0 === t.options.accessibility && t.initADA(),
                        t.options.autoplay && ((t.paused = !1), t.autoPlay());
                }),
                (e.prototype.initADA = function () {
                    var e = this,
                        t = Math.ceil(e.slideCount / e.options.slidesToShow),
                        o = e.getNavigableIndexes().filter(function (i) {
                            return i >= 0 && i < e.slideCount;
                        });
                    e.$slides
                        .add(e.$slideTrack.find(".slick-cloned"))
                        .attr({
                            "aria-hidden": "true",
                            tabindex: "-1",
                        })
                        .find("a, input, button, select")
                        .attr({
                            tabindex: "-1",
                        }),
                        null !== e.$dots &&
                        (e.$slides
                            .not(e.$slideTrack.find(".slick-cloned"))
                            .each(function (t) {
                                var s = o.indexOf(t);
                                i(this).attr({
                                        role: "tabpanel",
                                        id: "slick-slide" + e.instanceUid + t,
                                        tabindex: -1,
                                    }),
                                    -1 !== s &&
                                    i(this).attr({
                                        "aria-describedby": "slick-slide-control" + e.instanceUid + s,
                                    });
                            }),
                            e.$dots
                            .attr("role", "tablist")
                            .find("li")
                            .each(function (s) {
                                var n = o[s];
                                i(this).attr({
                                        role: "presentation",
                                    }),
                                    i(this)
                                    .find("button")
                                    .first()
                                    .attr({
                                        role: "tab",
                                        id: "slick-slide-control" + e.instanceUid + s,
                                        "aria-controls": "slick-slide" + e.instanceUid + n,
                                        "aria-label": s + 1 + " of " + t,
                                        "aria-selected": null,
                                        tabindex: "-1",
                                    });
                            })
                            .eq(e.currentSlide)
                            .find("button")
                            .attr({
                                "aria-selected": "true",
                                tabindex: "0",
                            })
                            .end());
                    for (
                        var s = e.currentSlide, n = s + e.options.slidesToShow; s < n; s++
                    )
                        e.$slides.eq(s).attr("tabindex", 0);
                    e.activateADA();
                }),
                (e.prototype.initArrowEvents = function () {
                    var i = this;
                    !0 === i.options.arrows &&
                        i.slideCount > i.options.slidesToShow &&
                        (i.$prevArrow.off("click.slick").on(
                                "click.slick", {
                                    message: "previous",
                                },
                                i.changeSlide
                            ),
                            i.$nextArrow.off("click.slick").on(
                                "click.slick", {
                                    message: "next",
                                },
                                i.changeSlide
                            ),
                            !0 === i.options.accessibility &&
                            (i.$prevArrow.on("keydown.slick", i.keyHandler),
                                i.$nextArrow.on("keydown.slick", i.keyHandler)));
                }),
                (e.prototype.initDotEvents = function () {
                    var e = this;
                    !0 === e.options.dots &&
                        (i("li", e.$dots).on(
                                "click.slick", {
                                    message: "index",
                                },
                                e.changeSlide
                            ),
                            !0 === e.options.accessibility &&
                            e.$dots.on("keydown.slick", e.keyHandler)),
                        !0 === e.options.dots &&
                        !0 === e.options.pauseOnDotsHover &&
                        i("li", e.$dots)
                        .on("mouseenter.slick", i.proxy(e.interrupt, e, !0))
                        .on("mouseleave.slick", i.proxy(e.interrupt, e, !1));
                }),
                (e.prototype.initSlideEvents = function () {
                    var e = this;
                    e.options.pauseOnHover &&
                        (e.$list.on("mouseenter.slick", i.proxy(e.interrupt, e, !0)),
                            e.$list.on("mouseleave.slick", i.proxy(e.interrupt, e, !1)));
                }),
                (e.prototype.initializeEvents = function () {
                    var e = this;
                    e.initArrowEvents(),
                        e.initDotEvents(),
                        e.initSlideEvents(),
                        e.$list.on(
                            "touchstart.slick mousedown.slick", {
                                action: "start",
                            },
                            e.swipeHandler
                        ),
                        e.$list.on(
                            "touchmove.slick mousemove.slick", {
                                action: "move",
                            },
                            e.swipeHandler
                        ),
                        e.$list.on(
                            "touchend.slick mouseup.slick", {
                                action: "end",
                            },
                            e.swipeHandler
                        ),
                        e.$list.on(
                            "touchcancel.slick mouseleave.slick", {
                                action: "end",
                            },
                            e.swipeHandler
                        ),
                        e.$list.on("click.slick", e.clickHandler),
                        i(document).on(e.visibilityChange, i.proxy(e.visibility, e)),
                        !0 === e.options.accessibility &&
                        e.$list.on("keydown.slick", e.keyHandler),
                        !0 === e.options.focusOnSelect &&
                        i(e.$slideTrack).children().on("click.slick", e.selectHandler),
                        i(window).on(
                            "orientationchange.slick.slick-" + e.instanceUid,
                            i.proxy(e.orientationChange, e)
                        ),
                        i(window).on(
                            "resize.slick.slick-" + e.instanceUid,
                            i.proxy(e.resize, e)
                        ),
                        i("[draggable!=true]", e.$slideTrack).on(
                            "dragstart",
                            e.preventDefault
                        ),
                        i(window).on("load.slick.slick-" + e.instanceUid, e.setPosition),
                        i(e.setPosition);
                }),
                (e.prototype.initUI = function () {
                    var i = this;
                    !0 === i.options.arrows &&
                        i.slideCount > i.options.slidesToShow &&
                        (i.$prevArrow.show(), i.$nextArrow.show()),
                        !0 === i.options.dots &&
                        i.slideCount > i.options.slidesToShow &&
                        i.$dots.show();
                }),
                (e.prototype.keyHandler = function (i) {
                    var e = this;
                    i.target.tagName.match("TEXTAREA|INPUT|SELECT") ||
                        (37 === i.keyCode && !0 === e.options.accessibility ?
                            e.changeSlide({
                                data: {
                                    message: !0 === e.options.rtl ? "next" : "previous",
                                },
                            }) :
                            39 === i.keyCode &&
                            !0 === e.options.accessibility &&
                            e.changeSlide({
                                data: {
                                    message: !0 === e.options.rtl ? "previous" : "next",
                                },
                            }));
                }),
                (e.prototype.lazyLoad = function () {
                    function e(e) {
                        i("img[data-lazy]", e).each(function () {
                            var e = i(this),
                                t = i(this).attr("data-lazy"),
                                o = i(this).attr("data-srcset"),
                                s =
                                i(this).attr("data-sizes") || n.$slider.attr("data-sizes"),
                                r = document.createElement("img");
                            (r.onload = function () {
                                e.animate({
                                        opacity: 0,
                                    },
                                    100,
                                    function () {
                                        o && (e.attr("srcset", o), s && e.attr("sizes", s)),
                                            e.attr("src", t).animate({
                                                    opacity: 1,
                                                },
                                                200,
                                                function () {
                                                    e.removeAttr(
                                                        "data-lazy data-srcset data-sizes"
                                                    ).removeClass("slick-loading");
                                                }
                                            ),
                                            n.$slider.trigger("lazyLoaded", [n, e, t]);
                                    }
                                );
                            }),
                            (r.onerror = function () {
                                e
                                    .removeAttr("data-lazy")
                                    .removeClass("slick-loading")
                                    .addClass("slick-lazyload-error"),
                                    n.$slider.trigger("lazyLoadError", [n, e, t]);
                            }),
                            (r.src = t);
                        });
                    }
                    var t,
                        o,
                        s,
                        n = this;
                    if (
                        (!0 === n.options.centerMode ?
                            !0 === n.options.infinite ?
                            (s =
                                (o = n.currentSlide + (n.options.slidesToShow / 2 + 1)) +
                                n.options.slidesToShow +
                                2) :
                            ((o = Math.max(
                                    0,
                                    n.currentSlide - (n.options.slidesToShow / 2 + 1)
                                )),
                                (s = n.options.slidesToShow / 2 + 1 + 2 + n.currentSlide)) :
                            ((o = n.options.infinite ?
                                    n.options.slidesToShow + n.currentSlide :
                                    n.currentSlide),
                                (s = Math.ceil(o + n.options.slidesToShow)),
                                !0 === n.options.fade &&
                                (o > 0 && o--, s <= n.slideCount && s++)),
                            (t = n.$slider.find(".slick-slide").slice(o, s)),
                            "anticipated" === n.options.lazyLoad)
                    )
                        for (
                            var r = o - 1, l = s, d = n.$slider.find(".slick-slide"), a = 0; a < n.options
                            .slidesToScroll; a++
                        )
                            r < 0 && (r = n.slideCount - 1),
                            (t = (t = t.add(d.eq(r))).add(d.eq(l))),
                            r--,
                            l++;
                    e(t),
                        n.slideCount <= n.options.slidesToShow ?
                        e(n.$slider.find(".slick-slide")) :
                        n.currentSlide >= n.slideCount - n.options.slidesToShow ?
                        e(
                            n.$slider
                            .find(".slick-cloned")
                            .slice(0, n.options.slidesToShow)
                        ) :
                        0 === n.currentSlide &&
                        e(
                            n.$slider
                            .find(".slick-cloned")
                            .slice(-1 * n.options.slidesToShow)
                        );
                }),
                (e.prototype.loadSlider = function () {
                    var i = this;
                    i.setPosition(),
                        i.$slideTrack.css({
                            opacity: 1,
                        }),
                        i.$slider.removeClass("slick-loading"),
                        i.initUI(),
                        "progressive" === i.options.lazyLoad && i.progressiveLazyLoad();
                }),
                (e.prototype.next = e.prototype.slickNext = function () {
                    this.changeSlide({
                        data: {
                            message: "next",
                        },
                    });
                }),
                (e.prototype.orientationChange = function () {
                    var i = this;
                    i.checkResponsive(), i.setPosition();
                }),
                (e.prototype.pause = e.prototype.slickPause = function () {
                    var i = this;
                    i.autoPlayClear(), (i.paused = !0);
                }),
                (e.prototype.play = e.prototype.slickPlay = function () {
                    var i = this;
                    i.autoPlay(),
                        (i.options.autoplay = !0),
                        (i.paused = !1),
                        (i.focussed = !1),
                        (i.interrupted = !1);
                }),
                (e.prototype.postSlide = function (e) {
                    var t = this;
                    t.unslicked ||
                        (t.$slider.trigger("afterChange", [t, e]),
                            (t.animating = !1),
                            t.slideCount > t.options.slidesToShow && t.setPosition(),
                            (t.swipeLeft = null),
                            t.options.autoplay && t.autoPlay(),
                            !0 === t.options.accessibility &&
                            (t.initADA(),
                                t.options.focusOnChange &&
                                i(t.$slides.get(t.currentSlide))
                                .attr("tabindex", 0)
                                .focus()));
                }),
                (e.prototype.prev = e.prototype.slickPrev = function () {
                    this.changeSlide({
                        data: {
                            message: "previous",
                        },
                    });
                }),
                (e.prototype.preventDefault = function (i) {
                    i.preventDefault();
                }),
                (e.prototype.progressiveLazyLoad = function (e) {
                    e = e || 1;
                    var t,
                        o,
                        s,
                        n,
                        r,
                        l = this,
                        d = i("img[data-lazy]", l.$slider);
                    d.length ?
                        ((t = d.first()),
                            (o = t.attr("data-lazy")),
                            (s = t.attr("data-srcset")),
                            (n = t.attr("data-sizes") || l.$slider.attr("data-sizes")),
                            ((r = document.createElement("img")).onload = function () {
                                s && (t.attr("srcset", s), n && t.attr("sizes", n)),
                                    t
                                    .attr("src", o)
                                    .removeAttr("data-lazy data-srcset data-sizes")
                                    .removeClass("slick-loading"),
                                    !0 === l.options.adaptiveHeight && l.setPosition(),
                                    l.$slider.trigger("lazyLoaded", [l, t, o]),
                                    l.progressiveLazyLoad();
                            }),
                            (r.onerror = function () {
                                e < 3 ?
                                    setTimeout(function () {
                                        l.progressiveLazyLoad(e + 1);
                                    }, 500) :
                                    (t
                                        .removeAttr("data-lazy")
                                        .removeClass("slick-loading")
                                        .addClass("slick-lazyload-error"),
                                        l.$slider.trigger("lazyLoadError", [l, t, o]),
                                        l.progressiveLazyLoad());
                            }),
                            (r.src = o)) :
                        l.$slider.trigger("allImagesLoaded", [l]);
                }),
                (e.prototype.refresh = function (e) {
                    var t,
                        o,
                        s = this;
                    (o = s.slideCount - s.options.slidesToShow),
                    !s.options.infinite && s.currentSlide > o && (s.currentSlide = o),
                        s.slideCount <= s.options.slidesToShow && (s.currentSlide = 0),
                        (t = s.currentSlide),
                        s.destroy(!0),
                        i.extend(s, s.initials, {
                            currentSlide: t,
                        }),
                        s.init(),
                        e ||
                        s.changeSlide({
                                data: {
                                    message: "index",
                                    index: t,
                                },
                            },
                            !1
                        );
                }),
                (e.prototype.registerBreakpoints = function () {
                    var e,
                        t,
                        o,
                        s = this,
                        n = s.options.responsive || null;
                    if ("array" === i.type(n) && n.length) {
                        s.respondTo = s.options.respondTo || "window";
                        for (e in n)
                            if (((o = s.breakpoints.length - 1), n.hasOwnProperty(e))) {
                                for (t = n[e].breakpoint; o >= 0;)
                                    s.breakpoints[o] &&
                                    s.breakpoints[o] === t &&
                                    s.breakpoints.splice(o, 1),
                                    o--;
                                s.breakpoints.push(t),
                                    (s.breakpointSettings[t] = n[e].settings);
                            }
                        s.breakpoints.sort(function (i, e) {
                            return s.options.mobileFirst ? i - e : e - i;
                        });
                    }
                }),
                (e.prototype.reinit = function () {
                    var e = this;
                    (e.$slides = e.$slideTrack
                        .children(e.options.slide)
                        .addClass("slick-slide")),
                    (e.slideCount = e.$slides.length),
                    e.currentSlide >= e.slideCount &&
                        0 !== e.currentSlide &&
                        (e.currentSlide = e.currentSlide - e.options.slidesToScroll),
                        e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0),
                        e.registerBreakpoints(),
                        e.setProps(),
                        e.setupInfinite(),
                        e.buildArrows(),
                        e.updateArrows(),
                        e.initArrowEvents(),
                        e.buildDots(),
                        e.updateDots(),
                        e.initDotEvents(),
                        e.cleanUpSlideEvents(),
                        e.initSlideEvents(),
                        e.checkResponsive(!1, !0),
                        !0 === e.options.focusOnSelect &&
                        i(e.$slideTrack).children().on("click.slick", e.selectHandler),
                        e.setSlideClasses(
                            "number" == typeof e.currentSlide ? e.currentSlide : 0
                        ),
                        e.setPosition(),
                        e.focusHandler(),
                        (e.paused = !e.options.autoplay),
                        e.autoPlay(),
                        e.$slider.trigger("reInit", [e]);
                }),
                (e.prototype.resize = function () {
                    var e = this;
                    i(window).width() !== e.windowWidth &&
                        (clearTimeout(e.windowDelay),
                            (e.windowDelay = window.setTimeout(function () {
                                (e.windowWidth = i(window).width()),
                                e.checkResponsive(),
                                    e.unslicked || e.setPosition();
                            }, 50)));
                }),
                (e.prototype.removeSlide = e.prototype.slickRemove = function (
                    i,
                    e,
                    t
                ) {
                    var o = this;
                    if (
                        ((i =
                                "boolean" == typeof i ?
                                !0 === (e = i) ?
                                0 :
                                o.slideCount - 1 :
                                !0 === e ?
                                --i :
                                i),
                            o.slideCount < 1 || i < 0 || i > o.slideCount - 1)
                    )
                        return !1;
                    o.unload(),
                        !0 === t ?
                        o.$slideTrack.children().remove() :
                        o.$slideTrack.children(this.options.slide).eq(i).remove(),
                        (o.$slides = o.$slideTrack.children(this.options.slide)),
                        o.$slideTrack.children(this.options.slide).detach(),
                        o.$slideTrack.append(o.$slides),
                        (o.$slidesCache = o.$slides),
                        o.reinit();
                }),
                (e.prototype.setCSS = function (i) {
                    var e,
                        t,
                        o = this,
                        s = {};
                    !0 === o.options.rtl && (i = -i),
                        (e = "left" == o.positionProp ? Math.ceil(i) + "px" : "0px"),
                        (t = "top" == o.positionProp ? Math.ceil(i) + "px" : "0px"),
                        (s[o.positionProp] = i),
                        !1 === o.transformsEnabled ?
                        o.$slideTrack.css(s) :
                        ((s = {}),
                            !1 === o.cssTransitions ?
                            ((s[o.animType] = "translate(" + e + ", " + t + ")"),
                                o.$slideTrack.css(s)) :
                            ((s[o.animType] =
                                    "translate3d(" + e + ", " + t + ", 0px)"),
                                o.$slideTrack.css(s)));
                }),
                (e.prototype.setDimensions = function () {
                    var i = this;
                    !1 === i.options.vertical ?
                        !0 === i.options.centerMode &&
                        i.$list.css({
                            padding: "0px " + i.options.centerPadding,
                        }) :
                        (i.$list.height(
                                i.$slides.first().outerHeight(!0) * i.options.slidesToShow
                            ),
                            !0 === i.options.centerMode &&
                            i.$list.css({
                                padding: i.options.centerPadding + " 0px",
                            })),
                        (i.listWidth = i.$list.width()),
                        (i.listHeight = i.$list.height()),
                        !1 === i.options.vertical && !1 === i.options.variableWidth ?
                        ((i.slideWidth = Math.ceil(
                                i.listWidth / i.options.slidesToShow
                            )),
                            i.$slideTrack.width(
                                Math.ceil(
                                    i.slideWidth *
                                    i.$slideTrack.children(".slick-slide").length
                                )
                            )) :
                        !0 === i.options.variableWidth ?
                        i.$slideTrack.width(5e3 * i.slideCount) :
                        ((i.slideWidth = Math.ceil(i.listWidth)),
                            i.$slideTrack.height(
                                Math.ceil(
                                    i.$slides.first().outerHeight(!0) *
                                    i.$slideTrack.children(".slick-slide").length
                                )
                            ));
                    var e =
                        i.$slides.first().outerWidth(!0) - i.$slides.first().width();
                    !1 === i.options.variableWidth &&
                        i.$slideTrack.children(".slick-slide").width(i.slideWidth - e);
                }),
                (e.prototype.setFade = function () {
                    var e,
                        t = this;
                    t.$slides.each(function (o, s) {
                            (e = t.slideWidth * o * -1),
                            !0 === t.options.rtl ?
                                i(s).css({
                                    position: "relative",
                                    right: e,
                                    top: 0,
                                    zIndex: t.options.zIndex - 2,
                                    opacity: 0,
                                }) :
                                i(s).css({
                                    position: "relative",
                                    left: e,
                                    top: 0,
                                    zIndex: t.options.zIndex - 2,
                                    opacity: 0,
                                });
                        }),
                        t.$slides.eq(t.currentSlide).css({
                            zIndex: t.options.zIndex - 1,
                            opacity: 1,
                        });
                }),
                (e.prototype.setHeight = function () {
                    var i = this;
                    if (
                        1 === i.options.slidesToShow &&
                        !0 === i.options.adaptiveHeight &&
                        !1 === i.options.vertical
                    ) {
                        var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
                        i.$list.css("height", e);
                    }
                }),
                (e.prototype.setOption = e.prototype.slickSetOption = function () {
                    var e,
                        t,
                        o,
                        s,
                        n,
                        r = this,
                        l = !1;
                    if (
                        ("object" === i.type(arguments[0]) ?
                            ((o = arguments[0]), (l = arguments[1]), (n = "multiple")) :
                            "string" === i.type(arguments[0]) &&
                            ((o = arguments[0]),
                                (s = arguments[1]),
                                (l = arguments[2]),
                                "responsive" === arguments[0] &&
                                "array" === i.type(arguments[1]) ?
                                (n = "responsive") :
                                void 0 !== arguments[1] && (n = "single")),
                            "single" === n)
                    )
                        r.options[o] = s;
                    else if ("multiple" === n)
                        i.each(o, function (i, e) {
                            r.options[i] = e;
                        });
                    else if ("responsive" === n)
                        for (t in s)
                            if ("array" !== i.type(r.options.responsive))
                                r.options.responsive = [s[t]];
                            else {
                                for (e = r.options.responsive.length - 1; e >= 0;)
                                    r.options.responsive[e].breakpoint === s[t].breakpoint &&
                                    r.options.responsive.splice(e, 1),
                                    e--;
                                r.options.responsive.push(s[t]);
                            }
                    l && (r.unload(), r.reinit());
                }),
                (e.prototype.setPosition = function () {
                    var i = this;
                    i.setDimensions(),
                        i.setHeight(),
                        !1 === i.options.fade ?
                        i.setCSS(i.getLeft(i.currentSlide)) :
                        i.setFade(),
                        i.$slider.trigger("setPosition", [i]);
                }),
                (e.prototype.setProps = function () {
                    var i = this,
                        e = document.body.style;
                    (i.positionProp = !0 === i.options.vertical ? "top" : "left"),
                    "top" === i.positionProp ?
                        i.$slider.addClass("slick-vertical") :
                        i.$slider.removeClass("slick-vertical"),
                        (void 0 === e.WebkitTransition &&
                            void 0 === e.MozTransition &&
                            void 0 === e.msTransition) ||
                        (!0 === i.options.useCSS && (i.cssTransitions = !0)),
                        i.options.fade &&
                        ("number" == typeof i.options.zIndex ?
                            i.options.zIndex < 3 && (i.options.zIndex = 3) :
                            (i.options.zIndex = i.defaults.zIndex)),
                        void 0 !== e.OTransform &&
                        ((i.animType = "OTransform"),
                            (i.transformType = "-o-transform"),
                            (i.transitionType = "OTransition"),
                            void 0 === e.perspectiveProperty &&
                            void 0 === e.webkitPerspective &&
                            (i.animType = !1)),
                        void 0 !== e.MozTransform &&
                        ((i.animType = "MozTransform"),
                            (i.transformType = "-moz-transform"),
                            (i.transitionType = "MozTransition"),
                            void 0 === e.perspectiveProperty &&
                            void 0 === e.MozPerspective &&
                            (i.animType = !1)),
                        void 0 !== e.webkitTransform &&
                        ((i.animType = "webkitTransform"),
                            (i.transformType = "-webkit-transform"),
                            (i.transitionType = "webkitTransition"),
                            void 0 === e.perspectiveProperty &&
                            void 0 === e.webkitPerspective &&
                            (i.animType = !1)),
                        void 0 !== e.msTransform &&
                        ((i.animType = "msTransform"),
                            (i.transformType = "-ms-transform"),
                            (i.transitionType = "msTransition"),
                            void 0 === e.msTransform && (i.animType = !1)),
                        void 0 !== e.transform &&
                        !1 !== i.animType &&
                        ((i.animType = "transform"),
                            (i.transformType = "transform"),
                            (i.transitionType = "transition")),
                        (i.transformsEnabled =
                            i.options.useTransform &&
                            null !== i.animType &&
                            !1 !== i.animType);
                }),
                (e.prototype.setSlideClasses = function (i) {
                    var e,
                        t,
                        o,
                        s,
                        n = this;
                    if (
                        ((t = n.$slider
                                .find(".slick-slide")
                                .removeClass("slick-active slick-center slick-current")
                                .attr("aria-hidden", "true")),
                            n.$slides.eq(i).addClass("slick-current"),
                            !0 === n.options.centerMode)
                    ) {
                        var r = n.options.slidesToShow % 2 == 0 ? 1 : 0;
                        (e = Math.floor(n.options.slidesToShow / 2)),
                        !0 === n.options.infinite &&
                            (i >= e && i <= n.slideCount - 1 - e ?
                                n.$slides
                                .slice(i - e + r, i + e + 1)
                                .addClass("slick-active")
                                .attr("aria-hidden", "false") :
                                ((o = n.options.slidesToShow + i),
                                    t
                                    .slice(o - e + 1 + r, o + e + 2)
                                    .addClass("slick-active")
                                    .attr("aria-hidden", "false")),
                                0 === i ?
                                t
                                .eq(t.length - 1 - n.options.slidesToShow)
                                .addClass("slick-center") :
                                i === n.slideCount - 1 &&
                                t.eq(n.options.slidesToShow).addClass("slick-center")),
                            n.$slides.eq(i).addClass("slick-center");
                    } else
                        i >= 0 && i <= n.slideCount - n.options.slidesToShow ?
                        n.$slides
                        .slice(i, i + n.options.slidesToShow)
                        .addClass("slick-active")
                        .attr("aria-hidden", "false") :
                        t.length <= n.options.slidesToShow ?
                        t.addClass("slick-active").attr("aria-hidden", "false") :
                        ((s = n.slideCount % n.options.slidesToShow),
                            (o = !0 === n.options.infinite ? n.options.slidesToShow + i : i),
                            n.options.slidesToShow == n.options.slidesToScroll &&
                            n.slideCount - i < n.options.slidesToShow ?
                            t
                            .slice(o - (n.options.slidesToShow - s), o + s)
                            .addClass("slick-active")
                            .attr("aria-hidden", "false") :
                            t
                            .slice(o, o + n.options.slidesToShow)
                            .addClass("slick-active")
                            .attr("aria-hidden", "false"));
                    ("ondemand" !== n.options.lazyLoad &&
                        "anticipated" !== n.options.lazyLoad) ||
                    n.lazyLoad();
                }),
                (e.prototype.setupInfinite = function () {
                    var e,
                        t,
                        o,
                        s = this;
                    if (
                        (!0 === s.options.fade && (s.options.centerMode = !1),
                            !0 === s.options.infinite &&
                            !1 === s.options.fade &&
                            ((t = null), s.slideCount > s.options.slidesToShow))
                    ) {
                        for (
                            o = !0 === s.options.centerMode ?
                            s.options.slidesToShow + 1 :
                            s.options.slidesToShow,
                            e = s.slideCount; e > s.slideCount - o; e -= 1
                        )
                            (t = e - 1),
                            i(s.$slides[t])
                            .clone(!0)
                            .attr("id", "")
                            .attr("data-slick-index", t - s.slideCount)
                            .prependTo(s.$slideTrack)
                            .addClass("slick-cloned");
                        for (e = 0; e < o + s.slideCount; e += 1)
                            (t = e),
                            i(s.$slides[t])
                            .clone(!0)
                            .attr("id", "")
                            .attr("data-slick-index", t + s.slideCount)
                            .appendTo(s.$slideTrack)
                            .addClass("slick-cloned");
                        s.$slideTrack
                            .find(".slick-cloned")
                            .find("[id]")
                            .each(function () {
                                i(this).attr("id", "");
                            });
                    }
                }),
                (e.prototype.interrupt = function (i) {
                    var e = this;
                    i || e.autoPlay(), (e.interrupted = i);
                }),
                (e.prototype.selectHandler = function (e) {
                    var t = this,
                        o = i(e.target).is(".slick-slide") ?
                        i(e.target) :
                        i(e.target).parents(".slick-slide"),
                        s = parseInt(o.attr("data-slick-index"));
                    s || (s = 0),
                        t.slideCount <= t.options.slidesToShow ?
                        t.slideHandler(s, !1, !0) :
                        t.slideHandler(s);
                }),
                (e.prototype.slideHandler = function (i, e, t) {
                    var o,
                        s,
                        n,
                        r,
                        l,
                        d = null,
                        a = this;
                    if (
                        ((e = e || !1),
                            !(
                                (!0 === a.animating && !0 === a.options.waitForAnimate) ||
                                (!0 === a.options.fade && a.currentSlide === i)
                            ))
                    )
                        if (
                            (!1 === e && a.asNavFor(i),
                                (o = i),
                                (d = a.getLeft(o)),
                                (r = a.getLeft(a.currentSlide)),
                                (a.currentLeft = null === a.swipeLeft ? r : a.swipeLeft),
                                !1 === a.options.infinite &&
                                !1 === a.options.centerMode &&
                                (i < 0 || i > a.getDotCount() * a.options.slidesToScroll))
                        )
                            !1 === a.options.fade &&
                            ((o = a.currentSlide),
                                !0 !== t ?
                                a.animateSlide(r, function () {
                                    a.postSlide(o);
                                }) :
                                a.postSlide(o));
                        else if (
                        !1 === a.options.infinite &&
                        !0 === a.options.centerMode &&
                        (i < 0 || i > a.slideCount - a.options.slidesToScroll)
                    )
                        !1 === a.options.fade &&
                        ((o = a.currentSlide),
                            !0 !== t ?
                            a.animateSlide(r, function () {
                                a.postSlide(o);
                            }) :
                            a.postSlide(o));
                    else {
                        if (
                            (a.options.autoplay && clearInterval(a.autoPlayTimer),
                                (s =
                                    o < 0 ?
                                    a.slideCount % a.options.slidesToScroll != 0 ?
                                    a.slideCount -
                                    (a.slideCount % a.options.slidesToScroll) :
                                    a.slideCount + o :
                                    o >= a.slideCount ?
                                    a.slideCount % a.options.slidesToScroll != 0 ?
                                    0 :
                                    o - a.slideCount :
                                    o),
                                (a.animating = !0),
                                a.$slider.trigger("beforeChange", [a, a.currentSlide, s]),
                                (n = a.currentSlide),
                                (a.currentSlide = s),
                                a.setSlideClasses(a.currentSlide),
                                a.options.asNavFor &&
                                (l = (l = a.getNavTarget()).slick("getSlick")).slideCount <=
                                l.options.slidesToShow &&
                                l.setSlideClasses(a.currentSlide),
                                a.updateDots(),
                                a.updateArrows(),
                                !0 === a.options.fade)
                        )
                            return (
                                !0 !== t ?
                                (a.fadeSlideOut(n),
                                    a.fadeSlide(s, function () {
                                        a.postSlide(s);
                                    })) :
                                a.postSlide(s),
                                void a.animateHeight()
                            );
                        !0 !== t ?
                            a.animateSlide(d, function () {
                                a.postSlide(s);
                            }) :
                            a.postSlide(s);
                    }
                }),
                (e.prototype.startLoad = function () {
                    var i = this;
                    !0 === i.options.arrows &&
                        i.slideCount > i.options.slidesToShow &&
                        (i.$prevArrow.hide(), i.$nextArrow.hide()),
                        !0 === i.options.dots &&
                        i.slideCount > i.options.slidesToShow &&
                        i.$dots.hide(),
                        i.$slider.addClass("slick-loading");
                }),
                (e.prototype.swipeDirection = function () {
                    var i,
                        e,
                        t,
                        o,
                        s = this;
                    return (
                        (i = s.touchObject.startX - s.touchObject.curX),
                        (e = s.touchObject.startY - s.touchObject.curY),
                        (t = Math.atan2(e, i)),
                        (o = Math.round((180 * t) / Math.PI)) < 0 &&
                        (o = 360 - Math.abs(o)),
                        o <= 45 && o >= 0 ?
                        !1 === s.options.rtl ?
                        "left" :
                        "right" :
                        o <= 360 && o >= 315 ?
                        !1 === s.options.rtl ?
                        "left" :
                        "right" :
                        o >= 135 && o <= 225 ?
                        !1 === s.options.rtl ?
                        "right" :
                        "left" :
                        !0 === s.options.verticalSwiping ?
                        o >= 35 && o <= 135 ?
                        "down" :
                        "up" :
                        "vertical"
                    );
                }),
                (e.prototype.swipeEnd = function (i) {
                    var e,
                        t,
                        o = this;
                    if (((o.dragging = !1), (o.swiping = !1), o.scrolling))
                        return (o.scrolling = !1), !1;
                    if (
                        ((o.interrupted = !1),
                            (o.shouldClick = !(o.touchObject.swipeLength > 10)),
                            void 0 === o.touchObject.curX)
                    )
                        return !1;
                    if (
                        (!0 === o.touchObject.edgeHit &&
                            o.$slider.trigger("edge", [o, o.swipeDirection()]),
                            o.touchObject.swipeLength >= o.touchObject.minSwipe)
                    ) {
                        switch ((t = o.swipeDirection())) {
                            case "left":
                            case "down":
                                (e = o.options.swipeToSlide ?
                                    o.checkNavigable(o.currentSlide + o.getSlideCount()) :
                                    o.currentSlide + o.getSlideCount()),
                                (o.currentDirection = 0);
                                break;
                            case "right":
                            case "up":
                                (e = o.options.swipeToSlide ?
                                    o.checkNavigable(o.currentSlide - o.getSlideCount()) :
                                    o.currentSlide - o.getSlideCount()),
                                (o.currentDirection = 1);
                        }
                        "vertical" != t &&
                            (o.slideHandler(e),
                                (o.touchObject = {}),
                                o.$slider.trigger("swipe", [o, t]));
                    } else
                        o.touchObject.startX !== o.touchObject.curX &&
                        (o.slideHandler(o.currentSlide), (o.touchObject = {}));
                }),
                (e.prototype.swipeHandler = function (i) {
                    var e = this;
                    if (
                        !(
                            !1 === e.options.swipe ||
                            ("ontouchend" in document && !1 === e.options.swipe) ||
                            (!1 === e.options.draggable && -1 !== i.type.indexOf("mouse"))
                        )
                    )
                        switch (
                            ((e.touchObject.fingerCount =
                                    i.originalEvent && void 0 !== i.originalEvent.touches ?
                                    i.originalEvent.touches.length :
                                    1),
                                (e.touchObject.minSwipe =
                                    e.listWidth / e.options.touchThreshold),
                                !0 === e.options.verticalSwiping &&
                                (e.touchObject.minSwipe =
                                    e.listHeight / e.options.touchThreshold),
                                i.data.action)
                        ) {
                            case "start":
                                e.swipeStart(i);
                                break;
                            case "move":
                                e.swipeMove(i);
                                break;
                            case "end":
                                e.swipeEnd(i);
                        }
                }),
                (e.prototype.swipeMove = function (i) {
                    var e,
                        t,
                        o,
                        s,
                        n,
                        r,
                        l = this;
                    return (
                        (n = void 0 !== i.originalEvent ? i.originalEvent.touches : null),
                        !(!l.dragging || l.scrolling || (n && 1 !== n.length)) &&
                        ((e = l.getLeft(l.currentSlide)),
                            (l.touchObject.curX = void 0 !== n ? n[0].pageX : i.clientX),
                            (l.touchObject.curY = void 0 !== n ? n[0].pageY : i.clientY),
                            (l.touchObject.swipeLength = Math.round(
                                Math.sqrt(
                                    Math.pow(l.touchObject.curX - l.touchObject.startX, 2)
                                )
                            )),
                            (r = Math.round(
                                Math.sqrt(
                                    Math.pow(l.touchObject.curY - l.touchObject.startY, 2)
                                )
                            )),
                            !l.options.verticalSwiping && !l.swiping && r > 4 ?
                            ((l.scrolling = !0), !1) :
                            (!0 === l.options.verticalSwiping &&
                                (l.touchObject.swipeLength = r),
                                (t = l.swipeDirection()),
                                void 0 !== i.originalEvent &&
                                l.touchObject.swipeLength > 4 &&
                                ((l.swiping = !0), i.preventDefault()),
                                (s =
                                    (!1 === l.options.rtl ? 1 : -1) *
                                    (l.touchObject.curX > l.touchObject.startX ? 1 : -1)),
                                !0 === l.options.verticalSwiping &&
                                (s = l.touchObject.curY > l.touchObject.startY ? 1 : -1),
                                (o = l.touchObject.swipeLength),
                                (l.touchObject.edgeHit = !1),
                                !1 === l.options.infinite &&
                                ((0 === l.currentSlide && "right" === t) ||
                                    (l.currentSlide >= l.getDotCount() && "left" === t)) &&
                                ((o = l.touchObject.swipeLength * l.options.edgeFriction),
                                    (l.touchObject.edgeHit = !0)),
                                !1 === l.options.vertical ?
                                (l.swipeLeft = e + o * s) :
                                (l.swipeLeft =
                                    e + o * (l.$list.height() / l.listWidth) * s),
                                !0 === l.options.verticalSwiping &&
                                (l.swipeLeft = e + o * s),
                                !0 !== l.options.fade &&
                                !1 !== l.options.touchMove &&
                                (!0 === l.animating ?
                                    ((l.swipeLeft = null), !1) :
                                    void l.setCSS(l.swipeLeft))))
                    );
                }),
                (e.prototype.swipeStart = function (i) {
                    var e,
                        t = this;
                    if (
                        ((t.interrupted = !0),
                            1 !== t.touchObject.fingerCount ||
                            t.slideCount <= t.options.slidesToShow)
                    )
                        return (t.touchObject = {}), !1;
                    void 0 !== i.originalEvent &&
                        void 0 !== i.originalEvent.touches &&
                        (e = i.originalEvent.touches[0]),
                        (t.touchObject.startX = t.touchObject.curX =
                            void 0 !== e ? e.pageX : i.clientX),
                        (t.touchObject.startY = t.touchObject.curY =
                            void 0 !== e ? e.pageY : i.clientY),
                        (t.dragging = !0);
                }),
                (e.prototype.unfilterSlides = e.prototype.slickUnfilter = function () {
                    var i = this;
                    null !== i.$slidesCache &&
                        (i.unload(),
                            i.$slideTrack.children(this.options.slide).detach(),
                            i.$slidesCache.appendTo(i.$slideTrack),
                            i.reinit());
                }),
                (e.prototype.unload = function () {
                    var e = this;
                    i(".slick-cloned", e.$slider).remove(),
                        e.$dots && e.$dots.remove(),
                        e.$prevArrow &&
                        e.htmlExpr.test(e.options.prevArrow) &&
                        e.$prevArrow.remove(),
                        e.$nextArrow &&
                        e.htmlExpr.test(e.options.nextArrow) &&
                        e.$nextArrow.remove(),
                        e.$slides
                        .removeClass(
                            "slick-slide slick-active slick-visible slick-current"
                        )
                        .attr("aria-hidden", "true")
                        .css("width", "");
                }),
                (e.prototype.unslick = function (i) {
                    var e = this;
                    e.$slider.trigger("unslick", [e, i]), e.destroy();
                }),
                (e.prototype.updateArrows = function () {
                    var i = this;
                    Math.floor(i.options.slidesToShow / 2),
                        !0 === i.options.arrows &&
                        i.slideCount > i.options.slidesToShow &&
                        !i.options.infinite &&
                        (i.$prevArrow
                            .removeClass("slick-disabled")
                            .attr("aria-disabled", "false"),
                            i.$nextArrow
                            .removeClass("slick-disabled")
                            .attr("aria-disabled", "false"),
                            0 === i.currentSlide ?
                            (i.$prevArrow
                                .addClass("slick-disabled")
                                .attr("aria-disabled", "true"),
                                i.$nextArrow
                                .removeClass("slick-disabled")
                                .attr("aria-disabled", "false")) :
                            i.currentSlide >= i.slideCount - i.options.slidesToShow &&
                            !1 === i.options.centerMode ?
                            (i.$nextArrow
                                .addClass("slick-disabled")
                                .attr("aria-disabled", "true"),
                                i.$prevArrow
                                .removeClass("slick-disabled")
                                .attr("aria-disabled", "false")) :
                            i.currentSlide >= i.slideCount - 1 &&
                            !0 === i.options.centerMode &&
                            (i.$nextArrow
                                .addClass("slick-disabled")
                                .attr("aria-disabled", "true"),
                                i.$prevArrow
                                .removeClass("slick-disabled")
                                .attr("aria-disabled", "false")));
                }),
                (e.prototype.updateDots = function () {
                    var i = this;
                    null !== i.$dots &&
                        (i.$dots.find("li").removeClass("slick-active").end(),
                            i.$dots
                            .find("li")
                            .eq(Math.floor(i.currentSlide / i.options.slidesToScroll))
                            .addClass("slick-active"));
                }),
                (e.prototype.visibility = function () {
                    var i = this;
                    i.options.autoplay &&
                        (document[i.hidden] ?
                            (i.interrupted = !0) :
                            (i.interrupted = !1));
                }),
                (i.fn.slick = function () {
                    var i,
                        t,
                        o = this,
                        s = arguments[0],
                        n = Array.prototype.slice.call(arguments, 1),
                        r = o.length;
                    for (i = 0; i < r; i++)
                        if (
                            ("object" == typeof s || void 0 === s ?
                                (o[i].slick = new e(o[i], s)) :
                                (t = o[i].slick[s].apply(o[i].slick, n)),
                                void 0 !== t)
                        )
                            return t;
                    return o;
                });
            });
            /*! Theia Sticky Sidebar | v1.7.0 - https://github.com/WeCodePixels/theia-sticky-sidebar */
            (function ($) {
                $.fn.theiaStickySidebar = function (options) {
                    var defaults = {
                        containerSelector: "",
                        additionalMarginTop: 0,
                        additionalMarginBottom: 0,
                        updateSidebarHeight: true,
                        minWidth: 0,
                        disableOnResponsiveLayouts: true,
                        sidebarBehavior: "modern",
                        defaultPosition: "relative",
                        namespace: "TSS",
                    };
                    options = $.extend(defaults, options);
                    options.additionalMarginTop =
                        parseInt(options.additionalMarginTop) || 0;
                    options.additionalMarginBottom =
                        parseInt(options.additionalMarginBottom) || 0;
                    tryInitOrHookIntoEvents(options, this);

                    function tryInitOrHookIntoEvents(options, $that) {
                        var success = tryInit(options, $that);
                        if (!success) {
                            console.log(
                                "TSS: Body width smaller than options.minWidth. Init is delayed."
                            );
                            $(document).on(
                                "scroll." + options.namespace,
                                (function (options, $that) {
                                    return function (evt) {
                                        var success = tryInit(options, $that);
                                        if (success) {
                                            $(this).unbind(evt);
                                        }
                                    };
                                })(options, $that)
                            );
                            $(window).on(
                                "resize." + options.namespace,
                                (function (options, $that) {
                                    return function (evt) {
                                        var success = tryInit(options, $that);
                                        if (success) {
                                            $(this).unbind(evt);
                                        }
                                    };
                                })(options, $that)
                            );
                        }
                    }

                    function tryInit(options, $that) {
                        if (options.initialized === true) {
                            return true;
                        }
                        if ($("body").width() < options.minWidth) {
                            return false;
                        }
                        init(options, $that);
                        return true;
                    }

                    function init(options, $that) {
                        options.initialized = true;
                        var existingStylesheet = $(
                            "#theia-sticky-sidebar-stylesheet-" + options.namespace
                        );
                        if (existingStylesheet.length === 0) {
                            $("head").append(
                                $(
                                    '<style id="theia-sticky-sidebar-stylesheet-' +
                                    options.namespace +
                                    '">.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style>'
                                )
                            );
                        }
                        $that.each(function () {
                            var o = {};
                            o.sidebar = $(this);
                            o.options = options || {};
                            o.container = $(o.options.containerSelector);
                            if (o.container.length == 0) {
                                o.container = o.sidebar.parent();
                            }
                            o.sidebar.parents().css("-webkit-transform", "none");
                            o.sidebar.css({
                                position: o.options.defaultPosition,
                                overflow: "visible",
                                "-webkit-box-sizing": "border-box",
                                "-moz-box-sizing": "border-box",
                                "box-sizing": "border-box",
                            });
                            o.stickySidebar = o.sidebar.find(".theiaStickySidebar");
                            if (o.stickySidebar.length == 0) {
                                var javaScriptMIMETypes =
                                    /(?:text|application)\/(?:x-)?(?:javascript|ecmascript)/i;
                                o.sidebar
                                    .find("script")
                                    .filter(function (index, script) {
                                        return (
                                            script.type.length === 0 ||
                                            script.type.match(javaScriptMIMETypes)
                                        );
                                    })
                                    .remove();
                                o.stickySidebar = $("<div>")
                                    .addClass("theiaStickySidebar")
                                    .append(o.sidebar.children());
                                o.sidebar.append(o.stickySidebar);
                            }
                            o.marginBottom = parseInt(o.sidebar.css("margin-bottom"));
                            o.paddingTop = parseInt(o.sidebar.css("padding-top"));
                            o.paddingBottom = parseInt(o.sidebar.css("padding-bottom"));
                            var collapsedTopHeight = o.stickySidebar.offset().top;
                            var collapsedBottomHeight = o.stickySidebar.outerHeight();
                            o.stickySidebar.css("padding-top", 1);
                            o.stickySidebar.css("padding-bottom", 1);
                            collapsedTopHeight -= o.stickySidebar.offset().top;
                            collapsedBottomHeight =
                                o.stickySidebar.outerHeight() -
                                collapsedBottomHeight -
                                collapsedTopHeight;
                            if (collapsedTopHeight == 0) {
                                o.stickySidebar.css("padding-top", 0);
                                o.stickySidebarPaddingTop = 0;
                            } else {
                                o.stickySidebarPaddingTop = 1;
                            }
                            if (collapsedBottomHeight == 0) {
                                o.stickySidebar.css("padding-bottom", 0);
                                o.stickySidebarPaddingBottom = 0;
                            } else {
                                o.stickySidebarPaddingBottom = 1;
                            }
                            o.previousScrollTop = null;
                            o.fixedScrollTop = 0;
                            resetSidebar();
                            o.onScroll = function (o) {
                                if (!o.stickySidebar.is(":visible")) {
                                    return;
                                }
                                if ($("body").width() < o.options.minWidth) {
                                    resetSidebar();
                                    return;
                                }
                                if (o.options.disableOnResponsiveLayouts) {
                                    var sidebarWidth = o.sidebar.outerWidth(
                                        o.sidebar.css("float") == "none"
                                    );
                                    if (sidebarWidth + 50 > o.container.width()) {
                                        resetSidebar();
                                        return;
                                    }
                                }
                                var scrollTop = $(document).scrollTop();
                                var position = "static";
                                if (
                                    scrollTop >=
                                    o.sidebar.offset().top +
                                    (o.paddingTop - o.options.additionalMarginTop)
                                ) {
                                    var offsetTop = o.paddingTop + options.additionalMarginTop;
                                    var offsetBottom =
                                        o.paddingBottom +
                                        o.marginBottom +
                                        options.additionalMarginBottom;
                                    var containerTop = o.sidebar.offset().top;
                                    var containerBottom =
                                        o.sidebar.offset().top + getClearedHeight(o.container);
                                    var windowOffsetTop = 0 + options.additionalMarginTop;
                                    var windowOffsetBottom;
                                    var sidebarSmallerThanWindow =
                                        o.stickySidebar.outerHeight() + offsetTop + offsetBottom <
                                        $(window).height();
                                    if (sidebarSmallerThanWindow) {
                                        windowOffsetBottom =
                                            windowOffsetTop + o.stickySidebar.outerHeight();
                                    } else {
                                        windowOffsetBottom =
                                            $(window).height() -
                                            o.marginBottom -
                                            o.paddingBottom -
                                            options.additionalMarginBottom;
                                    }
                                    var staticLimitTop = containerTop - scrollTop + o.paddingTop;
                                    var staticLimitBottom =
                                        containerBottom -
                                        scrollTop -
                                        o.paddingBottom -
                                        o.marginBottom;
                                    var top = o.stickySidebar.offset().top - scrollTop;
                                    var scrollTopDiff = o.previousScrollTop - scrollTop;
                                    if (o.stickySidebar.css("position") == "fixed") {
                                        if (o.options.sidebarBehavior == "modern") {
                                            top += scrollTopDiff;
                                        }
                                    }
                                    if (o.options.sidebarBehavior == "stick-to-top") {
                                        top = options.additionalMarginTop;
                                    }
                                    if (o.options.sidebarBehavior == "stick-to-bottom") {
                                        top = windowOffsetBottom - o.stickySidebar.outerHeight();
                                    }
                                    if (scrollTopDiff > 0) {
                                        top = Math.min(top, windowOffsetTop);
                                    } else {
                                        top = Math.max(
                                            top,
                                            windowOffsetBottom - o.stickySidebar.outerHeight()
                                        );
                                    }
                                    top = Math.max(top, staticLimitTop);
                                    top = Math.min(
                                        top,
                                        staticLimitBottom - o.stickySidebar.outerHeight()
                                    );
                                    var sidebarSameHeightAsContainer =
                                        o.container.height() == o.stickySidebar.outerHeight();
                                    if (!sidebarSameHeightAsContainer && top == windowOffsetTop) {
                                        position = "fixed";
                                    } else if (
                                        !sidebarSameHeightAsContainer &&
                                        top == windowOffsetBottom - o.stickySidebar.outerHeight()
                                    ) {
                                        position = "fixed";
                                    } else if (
                                        scrollTop + top - o.sidebar.offset().top - o.paddingTop <=
                                        options.additionalMarginTop
                                    ) {
                                        position = "static";
                                    } else {
                                        position = "absolute";
                                    }
                                }
                                if (position == "fixed") {
                                    var scrollLeft = $(document).scrollLeft();
                                    o.stickySidebar.css({
                                        position: "fixed",
                                        width: getWidthForObject(o.stickySidebar) + "px",
                                        transform: "translateY(" + top + "px)",
                                        left: o.sidebar.offset().left +
                                            parseInt(o.sidebar.css("padding-left")) -
                                            scrollLeft +
                                            "px",
                                        top: "0px",
                                    });
                                } else if (position == "absolute") {
                                    var css = {};
                                    if (o.stickySidebar.css("position") != "absolute") {
                                        css.position = "absolute";
                                        css.transform =
                                            "translateY(" +
                                            (scrollTop +
                                                top -
                                                o.sidebar.offset().top -
                                                o.stickySidebarPaddingTop -
                                                o.stickySidebarPaddingBottom) +
                                            "px)";
                                        css.top = "0px";
                                    }
                                    css.width = getWidthForObject(o.stickySidebar) + "px";
                                    css.left = "";
                                    o.stickySidebar.css(css);
                                } else if (position == "static") {
                                    resetSidebar();
                                }
                                if (position != "static") {
                                    if (o.options.updateSidebarHeight == true) {
                                        o.sidebar.css({
                                            "min-height": o.stickySidebar.outerHeight() +
                                                o.stickySidebar.offset().top -
                                                o.sidebar.offset().top +
                                                o.paddingBottom,
                                        });
                                    }
                                }
                                o.previousScrollTop = scrollTop;
                            };
                            o.onScroll(o);
                            $(document).on(
                                "scroll." + o.options.namespace,
                                (function (o) {
                                    return function () {
                                        o.onScroll(o);
                                    };
                                })(o)
                            );
                            $(window).on(
                                "resize." + o.options.namespace,
                                (function (o) {
                                    return function () {
                                        o.stickySidebar.css({
                                            position: "static",
                                        });
                                        o.onScroll(o);
                                    };
                                })(o)
                            );
                            if (typeof ResizeSensor !== "undefined") {
                                new ResizeSensor(
                                    o.stickySidebar[0],
                                    (function (o) {
                                        return function () {
                                            o.onScroll(o);
                                        };
                                    })(o)
                                );
                            }

                            function resetSidebar() {
                                o.fixedScrollTop = 0;
                                o.sidebar.css({
                                    "min-height": "1px",
                                });
                                o.stickySidebar.css({
                                    position: "static",
                                    width: "",
                                    transform: "none",
                                });
                            }

                            function getClearedHeight(e) {
                                var height = e.height();
                                e.children().each(function () {
                                    height = Math.max(height, $(this).height());
                                });
                                return height;
                            }
                        });
                    }

                    function getWidthForObject(object) {
                        var width;
                        try {
                            width = object[0].getBoundingClientRect().width;
                        } catch (err) {}
                        if (typeof width === "undefined") {
                            width = object.width();
                        }
                        return width;
                    }
                    return this;
                };
            })(jQuery);
            //]]>
        </script>
        <script src="{{ asset('sora/js/slick.js') }}" type="text/javascript"></script>
        <script src="{{ asset('sora/js/theme-fonction.js') }}" type="text/javascript"></script>
        <script src="{{ asset('sora/js/pagination.js') }}" type="text/javascript"></script>
        <script src="{{ asset('sora/js/facebook.js') }}" type="text/javascript"></script>
        <!-- Back To Top -->
        <div class="back-top" title="Back to Top"></div>
        <script src="{{ asset('sora/js/widgets.js') }}" type="text/javascript"></script>

        {{--
        {!! Toastr::message() !!}

        <script type="text/javascript">
            window["__wavt"] = "AOuZoY4sy7UEapaMCMHCCPxJHZhrGpntKA:1586617007359";
            _WidgetManager._Init(
                "//www.blogger.com/rearrange?blogID\x3d170975474984791640",
                "//sora-times-soratemplates.blogspot.com/",
                "170975474984791640"
            );
            _WidgetManager._SetDataContext([{
                    name: "blog",
                    data: {
                        blogId: "170975474984791640",
                        title: "Sora Times",
                        url: "https://sora-times-soratemplates.blogspot.com/",
                        canonicalUrl: "https://sora-times-soratemplates.blogspot.com/",
                        homepageUrl: "https://sora-times-soratemplates.blogspot.com/",
                        searchUrl: "https://sora-times-soratemplates.blogspot.com/search",
                        canonicalHomepageUrl: "https://sora-times-soratemplates.blogspot.com/",
                        blogspotFaviconUrl: "favicon.ico",
                        bloggerUrl: "https://www.blogger.com",
                        hasCustomDomain: false,
                        httpsEnabled: true,
                        enabledCommentProfileImages: true,
                        gPlusViewType: "FILTERED_POSTMOD",
                        adultContent: false,
                        analyticsAccountNumber: "",
                        encoding: "UTF-8",
                        locale: "en",
                        localeUnderscoreDelimited: "en",
                        languageDirection: "ltr",
                        isPrivate: false,
                        isMobile: false,
                        isMobileRequest: false,
                        mobileClass: "",
                        isPrivateBlog: false,
                        feedLinks: "\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Sora Times - Atom\x22 href\x3d\x22https://sora-times-soratemplates.blogspot.com/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Sora Times - RSS\x22 href\x3d\x22https://sora-times-soratemplates.blogspot.com/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Sora Times - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/170975474984791640/posts/default\x22 /\x3e\n",
                        meTag: "\x3clink rel\x3d\x22me\x22 href\x3d\x22#\x22 /\x3e\n",
                        adsenseHostId: "ca-host-pub-1556223355139109",
                        adsenseHasAds: false,
                        view: "",
                        dynamicViewsCommentsSrc: "//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js",
                        dynamicViewsScriptSrc: "//www.blogblog.com/dynamicviews/2fc88244100a0440",
                        plusOneApiSrc: "/sora/js/plusone.js",
                        disableGComments: true,
                        sharing: {
                            platforms: [{
                                    name: "Get link",
                                    key: "link",
                                    shareMessage: "Get link",
                                    target: "",
                                },
                                {
                                    name: "Facebook",
                                    key: "facebook",
                                    shareMessage: "Share to Facebook",
                                    target: "facebook",
                                },
                                {
                                    name: "BlogThis!",
                                    key: "blogThis",
                                    shareMessage: "BlogThis!",
                                    target: "blog",
                                },
                                {
                                    name: "Twitter",
                                    key: "twitter",
                                    shareMessage: "Share to Twitter",
                                    target: "twitter",
                                },
                                {
                                    name: "Pinterest",
                                    key: "pinterest",
                                    shareMessage: "Share to Pinterest",
                                    target: "pinterest",
                                },
                                {
                                    name: "Email",
                                    key: "email",
                                    shareMessage: "Email",
                                    target: "email",
                                },
                            ],
                            disableGooglePlus: true,
                            googlePlusShareButtonWidth: 300,
                            googlePlusBootstrap: "\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27en\x27};\x3c/script\x3e",
                        },
                        hasCustomJumpLinkMessage: false,
                        jumpLinkMessage: "Read more",
                        pageType: "index",
                        pageName: "",
                        pageTitle: "Sora Times",
                    },
                },
                {
                    name: "features",
                    data: {
                        sharing_get_link_dialog: "true",
                        sharing_native: "false",
                    },
                },
                {
                    name: "messages",
                    data: {
                        edit: "Edit",
                        linkCopiedToClipboard: "Link copied to clipboard!",
                        ok: "Ok",
                        postLink: "Post Link",
                    },
                },
                {
                    name: "template",
                    data: {
                        name: "custom",
                        localizedName: "Custom",
                        isResponsive: true,
                        isAlternateRendering: false,
                        isCustom: true,
                    },
                },
                {
                    name: "view",
                    data: {
                        classic: {
                            name: "classic",
                            url: "?view\x3dclassic",
                        },
                        flipcard: {
                            name: "flipcard",
                            url: "?view\x3dflipcard",
                        },
                        magazine: {
                            name: "magazine",
                            url: "?view\x3dmagazine",
                        },
                        mosaic: {
                            name: "mosaic",
                            url: "?view\x3dmosaic",
                        },
                        sidebar: {
                            name: "sidebar",
                            url: "?view\x3dsidebar",
                        },
                        snapshot: {
                            name: "snapshot",
                            url: "?view\x3dsnapshot",
                        },
                        timeslide: {
                            name: "timeslide",
                            url: "?view\x3dtimeslide",
                        },
                        isMobile: false,
                        title: "Sora Times",
                        description: "",
                        url: "https://sora-times-soratemplates.blogspot.com/",
                        type: "feed",
                        isSingleItem: false,
                        isMultipleItems: true,
                        isError: false,
                        isPage: false,
                        isPost: false,
                        isHomepage: true,
                        isArchive: false,
                        isLabelSearch: false,
                    },
                },
                {
                    name: "widgets",
                    data: [{
                            title: "Css Options",
                            type: "LinkList",
                            sectionId: "sora-panel",
                            id: "LinkList70",
                        },
                        {
                            title: "Default Variables",
                            type: "LinkList",
                            sectionId: "sora-panel",
                            id: "LinkList71",
                        },
                        {
                            title: "Link List",
                            type: "LinkList",
                            sectionId: "top-bar-nav",
                            id: "LinkList72",
                        },
                        {
                            title: "",
                            type: "LinkList",
                            sectionId: "top-bar-social",
                            id: "LinkList73",
                        },
                        {
                            title: "Sora Times (Header)",
                            type: "Header",
                            sectionId: "header-logo",
                            id: "Header1",
                        },
                        {
                            title: "Link List",
                            type: "LinkList",
                            sectionId: "main-menu",
                            id: "LinkList74",
                        },
                        {
                            title: "Best Seller Books",
                            type: "HTML",
                            sectionId: "hot-section",
                            id: "HTML2",
                        },
                        {
                            title: "Slider Widget",
                            type: "HTML",
                            sectionId: "slider-section",
                            id: "HTML71",
                        },
                        {
                            title: "Music",
                            type: "HTML",
                            sectionId: "featured-posts-1",
                            id: "HTML10",
                        },
                        {
                            title: "Blog Posts",
                            type: "Blog",
                            sectionId: "main",
                            id: "Blog1",
                            posts: [{
                                    id: "577057852576684797",
                                    title: "Small bridge and a beautiful view of the beach ",
                                    featuredImage: "https://1.bp.blogspot.com/-5t-HMjTfKDA/Vupk-v6I6NI/AAAAAAAADZM/TXf-qZ5caqEoL8jQCEg6wiCSeaPHq8nxg/s1600/aircraft-1183171_960_720.jpg",
                                    showInlineAds: false,
                                },
                                {
                                    id: "7815368054834991229",
                                    title: "Elegant woman in front of a waterfall",
                                    featuredImage: "https://1.bp.blogspot.com/-dQBN2UxiXqU/Vupjn7UQgdI/AAAAAAAADY8/y49Bi2v9urM2FcwQqqIA7OmWntqajKusg/s1600/woman-1150067_960_720.jpg",
                                    showInlineAds: false,
                                },
                                {
                                    id: "299868132884168390",
                                    title: "Writing lyrics with pen on a stylish thick paper",
                                    featuredImage: "https://4.bp.blogspot.com/-dtSH0tcgqqM/Vupi6ek8JTI/AAAAAAAADY0/juCg2KTOg-UnkU6066GA50dYTHUN4Ifww/s1600/notepad-926046_960_720.jpg",
                                    showInlineAds: false,
                                },
                                {
                                    id: "5422632451103228274",
                                    title: "Elegant Business man having a cup of coffee",
                                    featuredImage: "https://1.bp.blogspot.com/-wnV4ZvWjJaQ/VupiUH0Il2I/AAAAAAAADYs/rwc4kAnERYgXU8EXqsQGrH5-_o8a3_28w/s1600/business-839788_960_720.jpg",
                                    showInlineAds: false,
                                },
                                {
                                    id: "3673287440455817720",
                                    title: "Fashion and beautiful backpack",
                                    featuredImage: "https://2.bp.blogspot.com/-9Pjnlj15VNE/Vuphu52FpVI/AAAAAAAADYg/twYTib_UQUMBouIGv4ljl2c0ZVxV-nClQ/s1600/backpack-1149544_960_720.jpg",
                                    showInlineAds: false,
                                },
                                {
                                    id: "7794785988050730671",
                                    title: "Small bridge and a beautiful view of the beach",
                                    featuredImage: "https://3.bp.blogspot.com/-bMsroVx7_uw/Vupg5rq-1WI/AAAAAAAADYQ/1-6c33dATVYltlxAX-YMs83KkSYkMSBOg/s1600/pathway-1149113_960_720.jpg",
                                    showInlineAds: false,
                                },
                                {
                                    id: "8199638998078046999",
                                    title: "Girl with camera style vintage",
                                    featuredImage: "https://4.bp.blogspot.com/-R3jFy7SYZL4/Vupgft_tacI/AAAAAAAADYM/fwh1GYHl8YYIRAREFKG1d-cxgA-05ySNA/s1600/hipster-865295_960_720.jpg",
                                    showInlineAds: false,
                                },
                            ],
                            headerByline: {
                                regionName: "header1",
                                items: [{
                                        name: "share",
                                        label: "",
                                    },
                                    {
                                        name: "author",
                                        label: "Posted by:",
                                    },
                                    {
                                        name: "timestamp",
                                        label: "",
                                    },
                                ],
                            },
                            footerBylines: [{
                                    regionName: "footer1",
                                    items: [{
                                            name: "comments",
                                            label: "Comments",
                                        },
                                        {
                                            name: "icons",
                                            label: "",
                                        },
                                        {
                                            name: "backlinks",
                                            label: "Related Posts",
                                        },
                                    ],
                                },
                                {
                                    regionName: "footer2",
                                    items: [{
                                        name: "labels",
                                        label: "Tags:",
                                    }, ],
                                },
                                {
                                    regionName: "footer3",
                                    items: [{
                                        name: "reactions",
                                        label: "Reactions",
                                    }, ],
                                },
                            ],
                            allBylineItems: [{
                                    name: "share",
                                    label: "",
                                },
                                {
                                    name: "author",
                                    label: "Posted by:",
                                },
                                {
                                    name: "timestamp",
                                    label: "",
                                },
                                {
                                    name: "comments",
                                    label: "Comments",
                                },
                                {
                                    name: "icons",
                                    label: "",
                                },
                                {
                                    name: "backlinks",
                                    label: "Related Posts",
                                },
                                {
                                    name: "labels",
                                    label: "Tags:",
                                },
                                {
                                    name: "reactions",
                                    label: "Reactions",
                                },
                            ],
                        },
                        {
                            title: "Business",
                            type: "HTML",
                            sectionId: "featured-posts-2",
                            id: "HTML5",
                        },
                        {
                            title: "Fashion",
                            type: "HTML",
                            sectionId: "featured-posts-2",
                            id: "HTML13",
                        },
                        {
                            title: "Sports",
                            type: "HTML",
                            sectionId: "featured-posts-2",
                            id: "HTML8",
                        },
                        {
                            title: "Technology",
                            type: "HTML",
                            sectionId: "featured-posts-2",
                            id: "HTML9",
                        },
                        {
                            title: "Nature",
                            type: "HTML",
                            sectionId: "featured-posts-2",
                            id: "HTML12",
                        },
                        {
                            title: "Social Plugin",
                            type: "LinkList",
                            sectionId: "social-widget",
                            id: "LinkList75",
                        },
                        {
                            title: "Popular Posts",
                            type: "PopularPosts",
                            sectionId: "sidebar2",
                            id: "PopularPosts1",
                            posts: [{
                                    title: "Writing lyrics with pen on a stylish thick paper",
                                    id: 299868132884168390,
                                },
                                {
                                    title: "Elegant woman in front of a waterfall",
                                    id: 7815368054834991229,
                                },
                                {
                                    title: "Elegant Business man having a cup of coffee",
                                    id: 5422632451103228274,
                                },
                            ],
                        },
                        {
                            title: "Subscribe Us",
                            type: "HTML",
                            sectionId: "sidebar2",
                            id: "HTML1",
                        },
                        {
                            title: "Technology",
                            type: "HTML",
                            sectionId: "sidebar2",
                            id: "HTML7",
                        },
                        {
                            title: "Menu Footer Widget",
                            type: "LinkList",
                            sectionId: "menu-footer",
                            id: "LinkList76",
                        },
                    ],
                },
            ]);
            _WidgetManager._RegisterWidget(
                "_LinkListView",
                new _WidgetInfo(
                    "LinkList70",
                    "sora-panel",
                    document.getElementById("LinkList70"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_LinkListView",
                new _WidgetInfo(
                    "LinkList71",
                    "sora-panel",
                    document.getElementById("LinkList71"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_LinkListView",
                new _WidgetInfo(
                    "LinkList72",
                    "top-bar-nav",
                    document.getElementById("LinkList72"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_LinkListView",
                new _WidgetInfo(
                    "LinkList73",
                    "top-bar-social",
                    document.getElementById("LinkList73"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HeaderView",
                new _WidgetInfo(
                    "Header1",
                    "header-logo",
                    document.getElementById("Header1"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_LinkListView",
                new _WidgetInfo(
                    "LinkList74",
                    "main-menu",
                    document.getElementById("LinkList74"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML2",
                    "hot-section",
                    document.getElementById("HTML2"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML71",
                    "slider-section",
                    document.getElementById("HTML71"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML10",
                    "featured-posts-1",
                    document.getElementById("HTML10"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_BlogView",
                new _WidgetInfo(
                    "Blog1",
                    "main",
                    document.getElementById("Blog1"), {
                        cmtInteractionsEnabled: false,
                        lightboxEnabled: true,
                        lightboxModuleUrl: "/sora/js/1918114677-lbx.js",
                        lightboxCssUrl: "/sora/css/368954415-lightbox_bundle.css",
                    },
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML5",
                    "featured-posts-2",
                    document.getElementById("HTML5"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML13",
                    "featured-posts-2",
                    document.getElementById("HTML13"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML8",
                    "featured-posts-2",
                    document.getElementById("HTML8"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML9",
                    "featured-posts-2",
                    document.getElementById("HTML9"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML12",
                    "featured-posts-2",
                    document.getElementById("HTML12"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_LinkListView",
                new _WidgetInfo(
                    "LinkList75",
                    "social-widget",
                    document.getElementById("LinkList75"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_PopularPostsView",
                new _WidgetInfo(
                    "PopularPosts1",
                    "sidebar2",
                    document.getElementById("PopularPosts1"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML1",
                    "sidebar2",
                    document.getElementById("HTML1"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_HTMLView",
                new _WidgetInfo(
                    "HTML7",
                    "sidebar2",
                    document.getElementById("HTML7"), {},
                    "displayModeFull"
                )
            );
            _WidgetManager._RegisterWidget(
                "_LinkListView",
                new _WidgetInfo(
                    "LinkList76",
                    "menu-footer",
                    document.getElementById("LinkList76"), {},
                    "displayModeFull"
                )
            );
        </script>--}}
    </body>
</html>

