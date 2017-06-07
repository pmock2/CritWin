<?php
include("header.php")
?>



<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="favicon.ico">
    <meta charset="UTF-8">
<!--    <META HTTP-EQUIV="refresh" CONTENT="15">-->
    <title>
        CritWin
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="google-site-verification" content="PJSAZ0KSeqiw_wB5pURWWUEb2ESbYUg0bNm3T4kjuYQ" />
    <meta property="og:url"           content="http://www.critwin.com" />
    <meta property="og:type"          content="CritWin" />
    <meta property="og:title"         content="CritWin" />
    <meta property="og:description"   content="Made for DMs, By DMs" />
    <meta name="keywords" content="DnD, dangeon and dragons, roleplay, dice, roller, 3D, RPG, wargame"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='js/DropDown.js'></script>
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->

</head>

<body>

<?php echo $header ?>

<!-- WRAPPER STARTS HERE-->
<div class='wrapper'>

    <header><!-- HEADER STARTS HERE-->


        <div class='container titles yomer-text-center'>
            <h1 data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"></h1>
            <div class='subhead'>
                <p style="margin-top: 25%">Its literally impossible to lose if you CritWin</p>
                <br>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div style="padding-top: 150px" class="fb-like" data-href="https://facebook.com/critwin" data-width="200" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

                <!--<form method="GET" action="#">-->
                    <!--<button class="form-submit email" type="submit" title="Continue with Email"></button>-->
                    <!--</form>-->
                </div>
            </div>
        </div>


    </header><!-- /HEADER ENDS HERE-->
    <!-- ABOUT US STARTS HERE-->
    <section class='aboutus' id='about'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12 yomer-text-center">
                    <h2 class="redtext">What We Offer</h2>
                    <p class="bigtext">
                        This site is dedicated to helping Dungeon Masters all over the world in accomplishing their goal
                        of wiping
                        the par- I mean.. helping to make the table-top experience amazing for <b>everyone!</b>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget icon-share" href="DMsNotebook"
                       data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Share</a>
                    <h3>DM's Notebook</h3>

                    <p>Our personal spin on some of the core elements of Dungeons and Dragons. Great for new and
                        experienced DM's alike. <b>Check out our new DM Blog!</b>
                    </p>

<!--                    <p>-->
<!--                        <a class="link-more" href="DMNotebook.html">Read</a>-->
<!--                    </p>-->

                </div>
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget icon-follow" href="Tools"
                       data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Follow</a>
                    <h3>Tools</h3>


                    <p>
                        We now have a functional dice roller! Check it out!
                    </p>
<!--                    <p>-->
<!--                        <a class="link-more" href="Tools.html">Tools</a>-->
<!--                    </p>-->

                </div>
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget icon-market" href="AdventureLibrary"
                       data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Market</a>
                    <h3>Adventure Library</h3>


                    <p>
                        Guides and reviews for modules new and old, as well as our own worlds! Check out our new<a href="AdventureLibrary/homebrew/swordcoast/swordcoast.php"> homebrew</a> variant of the Sword Coast!
                    </p>
<!--                    <p>-->
<!--                        <a class="link-more" href="#">Guides/Reviews</a>-->
<!--                    </p>-->

                </div>
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget icon-recommend" href="loginforms/signup.php"
                       data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Recommend</a>
                    <h3>Not a Member?</h3>


                    <p>
                        We're currently working on our first <a href="Threads/index.php">forum page</a>! Want to be our first moderator? Awesome! Email us at contactcritwin@gmail.com to learn more.
                    </p>
