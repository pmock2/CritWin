<?php
include("header.php")
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
                <h2 class="redtext">Simple Races</h2>
                <p class="bigtext">
                    Welcome D&D enthusiasts! For your convenience, here’s a handy reference guide to all the playable
                    races in the 5th Edition D&D Player’s Handbook, arranged in alphabetical order.
                </p>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#one" onclick="closeNav()">Dragonborn</a>
                    <a href="#2" onclick="closeNav()">Dwarf</a>
                    <a href="#3" onclick="closeNav()">Elf</a>
                    <a href="#4" onclick="closeNav()">Gnome</a>
                    <a href="#5" onclick="closeNav()">Half-Elf</a>
                    <a href="#6" onclick="closeNav()">Half-Orc</a>
                    <a href="#7" onclick="closeNav()">Halfling</a>
                    <a href="#8" onclick="closeNav()">Human</a>
                    <a href="#9" onclick="closeNav()">Tiefling</a>
                    <a href="index.php">Back to DMs Notebook</a>

                </div>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()">☰ Race List</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <h2 class="redtext" id="one">Dragonborn</h2>
                <p style="font-size: small">Description</p>
                <img class="yomer-center" src="Dragonborn.jpg" width="25%">

                <p class="bigtext"style="color: black;">
                    In a world where summoning the apocalypse is just your typical Tuesday, it turns out being able to breath fire is actually quite a lackluster skill. Sure, being a dragon-dude is awesome...for about two minutes. And while being able to choose from a variety of elemental breath weapons makes for really cool role-playing, it ends up being quite redundant in actual combat situations. However, if you want the distinction of being able to tell local villagers, “I am born of the dragon,” and then threaten them with fire and watch them cower in fear, being a Dragonborn might be for you.
                      </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Race List</button>
                <hr>

                <h2 class="redtext" id="2">Dwarf</h2>
                <p style="font-size: small">Strong, honor-bound, insecure about their height</p>

                <img class="yomer-center" src="Dwarf.jpg" width="25%">


                <p class="bigtext"style="color: black;">
                    Really, the main benefit to being a Dwarf is the epic facial hair. Who doesn’t want to have an
                    awesome beard? And Dwarves are known for their big, big beards. They’re also known for their copious
                    alcohol consumption. But with stomachs made of iron (no, not literally), they’re definitely not
                    lightweights when it comes to drinking, and they do quite a lot of it. Known for their excellent
                    craftsmanship, short stature, and equally short tempers, when you actually get to know a Dwarf,
                    you’ll find they have hearts of gold. But don’t touch their gold. Or their beards. If you want to be
                    a sturdy, slow-moving, axe-wielding tank with a stereotypically Scottish accent, then Dwarves are
                    definitely for you.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Race List</button>
                <hr>
                <h2 class="redtext" id="3">Elf</h2>
                <p style="font-size: small">Gentle, Light, Deadly</p>
                <img class="yomer-center" src="Elf.jpg" width="40%">

                <p class="bigtext"style="color: black;">
                    Everybody wants to be an Elf. Why, you ask? Legolas. Everybody wants to skateboard down castle
                    stairs on an Orc shield while shooting three arrows at a time. I mean, you have to admit that’s
                    pretty epic. But when it comes right down to it, Elves are just pointy-eared, magic wielding,
                    pansies shooting bows from trees. And they always manage to have perfect hair, even in the middle of
                    the most intense combat situations. Also, be advised, they have a narcissistic superiority complex
                    that stems from being able to live forever. And they really, really love nature...if you know what I
                    mean. So why be an Elf? So you can skateboard down castle stairs on an Orc shield while shooting
                    three arrows at a time. Why else?
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Race List</button>
                <hr>
                <h2 class="redtext" id="4">Gnome</h2>
                <p style="font-size: small">Small, Smart, kinda annoying</p>
                <img class="yomer-center" src="Gnome.jpg" width="20%">

                <p class="bigtext"style="color: black;">
                    No, not the garden variety. There are really only a few benefits to being a Gnome:
                </p>
                <ol class="bigtext" style="color: black;">
                    <li> able to use magic to piss of your friends
                    <li>Getting away with making inappropriate jokes whenever you want
                    <li>Having the skill to build any piece of technology your little Steampunk heart desires.
                </ol>
                <p class="bigtext"style="color: black;">
                    Other than that, they’re mostly just annoying little creeps. But if you’re a practical joker and/or
                    technology guru, then Gnomes are for you.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Race List</button>
                <hr>
                <h2 class="redtext" id="5">Half-Elf</h2>
                <p style="font-size: small">Charismatic, multi-skilled, <b>Very</b> Punchable Face</p>

                <img class="yomer-center" src="HalfElfBard.jpg" width="12.5%">

                <p class="bigtext"style="color: black;">Do you have the need to constantly be the center of attention, no matter where you
                    are? Are you the hardcore role-player who brings his own instrument to play just because your
                    character happens to be a bard? Rejected from both Elven and Human society, most DM’s will probably
                    reject you too. Sure, your character will likely be able to talk himself out of most any situation,
                    but when it takes you an hour and a half to explain your backstory in the form of a dramatic
                    Shakespearean monologue, your fellow players will probably be a bit less forgiving.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Race List</button>
                <hr>
                <h2 class="redtext" id="6">Half-Orc</h2>
                <p style="font-size: small">Big, Bad, Killing Machine</p>

                <img class="yomer-center" src="HalfOrc.jpg" width="12.5%">
                <p class="bigtext"style="color: black;">
                    You might as well go ahead and change your name to Biggs McLargehuge right now. If a Strength of 20
                    and an Intelligence of 3 sounds like a fun Friday night, pick up that axe and start swinging! Your
                    speech will, of course, be limited to four options (one of which being a simple grunt), but
                    monologues are for Half-Elves anyway! You might be the loveable half-wit, but with your ridiculously
                    oversized weaponry, no one will be happy or alive when they get on your bad side.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Race List</button>
                <hr>
                <h2 class="redtext" id="7">Halfling</h2>
                <p style="font-size: small">Small, Nimble, <b>Definitely</b> Not a Hobbit</p>
                <img class="yomer-center" src="Halfling.jpg" width="25%">

                <p class="bigtext"style="color: black;">
                    Not to be confused with Hobbits: these midgets wear shoes! Tolkien must have had a foot fetish.
                    Aside from the whole issue of footwear, as a Halfling you’re pretty much limited to two career
                    choices; namely, farming or thieving. If you choose farming, your character will be very limited in
                    its ability to, well, contribute to the campaign in any way, and if you really desire to role-play
                    the whole farming experience, I’d suggest you forego D&D altogether and just play Tractor Simulator
                    2016 instead. If you want to be a thief, Halflings are quite adept at such, and even your closest
                    friends will find their missing gold in your miniature-sized pockets. So if you’re cool being
                    confused with a child or a beardless Dwarf, you can be a Halfling if you want. Not sure why you’d
                    want to, but I guess it takes all kinds.
                </p>
                <img class="yomer-center" src="SamGif.gif">
                <br>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Race List</button>
                <hr>
                <h2 class="redtext" id="8">Human</h2>
                <p style="font-size: small">Stat bonuses galore, extra feat, great at filing paperwork.
                <img class="yomer-center" src="Human.jpg" width="30%">

                <p class="bigtext"style="color: black;">
                    First of all, why in God’s name would you want to play as a human?! You are a human!! If this
                    information comes as a shock, well, I don’t know what to tell you. I mean seriously though, out of
                    all the amazing, interesting, and exciting options, you decide to be literally the most
                    unexceptional race imaginable? If you really want to play a human, go walk outside. Don’t get me
                    wrong, you do get really good starting stats, so there’s, you know, that. A human works great for
                    the “I really don’t care what race I am” category as well and works with just about any class.
                    So if you aren't sure or don't care what class you want to be, be a human. But if you’re looking for anything that’s
                    in any way unique or entertaining, I’d suggest looking elsewhere.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Race List</button>
                <hr>
                <h2 class="redtext" id="9">Tiefling</h2>
                <p style="font-size: small">Cunning, Inherently Evil, Horned</p>
                <img class="yomer-center" src="Tiefling.png" width="25%">

                <p class="bigtext"style="color: black;">
                    [Disclaimer: To be frank, we hate Tieflings. All of them. They’re soulless, backstabbing,
                    manipulating, and thoroughly dishonest. And no Tiefling anywhere has ever done anything good. If
                    they existed in the real world, we’d build a wall to keep them out. Therefore, be advised that our
                    descriptions *may* be ever-so-slightly biased.]
                    Basically, Tieflings are the troubled emo teenagers of the D&D Universe. If having horns, casting
                    hellfire, and cruelly and mercilessly betraying people who once called you their friend sounds fun,
                    you could, I suppose, choose to be a Tiefling (but we’d strongly advise you to reconsider). Sure,
                    you would be a badass, but you’d be the vilest, most hated, loathsome badass ever. Before you commit
                    to being a Tiefling, do a little soul-searching first. Do you really want to sell your soul to
                    Satan? Although Satan doesn’t exist in the D&D Universe, if you do choose to be a Tiefling, you
                    will, without question, end up in hell. Simply because Tieflings are terrible people. Furthermore,
                    if we find out you’re a Tiefling, we’ll permanently ban you from this site. Think we’re joking? Try
                    us, I dare you… Okay not really. But Tieflings can’t be trusted.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Race List</button>
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

    //    $(document).ready(function () {
    //        function filterPath(string) {
    //            return string
    //                .replace(/^\//, '')
    //                .replace(/(index|default).[a-zA-Z]{3,4}$/, '')
    //                .replace(/\/$/, '');
    //        }
    //
    //        var locationPath = filterPath(location.pathname);
    //        var scrollElem = scrollableElement('html', 'body');
    //
    //        $('a[href*=#]').each(function () {
    //            var thisPath = filterPath(this.pathname) || locationPath;
    //            if (locationPath == thisPath
    //                && (location.hostname == this.hostname || !this.hostname)
    //                && this.hash.replace(/#/, '')) {
    //                var $target = $(this.hash), target = this.hash;
    //                if (target) {
    //                    var targetOffset = $target.offset().top - 50;
    //                    $(this).click(function (event) {
    //                        event.preventDefault();
    //                        $(scrollElem).animate({scrollTop: targetOffset}, 400, function () {
    //                            location.hash = target;
    //                        });
    //                    });
    //                }
    //            }
    //        });
    //
    //        // use the first element that is "scrollable"
    //        function scrollableElement(els) {
    //            for (var i = 0, argLength = arguments.length; i < argLength; i++) {
    //                var el = arguments[i],
    //                    $scrollElement = $(el);
    //                if ($scrollElement.scrollTop() > 0) {
    //                    return el;
    //                } else {
    //                    $scrollElement.scrollTop(1);
    //                    var isScrollable = $scrollElement.scrollTop() > 0;
    //                    $scrollElement.scrollTop(0);
    //                    if (isScrollable) {
    //                        return el;
    //                    }
    //                }
    //            }
    //            return [];
    //        }
    //
    //    });

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

