<?php
include("../header.php")
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        About us
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
<?php echo $header ?>

<section class='aboutus' id='about'>
    <div class='container1'>
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <h2 class="redtext">Zack Tackett</h2>
                <p style="font-size: small"> - Creative Lead, DM</p>
                <p class="bigtext">
                    As a 2nd generation D&D player, fantasy and roleplaying found its way into every game I played as a kid. It was only natural then that my obsession with the genre lead me to the wonderful world of D&D (as well as the best movies, comics, books, etc.)! The fact that I could be whoever I wanted to be in this game was immeasurably amazing, but it was that my actions could directly affect the D&D world for better or worse that really hooked me. It wasn't long before I wanted to be more than just a character in the game, I wanted to tell my own stories. The first module I DM'd was nowhere near cohesive or balanced, but it gave me such joy to have my friends and family help me tell an epic story in this world I'd created. This website has been a dream of mine since I started DMing. One central place to share ideas with other DMs, and to find all the tools needed to help new DMs start telling their own stories.

                </p>

                <h2 class="redtext">Davin Carter</h2>
                <p style="font-size: small"> - Content Manager</p>
                <p class="bigtext">
                    I was first exposed to the world of D&D by my dad. Every few weeks he and his group of friends (which my unenthusiastic sister so graciously called “the Nerd Group”) would gather in our living room and literally spend the entire day from morning until evening immersed in their adventures. Naturally, I vowed never to have anything to do with D&D whatsoever (who wants to be like their parents?). That all changed when I met my good friend Zack, who convinced me to play one Saturday (and it took much convincing). After that day, I was hooked. D&D became a cherished part of my life, something to look forward to each week. To me, the appeal was being able to explore an entire world with my friends, a world inspired by the themes of my favorite reading material: mythology, medieval history, supernatural legends, Tolkien, etc. When Zack had the idea to create this website, I eagerly offered my services as a writer. Writing has always been a passion of mine, so combining my writing hobby with D&D (my favorite pastime) seemed only natural. It is my hope that those who come to this website will discover something new that will enrich their D&D experience in some way. Happy dungeon crawling!
                </p>

                <h2 class="redtext">Payton Mock</h2>
                <p style="font-size: small"> - Full Stack Developer, DM</p>


                <p class="bigtext">
                    Hi I'm Payton Mock, I come from a small town in Georgia called Ringgold and I'm currently studying computer science at Kennesaw State University. I'm actually not the guy who came up with the idea for this site. My buddy (and DM) Zack Tackett actually hinted the idea of a website that could track our campaigns as well as others. The idea grew until we got to where we are now. I hope to continue developing the site for 12 months. Like most people, I once thought DND was a niche only for nerds and antisocial guys who sit in their mom's basement and play with their wands for 5 hours straight. I was so wrong. The first time I ever played I was hooked. And ever since then, I've been convincing others to play as well. On campus, I've never roomed with anyone who didn't love DND after the first session. I think thats pretty cool.


                </p>

            </div>
        </div>
    </div>
</section>








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