<!--                    <p>-->
<!--                        <a class="link-more" href="loginforms/signup.php">Join Now!</a>-->
<!--                    </p>-->

                </div>
            </div>


        </div>

    </section>
    <!-- /ABOUT US ENDS HERE HERE-->

    <section class="ourmission" id='mission'>
        <div class="container">
            <div class="row1">
                <div class="col-md-12 yomer-text-center">
                    <h3>“When the DM asks, "Really? Are you sure?" You say, "No"</h3>
                    <small>Zack Tackett, DM</small>
                </div>
            </div>
        </div>
    </section>

    <!--/ OUR MISSION ENDS HERE-->
    <!--OUR FEATURE STARTS HERE-->
    <section class="feature" id='whyus'>
        <div class="container">
            <div class="row">
                <div class="col-md-12 yomer-text-center">
                    <h2 class="redtext">New Threads Page!!</h2>
                    <p class="bigtext">The website is really starting to come togethor. We now have an experimental <a href="Threads/index.php">threads/forums page</a> for you guys to check out!
                    Feel free to make an account and post away! Need an account? Make one <a href="loginforms/signup.php">here</a>.</p>


                </div>
            </div>
            <!--<div class="row">-->
            <!--<div class="col-md-12">-->
            <!---->
            <!--<ul id="feature-tabs" class="nav nav-tabs" role="tablist">-->
            <!--<li role="presentation" class="active"><a href="#works" role="tab" data-toggle="tab">Dice Roller</a></li>-->
            <!--<li role="presentation"><a href="#webtools" role="tab" data-toggle="tab">Character Creator</a></li>-->
            <!--<li role="presentation"><a href="#alerts" role="tab" data-toggle="tab">Programs and Apps</a></li>-->
            <!--&lt;!&ndash;<li role="presentation"><a href="#mobile" role="tab" data-toggle="tab">Forums</a></li>&ndash;&gt;-->
            <!--<li role="presentation"><a href="#analytics" role="tab" data-toggle="tab">Guides and Reviews</a></li>-->
            <!--</ul>-->

            <!--&lt;!&ndash; Tab panes &ndash;&gt;-->
            <!--<div class="tab-content">-->
            <!--<div role="tabpanel" class="tab-pane fade in active" id="works">-->
            <!--<div class="row">-->
            <!--<div class="col-md-4"><a href="DiceRoller.html"> <img src="img/01_itjustworks_2x.png"></a></div>-->
            <!--<div class="col-md-8">-->
            <!--<p>-->
            <!--Dice Roller Page-->
            <!--</p>-->
            <!--<p>-->
            <!--<a class="link-more" href="DiceRoller.html">LETS ROLL</a>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div role="tabpanel" class="tab-pane fade" id="webtools">-->
            <!--<div class="row">-->
            <!--<div class="col-md-4"><img src="img/more_reach_2x.png"></div>-->
            <!--<div class="col-md-8">-->
            <!--<p>-->
            <!--Coming Soon!-->
            <!---->
            <!--</p>-->
            <!--<p>-->
            <!--<a class="link-more" href="features.html">Take Me There</a>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div role="tabpanel" class="tab-pane fade" id="alerts">-->
            <!--<div class="row">-->
            <!--<div class="col-md-4"><img src="img/02_websitetools_2x.png"></div>-->
            <!--<div class="col-md-8">-->
            <!--<p>-->
            <!--Coming Soon!-->
            <!---->
            <!---->
            <!--</p>-->
            <!--<p>-->
            <!--<a class="link-more" href="features.html">Take Me There</a>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div role="tabpanel" class="tab-pane fade" id="mobile">-->
            <!--<div class="row">-->
            <!--<div class="col-md-4"><img src="img/03_activityemail_2x.png"></div>-->
            <!--<div class="col-md-8">-->
            <!--<p>-->
            <!--Coming Soon!-->
            <!--</p>-->
            <!--<p>-->
            <!--<a class="link-more" href="features.html">Take Me There</a>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div role="tabpanel" class="tab-pane fade" id="analytics">-->
            <!--<div class="row">-->
            <!--<div class="col-md-4"><img src="img/04_analytics_2x.png"></div>-->
            <!--<div class="col-md-8">-->
            <!--<p>-->
            <!---->
            <!--Coming Soon!-->

            <!--</p>                                    -->
            <!--<p>-->
            <!--<a class="link-more" href="features.html">Take Me There</a>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->

            <!---->
            <!--</div>-->
            <!--</div>-->
        </div>
    </section>
    <!--/ OUR FEATURE ENDS  HERE-->
    <!--WHY CHOSE STARTS HERE HERE-->

    <section class="ourmission2" id='whychose'>
        <div class="container">
            <div class="row1">
                <div class="col-md-12 yomer-text-center">
                    <div class="col-md-12 yomer-text-center">
                        <h3>“As Bahamut once said, all overly-complicated things must be SLAIN”</h3>
                        <small>Sassafrass, Dragonborn Paladin</small>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER STARTS HERE-->
    <section class="testimonial " id='testimonial'>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="yomer-text-center">
                        <h2 class=goldtext>From the Developers</h2>
                        <p class="whitetext">We're always happy to hear from our visitors.</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote class="goldtext">
                                <p>If you are an artist and you like to make logos and such, PLEASE contact us. We are
                                    in desperate need of a logo for the site.
                                    Email us at <b class="whitetext"> contactcritwin@gmail.com </b>for more info.</p>

                            </blockquote>
                            <blockquote class="goldtext">
                                <p>We're currently working on a YouTube channel for the site. If you guys have any
                                    suggestions for modules that we should film (preferably 5e), feel free to email us
                                    at <b class="whitetext">contactcritwin@gmail.com</b> to let us know! </p>

                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote class="goldtext">
                                <p><b class="whitetext">Road Map</b>
                                <ul>

                                <li>Profile Customization</li>
                                <li>Forums Page</li>
                                <li>Tools Content</li>
                                <li>DMs Notebook Content</li>
                                <li>Guides and Reviews Content</li>
                            </ul>

                            </blockquote>
                            <!--<blockquote class="goldtext">-->
                            <!--<p>test test test test test test test test test test test test test test test test test test test test test test te</p>-->
                            <!--<small>Someone famous in <cite title="Source Title">Source Title</cite></small>-->
                            <!--</blockquote>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ FOOTER ENDS HERE-->

    <!-- SOCIAL STARTS HERE-->
    <section class="social " id='social'>
        <div class="container">
            <div class="row" align="center">
                <div class="fb-like" data-href="https://facebook.com/critwin" data-width="200" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

                <!--<div class="col-md-12 ">-->
                <!--<div class="social_icons">-->
                <!-- START OF HIT COUNTER CODE --><br><script language="JavaScript" src="http://www.counter160.com/js.js?img=11"></script><br><a href="https://www.000webhost.com"><img src="http://www.counter160.com/images/11/left.png" alt="Free web hosting" border="0" align="texttop"></a><a href="http://www.hosting24.com"><img alt="Web hosting" src="http://www.counter160.com/images/11/right.png" border="0" align="texttop"></a><!-- END OF HIT COUNTER CODE -->

                <!--<ul>-->
                <!--<li class="facebook"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-facebook"></i> </a> </li>-->
                <!--<li class="twitter"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-twitter"></i> </a> </li>-->
                <!--<li class="dribbble"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-dribbble"></i> </a> </li>-->
                <!--<li class="googleplus"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-google"></i> </a> </li>-->
                <!--<li class="linkedin "> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-linkedin"></i> </a> </li>-->
                <!--<li class="pinterest"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-pinterest"></i> </a> </li>-->
                <!--&lt;!&ndash;</ul>&ndash;&gt;-->
                <!--</div>-->
                <!--</div>-->

            </div>
        </div>
    </section>

    <!--/ SOCIAL ENDS HERE-->


