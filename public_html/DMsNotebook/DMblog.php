<?php
session_start();
include_once("check_login_status.php");
?>
<?php
$varfield = "Login";
$dropfield = "Login";
// If user is logged in, header them away
if (isset($_SESSION["username"])) {
//if(isset($_GET["u"])) {
    $varfield = "Welcome " .$_SESSION["username"];
    $dropfield = "View Profile";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        DM Blog
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="google-site-verification" content="PJSAZ0KSeqiw_wB5pURWWUEb2ESbYUg0bNm3T4kjuYQ" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='../js/DropDown.js'></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!--Favicon change to something better
-->


<div class="nav">
    <div class='logo'></div>
    <ul class="menu">
        <li class="btMenu">
            <a href="javascript:void(0)">MENU</a></li>
        <li class="menuItem"><a href="../index.php">Home</a></li>
        <li class="menuItem"><a href="../loginforms/StraightToLogin.php"><b><?php echo $varfield; ?></b></a></li>
        <li class="menuItem">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Quick Links</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="DMNotebook.html">DM's Notebook</a>
                    <a href="Tools.html">Tools</a>
                    <a href="../Guides/guidesandreviews.php">Adventure Log</a>
                    <a href="https://www.youtube.com/channel/UCtd_XSgL5iuKPX9LFX7lQzw">Videos!</a>
                    <a href="https://www.gofundme.com/2be9n9w"><b>Support Us!</b></a>
                    <a href="../bio/bio.php">About the Creators</a>
                    <a href="../loginforms/StraightToLogin.php"><?php echo $dropfield; ?></a>
                </div>
            </div>
        </li>


    </ul>
</div>

<section class='aboutus' id='about'>
    <div class='container1'>
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <h2 class="redtext">How to Open an Unlocked Door</h2>
                <p style="font-size: small">Zack Tackett - 7/12/2016</p>
                <p class="bigtext">
                    It was a very simple setup: “A deep chasm surrounds the tower. You’re standing on one end of the tower’s drawbridge. Directly ahead of you is the large arched doorway that leads into the tower.” My first mistake was asking them how they wanted to approach the door. The wizard was the first to split from the party, as he flew straight to the top of the tower. Next was the druid, who became a spider and crawled around to the back of the tower and through a window. Our warlock was even more creative, as he jumped on the barbarian’s back who then scaled the tower using only two javelins for climbing gear. The icing on the cake, though, was the rogue, who decided it would be best to disguise herself as an old woman who just needed inside the tower to use their bathroom.
                </p>
                <p class="bigtext">
                    The encounters were definitely more deadly with each player fighting alone, but that wasn’t what killed the momentum. It was that, as the DM, I had to split both mine and the story’s focus between each player. Everyone wants to feel like the “main character” of their own story, but that becomes impossible to achieve when it takes 20 mins just to reach your turn in initiative. It doesn’t matter how interesting the encounters you’ve tirelessly created are, if you’re players are spending most of their time waiting for it to be their turn, they’re not having fun.
                </p>
                <p class="bigtext">
                    It took a lot of doing, but I did manage to bring them all together inside the tower before facing the story’s current Big Baddie. And the fight was rather epic! I learned my lesson though. Never give the party an unlocked door. They’ll just find a way around it.
                </p>

            </div>
        </div>
    </div>
</section>
<!-- begin wwww.htmlcommentbox.com -->
<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
<link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
<script type="text/javascript" id="hcb"> /*<!--*/
    if(!window.hcb_user){hcb_user={};}
    (function(){
        var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";
        s.setAttribute("type","text/javascript");
        s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24uSiKUgEoeilfwcA2.rtgL%2F"+"&opts=16862&num=10&ts=1470899619901");
        if (typeof s!="undefined")
            document.getElementsByTagName("head")[0].appendChild(s);
    })(); /*-->*/
</script>
<!-- end www.htmlcommentbox.com -->







<script type='text/javascript' src='../js/jquery.js'></script>
<script type='text/javascript' src='../js/bootstrap.min.js'></script>
<script type='text/javascript' src='../js/scrollReveal.js'></script>
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