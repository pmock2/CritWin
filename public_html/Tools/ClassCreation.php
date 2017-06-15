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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class Creation Quiz</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../js/ClassCreatorJQuery.js"></script>
    <script type='text/javascript' src='../js/jquery.js'></script>
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>
    <script type='text/javascript' src='../js/scrollReveal.js'></script>
    <script type="text/javascript" src="../js/ClassCreator.js"></script>
</head>
<body>
<?php echo $header ?>
<script language="JavaScript" type="text/javascript">
</script>

<section class='aboutus' id='about'>
    <div class="container2">
        <div id="intro">
            <h3 class="col-md-12 yomer-text-center">
                These questions will essentially walk the newbie through their first dungeon.
                The answers to the questions are saved in a program that keeps up with their answers as they go. The
                questions may change based on the previous answer given, however some questions will
                be asked regardless of previous answers.
            </h3>
            <br>
            <b><i>You have been assigned by the mayor of the town to retrieve a holy artifact from a thieves hideout.
                    You travel for several days until you finally spot a cave with a wooden door as its entrance.
                </i></b>

            <br>
            <hr>
            <br>
        </div>
        <div id="1" class="row">
            <!-- id="radios" style="margin: 0; padding: 0;" method="post">-->
            <b><i>You walk up to the entrance, but the door is locked. You can hear the murmuring of a guard on
                    the other side.</i></b><br>
            <input type="radio" name="radios" id="1a">Bust that thang down!<br>
            <input type="radio" name="radios" id="1b">Pick the lock<br>
            <input type="radio" name="radios" id="1c">Use a spell to open the door, either stealthily or with an
            explosion.
            <br>
            <input type="radio" name="radios" id="1d">Manipulate the guard inside to open the door for you.<br>
            <input type="radio" name="radios" id="1e">You’ve seen this door before in your studies and you remember
            that
            there is a certain combination that will let you through.
            <div align="center">
                <button id="but1" onclick="whenClicked();">Submit</button>
                <br>
                <br>
                <hr>
                <br></div>
            <!--</form>-->
        </div>


        <div id="2" style="display: none" class="row">
            <!-- id="q2" style="margin: 0; padding: 0;" method="post">-->
            <b><i>Seeing you as the door is opened, the guard takes off, too quick for you to catch him. You
                    step inside the dungeon to see a beaten man. He tells you his companion robbed him and took
                    off
                    deep in the dungeon. He begs for your help.</i></b><br>
            <input type="radio" name="radios" id="2a">Ignore him. He is none of your concern.<br>
            <input type="radio" name="radios" id="2b">Agree to find the criminal and bring back the man’s belongings.
            But
            first you’ll help the man to his feet.<br>
            <input type="radio" name="radios" id="2c">Agree to find the man and punish him somehow, and bring the man to
            his
            feet
            <br>
            <input type="radio" name="radios" id="2d">Agree to find the thief and leave him worse off than he left his
            partner.<br>
            <input type="radio" name="radios" id="2e">Tell the man that, if he is too weak to protect himself, then he
            is
            too weak to have his belongings<br>
            <input type="radio" name="radios" id="2f">Lie to the man and tell him that you plan on returning his things.
            You
            intend to keep them for yourself<br>
            <input type="radio" name="radios" id="2g">Finish off the beaten man, and hunt down the criminal to kill him
            and
            take both of their loot.<br>
            <div align="center">
                <button id="but2" onclick="whenClicked()">Submit</button>
                <br>
                <br>
                <hr>
                <br>
            </div>
            <!--</form>-->
        </div>

        <div id="3" style="display: none" class="row">
            <!-- id="q3" style="margin: 0; padding: 0;" method="post">-->
            <b><i>You enter a side room in the long hallway you’ve been traveling down. You notice 3 items on the
                    wall: A shimmering greatsword, a wooden staff with some sort of gem stuck on the top, and a bow that
                    seems to be made from a white wood. A sign hangs on the side of the room. It says,“take one”. Which
                    do you take?</i></b><br>
            <input type="radio" name="radios" id="3a">Greatsword<br>
            <input type="radio" name="radios" id="3b">Staff<br>
            <input type="radio" name="radios" id="3c">Bow
            <br>
            <input type="radio" name="radios" id="3d">None. I’d rather use my bare hands to fight.<br>

            <div align="center">
                <button id="but3" onclick="whenClicked()">Submit</button>
                <br>
                <br>
                <hr>
                <br>
            </div>
            <!--</form>-->
        </div>

        <div id="4" style="display: none" class="row">
            <!-- id="q4" style="margin: 0; padding: 0;" method="post">-->
            <b><i>As you continue down the dark caves, you see a large beast that blocks your path.</i></b><br>
            <input type="radio" name="radios" id="4a">Attack full on! Bash its brains out if you have to!<br>
            <input type="radio" name="radios" id="4b">You know that you have a perfect spell for this exact
            situation.<br>
            <input type="radio" name="radios" id="4c">Hide in the shadows until the creature lets its guard down, then
            take it out in one fell swoop.
            <br>
            <input type="radio" name="radios" id="4d">“I draw my bow”.<br>
            <input type="radio" name="radios" id="4e"> Use a combination of your weapon and magic to take the foe
            down.<br>
            <input type="radio" name="radios" id="4f">Use the power of your god to smite the creature back to the abyss
            where it came from, all the while making sure your wounds are healed.<br>
            <!--</form>-->
            <div align="center">
                <button id="but4" onclick="whenClicked()">Submit</button>
                <br>
                <br>
                <hr>
                <br>
            </div>

        </div>
        <div id="5" style="display: none" class="row">
            <!-- id="q5" style="margin: 0; padding: 0;" method="post">-->
            <b><i>How do you go about attacking the beast?</i></b><br>
            <input type="radio" name="radios" id="5a">You don’t care if I have to tear it limb from limb, it will not
            stand in your way.<br>

            <!--</form>-->
            <input type="radio" name="radios" id="5b">Using your sword and shield, you tactically attack the beast.
            Focusing on its weak points, and using your strengths to its weaknesses.<br>
            <input type="radio" name="radios" id="5c">Using your chi and bare fists, you pummel the creature to
            death.<br>
        </div>

        <div id="6" style="display: none" class="row">
            <!-- id="q6" style="margin: 0; padding: 0;" method="post">-->
            <b><i>What kind of magic do you use?</i></b><br>
            <input type="radio" name="radios" id="6a">The magic you learned from years of training at your school of
            choice, such as necromancy or illusion.<br>
            <input type="radio" name="radios" id="6b">You channel the power that exists in your very blood to lash out
            at your foe with astonishing power.<br>
            <input type="radio" name="radios" id="6c">Using the power of the being that possess your very soul, you
            blast your foe with a wave of force.
            <br>
            <input type="radio" name="radios" id="6d">Using the power of nature, you turn yourself into a creature twice
            the size of your enemy, and tear them down.<br>
            <!--</form>-->
        </div>

        <div id="7" style="display: none" class="row">
            <!-- id="q7" style="margin: 0; padding: 0;" method="post">-->
            <b><i>As you clutch your weapon and channel your senses, you...</i></b><br>
            <input type="radio" name="radios" id="7a">Play a tune on your instrument to weaken the foe before ending it
            with your sword<br>
            <input type="radio" name="radios" id="7b">Charge in like a holy tank, screaming your god’s name, as you
            smite the beast.<br>
            <input type="radio" name="radios" id="7c">You may not be the best fighter, so you ask your god to intervene
            and power you up. You shine with holy brilliance as you attack the foe.
            <br>
            <!--</form>-->
        </div>

        <div align="center" style="display: none" id="multiQuestion">
            <button id="but7" onclick="whenClicked()">Submit</button>
            <br>
            <br>
            <hr>
            <br>
        </div>


        <div id="8" style="display: none" class="row">
            <!-- id="q8" style="margin: 0; padding: 0;" method="post">-->
            <b><i>You find the thief that you heard about earlier in the dungeon. He’s been ensnared by a trap that
                    has broken his leg.</i></b><br>
            <input type="radio" name="radios" id="8a">Kill him and take the belongings he stole<br>
            <input type="radio" name="radios" id="8b">Leave him, let natural selection run its course<br>
            <input type="radio" name="radios" id="8c">Take the stolen belongings from him and leave him, he has been
            punished enough.
            <br>
            <input type="radio" name="radios" id="8d">Break his other leg, and then take his belongings<br>
            <input type="radio" name="radios" id="8e">Capture the man and force him to do as you say if he wants to
            remain alive.<br>

            <div align="center">
                <button id="but8" onclick="whenClicked()">Submit</button>
                <br>
                <br>
                <hr>
                <br>
            </div>
            <!--</form>-->
        </div>

        <div id="9" style="display: none" class="row">
            <!-- id="q9" style="margin: 0; padding: 0;" method="post">-->
            <b><i>As you walk into the final room of the dungeon, you see three stones each glowing with some sort
                    of magic. Each of the three stones emits a symbol onto the floor. You’ve never seen the symbols, but
                    somehow you understand them. The three symbols say “Power”, “Knowledge”, and “Wealth”. Which do you
                    step on?</i></b><br>
            <input type="radio" name="radios" id="9a">Power<br>
            <input type="radio" name="radios" id="9b">Knowledge<br>
            <input type="radio" name="radios" id="9c">Wealth
            <br>
            <div align="center">
                <button id="but9" onclick="whenClicked()">Submit</button>
                <br>
                <br>
                <hr>
                <br>
            </div>
            <!--</form>-->
        </div>

        <div id="10" style="display: none" class="row">
            <!-- id="q10" style="margin: 0; padding: 0;" method="post">-->
            <b><i>As you step on the symbol, the room shakes and begins to move. A trapdoor suddenly opens up under
                    your feet! Below you is a torch-lit room with body of water directly under you. What do you
                    do?</i></b><br>
            <input type="radio" name="radios" id="10a">You try to avoid falling by grabbing on to the ledge of the trap
            door.<br>
            <input type="radio" name="radios" id="10b">You can see that the water is deep enough to where you’ll be
            safe to land. Plus you’re curious as to what lies beyond.<br>
            <br>
            <div align="center">
                <button id="but10" onclick="whenClicked()">Submit</button>
                <br>
                <br>
                <hr>
                <br>
            </div>
            <!--</form>-->
        </div>

        <div id="11" style="display: none" class="row">
            <!-- id="q11" style="margin: 0; padding: 0;" method="post">-->
            <b><i>You end up falling and landing directly in the water. As you swim to the ledge, you see the
                    artifact that you’ve come here for. As you take it, and you are immediately teleported to the
                    entrance of the cave. What do you do next?</i></b><br>
            <input type="radio" name="radios" id="11a">Return to town and give the artifact to the mayor as you were
            assigned.<br>
            <input type="radio" name="radios" id="11b">Give the beaten man back his possessions (if you have them), and
            give the artifact back to the mayor.<br>
            <input type="radio" name="radios" id="11c">Keep the artifact, it looks quite expensive.
            <br>
            <input type="radio" name="radios" id="11d">You’re not done with these thieves. You re-enter the dungeon to
            find where they’re hiding to kill them all. <br>
            <input type="radio" name="radios" id="11e">The criminal you’ve been marching around has to pay for his
            crimes. You bring the artifact back to the town along with the criminal.<br>

            <div align="center">
                <button id="but11" onclick="finalClick(); whenClicked();">Submit</button>
                <br>
                <br>
                <hr>
                <br>
            </div>
            <!--</form>-->
        </div>

        <div id="errortext" style="display: none" class="yomer-text-center">
            <span style="color: red">Pick an option doofus!</span>
        </div>
        <div id="result" style="display: none">
            <div class="row">
                <h2 class="col-md-12 yomer-text-center">
                    Results
                </h2>
                <!--<p class="redtext">Variables</p>-->
                <!--<div>STR:-->
                <!--<span id="str"></span>-->
                <!--</div>-->
                <!--<div>DEX:-->
                <!--<span id="dex"></span>-->
                <!--</div>-->
                <!--<div>WIS:-->
                <!--<span id="wis"></span>-->
                <!--</div>-->
                <!--<div>INT:-->
                <!--<span id="intell"></span>-->
                <!--</div>-->
                <!--<div>CHA:-->
                <!--<span id="cha"></span>-->
                <!--</div>-->
                <div class="bigtext">
                    <div class="col-md-12 yomer-text-center">
                        <br>
                        <hr>
                        <br>
                        <div>Alignment:
                            <span id="rawalign"></span>
                        </div>
                        <div>Alignment mod:
                            <span id="alignmod"></span>
                        </div>
                        <div>Preferred Class:
                            <span id="class"></span>
                        </div>
                        <div>Secondary Class:
                            <span id="class2"></span>
                        </div>
                        <br>
                        <div>Preferred Abilities:
                            <span id="prefabs"><br></span>
                        </div>
                        <!--<div>Class Debugger:-->
                        <!--<span id="classDebug"></span>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script type='text/javascript' src='.../js/jquery.js'></script>
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

    $(document).ready(function () {
        $('a[href*=#]').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                && location.hostname == this.hostname) {
                var $target = $(this.hash);
                $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) + ']');
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
<script type="text/javascript"></script>
</html>