</div> <!-- /WRAPPER ENDS HERE DESIGNED BY VIJAYAN PP-->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/scrollReveal.js'></script>
<script type='text/javascript'>
    jQuery(document).ready(function () {


        $(".top").click(function () {
            $("html, body").animate({scrollTop: 0}, "slow");
            return false;
        });
        $(".btMenu").click(function () {

            if ($(".menu").children(".menuItem").css("display") == "none") {
                $(".menu").children(".menuItem").slideDown();
            }
            else {
                $(".menu").children(".menuItem").slideUp();
            }
        });
        $(window).resize(function () {
            if ($(window).innerWidth() > 900) {
                $(".menu").children(".menuItem").css("display", "block");
            }
            else {
                $(".menu").children(".menuItem").css("display", "none");
            }
        });

        (function (k) {
            'use strict';
            k(['jquery'], function ($) {
                var j = $.scrollTo = function (a, b, c) {
                    return $(window).scrollTo(a, b, c)
                };
                j.defaults = {axis: 'xy', duration: parseFloat($.fn.jquery) >= 1.3 ? 0 : 1, limit: !0};
                j.window = function (a) {
                    return $(window)._scrollable()
                };
                $.fn._scrollable = function () {
                    return this.map(function () {
                        var a = this, isWin = !a.nodeName || $.inArray(a.nodeName.toLowerCase(), ['iframe', '#document', 'html', 'body']) != -1;
                        if (!isWin)return a;
                        var b = (a.contentWindow || a).document || a.ownerDocument || a;
                        return /webkit/i.test(navigator.userAgent) || b.compatMode == 'BackCompat' ? b.body : b.documentElement
                    })
                };
                $.fn.scrollTo = function (f, g, h) {
                    if (typeof g == 'object') {
                        h = g;
                        g = 0
                    }
                    if (typeof h == 'function')h = {onAfter: h};
                    if (f == 'max')f = 9e9;
                    h = $.extend({}, j.defaults, h);
                    g = g || h.duration;
                    h.queue = h.queue && h.axis.length > 1;
                    if (h.queue)g /= 2;
                    h.offset = both(h.offset);
                    h.over = both(h.over);
                    return this._scrollable().each(function () {
                        if (f == null)return;
                        var d = this, $elem = $(d), targ = f, toff, attr = {}, win = $elem.is('html,body');
                        switch (typeof targ) {
                            case'number':
                            case'string':
                                if (/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(targ)) {
                                    targ = both(targ);
                                    break
                                }
                                targ = win ? $(targ) : $(targ, this);
                                if (!targ.length)return;
                            case'object':
                                if (targ.is || targ.style)toff = (targ = $(targ)).offset()
                        }
                        var e = $.isFunction(h.offset) && h.offset(d, targ) || h.offset;
                        $.each(h.axis.split(''), function (i, a) {
                            var b = a == 'x' ? 'Left' : 'Top', pos = b.toLowerCase(), key = 'scroll' + b, old = d[key], max = j.max(d, a);
                            if (toff) {
                                attr[key] = toff[pos] + (win ? 0 : old - $elem.offset()[pos]);
                                if (h.margin) {
                                    attr[key] -= parseInt(targ.css('margin' + b)) || 0;
                                    attr[key] -= parseInt(targ.css('border' + b + 'Width')) || 0
                                }
                                attr[key] += e[pos] || 0;
                                if (h.over[pos])attr[key] += targ[a == 'x' ? 'width' : 'height']() * h.over[pos]
                            } else {
                                var c = targ[pos];
                                attr[key] = c.slice && c.slice(-1) == '%' ? parseFloat(c) / 100 * max : c
                            }
                            if (h.limit && /^\d+$/.test(attr[key]))attr[key] = attr[key] <= 0 ? 0 : Math.min(attr[key], max);
                            if (!i && h.queue) {
                                if (old != attr[key])animate(h.onAfterFirst);
                                delete attr[key]
                            }
                        });
                        animate(h.onAfter);
                        function animate(a) {
                            $elem.animate(attr, g, h.easing, a && function () {
                                        a.call(this, targ, h)
                                    })
                        }
                    }).end()
                };
                j.max = function (a, b) {
                    var c = b == 'x' ? 'Width' : 'Height', scroll = 'scroll' + c;
                    if (!$(a).is('html,body'))return a[scroll] - $(a)[c.toLowerCase()]();
                    var d = 'client' + c, html = a.ownerDocument.documentElement, body = a.ownerDocument.body;
                    return Math.max(html[scroll], body[scroll]) - Math.min(html[d], body[d])
                };
                function both(a) {
                    return $.isFunction(a) || typeof a == 'object' ? a : {top: a, left: a}
                }

                return j
            })
        }(typeof define === 'function' && define.amd ? define : function (a, b) {
            if (typeof module !== 'undefined' && module.exports) {
                module.exports = b(require('jquery'))
            } else {
                b(jQuery)
            }
        }));
        <!---->
        <!--$(".menu").children("li:nth-child(3)").click(function(){-->
        <!--$("body").scrollTo("#about", 600);-->
        <!---->
        <!--});-->
        <!---->
        <!--$(".menu").children("li:nth-child(4)").click(function(){-->
        <!--$("body").scrollTo("#mission", 600);-->
        <!--});-->
        <!---->
        <!--$(".menu").children("li:nth-child(5)").click(function(){-->
        <!---->
        <!--$("body").scrollTo("#whyus", 600);-->
        <!--});-->
        <!---->
        <!--$(".menu").children("li:nth-child(6)").click(function(){-->
        <!--$("body").scrollTo("#whychose", 600);-->
        <!--});-->

    });

    (function ($) {
        window.scrollReveal = new scrollReveal();
    })();

</script>


</body>
</html>