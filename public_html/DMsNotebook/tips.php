<?php
include("header.php")
?>
<?php

session_start();
include_once("check_login_status.php");

$varfield = "Login";
$dropfield = "Login";
// If user is logged in, header them away
if (isset($_SESSION["username"])) {
//if(isset($_GET["u"])) {
    $varfield = "Welcome " . $_SESSION["username"];
    $dropfield = "View Profile";
}
?>
<html>
<head>
    <meta charset="UTF-8">

    <title>
        Classes
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="google-site-verification" content="PJSAZ0KSeqiw_wB5pURWWUEb2ESbYUg0bNm3T4kjuYQ"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='/js/DropDown.js'></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</head>


<body>
<?php echo $header ?>


<section class='aboutus' id='about'>
    <div class='container1'>

        <div class="row">
            <div class="col-md-12 yomer-text">
                <h2 class="redtext">Tips and Tricks</h2>
                <p class="bigtext">
                    The hardest part of playing a tabletop RPG is getting started. We're here to help make that task a bit less daunting. </p>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#one" onclick="closeNav()">Finding a Group</a>
                    <a href="#2" onclick="closeNav()">The Players</a>
                    <a href="#3" onclick="closeNav()">Where and When</a>
                    <a href="#4" onclick="closeNav()">Materials </a>
                    <a href="#5" onclick="closeNav()">Atmosphere</a>
                    <a href="#6" onclick="closeNav()">The Module</a>
                    <a href="#7" onclick="closeNav()">Customization</a>
                    <a href="#8" onclick="closeNav()">Planning</a>
                    <a href="index.php">Back to DMs Notebook</a>

                </div>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()">? Class List</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <h2 class="redtext" id="one">Finding a Group</h2>
                <p style="font-size: small">The first and hardest step in getting started.</p>
                <h3 class="bigtext"style="color: black;">Online</h3>
                <p class="bigtext"style="color: black;">
                    You have two options: "Play-By-Post" groups, where game actions are posted in a forum, or Virtual Tables, which display the map and tokens on screen while players are connected by microphone and camera. Both are great options for long-distance groups, or players who are not quite ready to leave the safety of their cave.
                </p>
                <h3 class="bigtext"style="color: black;">IRL</h3>
                <p class="bigtext"style="color: black;">
                    In our opinion, nothing beats the classic feel of sitting around a table and rolling dice with a group of friends. Whether you've convinced a group of your friends to try this game with you, or joined a group at a local shop, you’re guaranteed to have fun!
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">? Class List</button>
                <hr>

                <h2 class="redtext" id="2">The Players</h2>
                <p style="font-size: small">Once you've found your group, it's time to assign roles.</p>
                <h3 class="bigtext"style="color: black;">Types of Players</h3>
                <p class="bigtext"style="color: black;">
                    There are 8 categories most players fall into playing an RPG.
                </p>
                <h4 class="bigtext"style="color: black;">The Power Gamer</h4>
                <p class="bigtext"style="color: black;">
                    has done the math, and min-maxed a character to be perfectly optimized for the adventure. Their goal is to kill all the things, and get all the loot.
                </p>
                <h4 class="bigtext"style="color: black;">The Rules Lawyer</h4>
                <p class="bigtext"style="color: black;">
                    has every obscure rule memorized, and will happily interrupt you to point out that what you were doing was wrong. The term, "Rules as Written" will be used more than the dice will in any given game.
                </p>
                <h4 class="bigtext"style="color: black;">The Casual Gamer</h4>
                <p class="bigtext"style="color: black;">
                    probably just came for the food and to hang with friends. They like playing the game, but their character is most likely a dwarf named Bob that simply swings his sword every round.
                </p>
                <h4 class="bigtext"style="color: black;">The Psycho</h4>
                <p class="bigtext"style="color: black;">
                    wants to set fire to the entrails of his enemies as he drags them through the street. The more important an NPC is in your adventure, the more they want to kill them just for fun.
                </p>
                <h4 class="bigtext"style="color: black;">The Role Player</h4>
                <p class="bigtext"style="color: black;">
                    insists that you call them by their character's name while they play. They'd prefer to verbosely debate with the goblins and learn their backstory rather than fight them.
                </p>
                <h4 class="bigtext"style="color: black;">The Meta Gamer</h4>
                <p class="bigtext"style="color: black;">
                    has a hard time understanding the difference between player and character knowledge. They'll say, "what’s that guy’s AC?" and "I've read this module, the secret door is right here."
                </p>
                <h4 class="bigtext"style="color: black;">The Game Breaker</h4>
                <p class="bigtext"style="color: black;">
                    pushes the edges of your adventure just to throw off the storyline. Going left when the plot you've prepared has them going right is their Modis Operandi.
                </p>
                <h4 class="bigtext"style="color: black;">The Gygaxian</h4>
                <p class="bigtext"style="color: black;">
                    is the rarest and most precious of players. Unfortunately, these players usually either are overshadowed by the more extreme player types, or graduate to become DMs on their own. They understand the importance of both following the rules, and agreeing on new house rules; creating interesting and powerful characters, but giving other players a turn to shine; having fun, but following the storyline. These are the players you want to fill your group with.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">? Class List</button>
                <hr>

                <h2 class="redtext" id="3">Where and When</h2>
                <p style="font-size: small">The great game of compromise.</p>
                <p class="bigtext"style="color: black;">

                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">? Class List</button>
                <hr>

                <h2 class="redtext" id="4">Materials</h2>
                <p style="font-size: small">Time to fill your RPG backpack.</p>
                <p class="bigtext"style="color: black;">
                    
                </p>

                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">? Class List</button>
                <hr>

                <h2 class="redtext" id="5">Atmosphere</h2>
                <p style="font-size: small">Bring the game to life.</p>
                <p class="bigtext"style="color: black;">
                </p>
                    <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">? Class List</button>
                <hr>

                <h2 class="redtext" id="6">The Module</h2>
                <p style="font-size: small">What story do you want to tell?</p>
                <p class="bigtext"style="color: black;">

                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">? Class List</button>
                <hr>

                <h2 class="redtext" id="7">Customization</h2>
                <p style="font-size: small">Playing only by the book is boring.</p>

                <p class="bigtext"style="color: black;">
                </p>
                <br>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">? Class List</button>
                <hr>

                <h2 class="redtext" id="8">Planning</h2>
                <p style="font-size: small">Expecting the unexpected.</p>

                <p class="bigtext"style="color: black;">
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">? Class List</button>
                <hr>

            </div>
        </div>
    </div>
</section>


<script type='text/javascript' src='/js/jquery.js'></script>
<script type='text/javascript' src='/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/js/scrollReveal.js'></script>
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


    });

    (function ($) {
        window.scrollReveal = new scrollReveal();
    })();

    $(document).ready(function(){
        $('a[href*=#]').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                && location.hostname == this.hostname) {
                var $target = $(this.hash);
                $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) +']');
                if ($target.length) {
                    var targetOffset = $target.offset().top - 50;
                    $('html,body')
                        .animate({scrollTop: targetOffset}, 1000);
                    return false;
                }
            }
        });
    });


</script>


</body>
</html>

