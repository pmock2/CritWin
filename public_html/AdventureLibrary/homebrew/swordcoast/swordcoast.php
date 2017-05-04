<?php
include("../../header.php")
?>
<html>
<head>
    <meta charset="UTF-8">

    <title>
        Sword Coast Variant - Eragon
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
                <h2 class="redtext">Sword Coast Variant - Eragon</h2>
                <p class="bigtext">
                    This custome created module spices up a rather dull Sword Coast. Rather than play the old standard
                    "Dragon Slayer" module, you'll now be playing an epic module where the only Dragon in the land is a member of your party!
                     Battle the Way of the Dragon as they prepare to summon Tiamat back into the world. Your characters will be battling half-dragons, mages, and Dracoliches
                     that threaten the entire human race.
                </p>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#one" onclick="closeNav()">Adventure Backstory</a>
                    <a href="#two" onclick="closeNav()">Module Guide</a>
                    <a href="#2" onclick="closeNav()">The Ancient Language</a>
                    <a href="#3" onclick="closeNav()">Thelduin</a>
                    <a href="#4" onclick="closeNav()">The Dragon Egg and Other Important Lore</a>
                    <a href="#5" onclick="closeNav()">Variant - Honor and Reputation</a>
                    <a href="#6" onclick="closeNav()">Variant - Insanity</a>
                    <a href="../index.php">Back Adventure Library</a>

                </div>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()">☰ File List</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <h2 class="redtext" id="one">Adventure Backstory</h2>
                <p style="font-size: small">Everything up to the starting point</p>


                <p class="bigtext"style="color: black;">The Sword Coast has gone through its fair share of wars and trials. Thousands of years ago, two great wars, known as the
                    First and Second Great Dragon Wars, left the sword coast in ruin. This file gives a synopsis of the history of the sword coast, and how the Dragonborn came to be.
                </p>
                <a href="swordcoastcontent/The%20History%20of%20the%20Sword%20coast%20and%20The%20Great%20Dragon%20Wars.pdf">Download - The History of the Sword Coast and the Great Dragon Wars</a>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ File List</button>
                <hr>

                <h2 class="redtext" id="two">Module Guide</h2>
                <p style="font-size: small">guides for the three different modules used in this adventure</p>

                <!--                <img class="yomer-center" src="Dwarf.jpg" width="25%">-->
                <p class="bigtext"style="color: black;">
                    This file gives descriptions for the three different modules used in this adventure and how they link up to one another. It also
                     includes an extensive backstory for The Lost Mines of Phandelver that gets the party started on their epic quest. Each module also
                    contains module notes that state the differences between the real modules and their variant forms.
                </p>
                <a href="swordcoastcontent/Module%20Order.pdf">Downlaod - Module Order</a>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ File List</button>

                <hr>

                <h2 class="redtext" id="2">The Ancient Language</h2>
                <p style="font-size: small">A Second form of magic used by the spoken word.</p>

<!--                <img class="yomer-center" src="Dwarf.jpg" width="25%">-->


                <p class="bigtext"style="color: black;">
                   Adopted from Eragon, The Ancient Language was used by the Dragonriders of old along with their Dragon companions as a seperate means of casting spells.
                     Each word in The Ancient Language has power. However, this language can only be used with the proper training. This file gives a detailed description of The Ancient Langiage as
                     well as a short dictionary for different translations.
                </p>
                <a href="swordcoastcontent/The%20Ancient%20Language.pdf">Downlaod - The Ancient Language</a>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ File List</button>
                <hr>
                <h2 class="redtext" id="3">Thelduin</h2>
                <p style="font-size: small">The Dragon of Prophesy</p>
<!--                <img class="yomer-center" src="Elf.jpg" width="40%">-->

                <p class="bigtext"style="color: black;">
                    Thelduin: The Cursed Chromatic Dragon said to bring about the age of man. Yet, he finds himself working alongside the
                    party to end Tiamat's reign and fight the cultists. Thelduin finds himself lost in a chaotic world, but still loyal to his closest friends.
                    Will he keep the nature of his friendship til death? Or will he return to his Draconic nature and carry out what he was created to do. This file
                    will give you Theldui's character synopsis as well as a guide to how his stats, powers, and feats work as he levels up.
                </p>
                <a href="swordcoastcontent/Thelduin.pdf">Download - Thelduin</a>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ File List</button>
                <hr>
                <h2 class="redtext" id="4">The Dragon, The Egg, and Other Important Lore</h2>
                <p style="font-size: small">Several Bits of Lore Created During my Initial Runthrough</p>
<!--                <img class="yomer-center" src="Gnome.jpg" width="20%">-->

                <p class="bigtext"style="color: black;">
                    This file contains several ideas that I came up with during the initial run through of this campaign. It explains the backstory of the egg and how it
                     was placed in the mines, the plans and lore of the Way of the Dragon cultists, and the armor of prophesy. This file also gives a short description of
                    Thelduin and how he came to be. You can take the contents in this file as canon or non-canon. However, there may be some contradictions in this files compared
                    to the main story files. My suggestion is that you take the contents in this file and morph them to what you'd like.
                </p>
                <a href="swordcoastcontent/The%20Stone.pdf">Download - The Dragon, The Egg, and Other Important Lore</a>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ File List</button>
                <hr>
                <h2 class="redtext" id="5">Variant Rules - Honor and Reputation</h2>
                <p style="font-size: small">Seperate Ability Scores for Honor and Reputation</p>

<!--                <img class="yomer-center" src="HalfElfBard.jpg" width="12.5%">-->

                <p class="bigtext"style="color: black;">Since the party travels from town to town often in this adventure, they begin to build a reput
                    ation for themselves. A character's reputation score determines the likely hood of a person hearing about that individual.
                    If the party travels to a town across the land, they probably won't be as well known as they are in towns that neighbor they're home town.
                    Honor on the other hand is a score that ranges from -100 to +100. Since this module is centered around good and evil, the honor score gives
                    the character a raw number that can track how good or bad they are. However, there are also benefits and drawbacks associated with honorable and
                    dishonorable characters.
                </p>
                <a href="swordcoastcontent/Honor%20and%20Reputation.pdf">Download - Honor and Reputation</a>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ File List</button>
                <hr>
                <h2 class="redtext" id="6">Variant Rule - Sanity</h2>
                <p style="font-size: small">Slowly, but surely, your party will lose their minds</p>

<!--                <img class="yomer-center" src="HalfOrc.jpg" width="12.5%">-->
                <p class="bigtext"style="color: black;">
                    Insanity at first seems intimidating as DM. The fear of one of your party members losing their minds is scary, but not as real as you might think. A player's
                     sanity score only comes into play a few times throughout this adventure, and it is ultimately up to you when you make your players test their sanity.
                     Personally, I only had one character come close to going insane out of the four that ran through this module, but it definitely spices things up and
                    adds to the over all feel of the module
                  
                </p>
                <a href="swordcoastcontent/Insanity.pdf">Download - Sanity</a>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ File List</button>
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



