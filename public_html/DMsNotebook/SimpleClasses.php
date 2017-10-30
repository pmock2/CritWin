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
                <h2 class="redtext">Simple Classes</h2>
                <p class="bigtext">
                    A class isn’t just a stat modifier; it determines who your character is and the path they’re going
                    to take. There are an abundance of class lists out there that crunch the numbers to find the optimal
                    choice for creating the most efficiently-designed character. But if you just want to find a
                    character class that fits your playing style and you don’t want to scroll through 50 pages of text
                    in the Player’s Handbook, here’s our take on the benefits and drawbacks of the various playable
                    classes. </p>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#one" onclick="closeNav()">Barbarian</a>
                    <a href="#2" onclick="closeNav()">Bard</a>
                    <a href="#3" onclick="closeNav()">Cleric</a>
                    <a href="#4" onclick="closeNav()">Druid</a>
                    <a href="#5" onclick="closeNav()">Fighter</a>
                    <a href="#6" onclick="closeNav()">Monk</a>
                    <a href="#7" onclick="closeNav()">Paladin</a>
                    <a href="#8" onclick="closeNav()">Rogue</a>
                    <a href="#9" onclick="closeNav()">Ranger</a>
                    <a href="#10" onclick="closeNav()">Sorcerer</a>
                    <a href="#11" onclick="closeNav()">Warlock</a>
                    <a href="#12" onclick="closeNav()">Wizard</a>
                    <a href="index.php">Back to DMs Notebook</a>

                </div>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()">☰ Class List</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <h2 class="redtext" id="one">Barbarian</h2>
                <p style="font-size: small">Brutal, Strong, Mostly Naked</p>
                <!--                <img class="yomer-center" src="Dragonborn.jpg" width="25%">-->

                <p class="bigtext" style="color: black;">
                    These guys are basically just big angry murder machines. What they lack in armor they make up for in
                    pure unadulterated violence. Once they rage, every person in 60 feet becomes a possible recipient of
                    their blood-soaked fury. As a Barbarian, both your Hit Dice and your great axe will let your lonely
                    D12 finally feel useful. As far as stats go, if you have an Intelligence of 8 or over, you're doing
                    it wrong. Put all your chips on Strength; it’s all you’ll ever need. Want to kill a thing? Strength
                    check with advantage! Want to move a heavy thing? Strength check with advantage! Just be prepared
                    for the entire party to rely on you for all their strength checks as well. One final warning:
                    squishy magic users can still get the upper hand on you by doing, you know, magic stuff. So… watch
                    out for that.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>

                <h2 class="redtext" id="2">Bard</h2>
                <p style="font-size: small">Support, defensive, also sings</p>

                <!--                <img class="yomer-center" src="Dwarf.jpg" width="25%">-->


                <p class="bigtext" style="color: black;">
                    Do you, in fact, play instruments in real life and really like to it show off? Do you like to be
                    center stage? As a bard, you’ll always be surrounded by constant music. You’ll have the irritating
                    ability to sing your way out of any combat scenario, much to the anger of the rest of your party who
                    just wanted the XP. You can gain skills and learn spells from pretty much any class, and this is
                    assured to annoy others. [I mean, seriously, think about it: A 9th level Paladin who just learned
                    this awesome new spell that they can only do because of their lifetime devotion to their god, and
                    this irritating little bard says, “Oh yeah, I can do that one too!” It’s infuriating. But I
                    digress.] Bards can do most anything, true, but none of it very well. They’re amazing with lore and
                    have great backstories...but if you’re in a hack-and-slash sort of party, you'll generally be the
                    first to be fed to the dragon.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>
                <h2 class="redtext" id="3">Cleric</h2>
                <p style="font-size: small">healer, saver, mumbles a lot about their god</p>
                <!--                <img class="yomer-center" src="Elf.jpg" width="40%">-->

                <p class="bigtext" style="color: black;">
                    By far the most OP class. You’ll naturally be the assumed leader because you will be the person
                    everyone will be relying upon to keep them from dying. With a cleric on your side, you’ll never have
                    to worry about a party wipe again (probably). Good luck in choosing from 300+ deities, though.
                    However, once you find your Higher Power, relax! Your God will care of everything for you. You’ll
                    really only be able to use bludgeoning weapons, and while that’s very limiting if you’re a weapons
                    guy, being a weapons guy really defeats the purpose of being a cleric in the first place. Your
                    abundance of spells will easily make up for physical combat. We also recommend charging 5 gold for
                    each person who asks you to heal them. You'll make a ton of money. You’re welcome.

                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>
                <h2 class="redtext" id="4">Druid</h2>
                <p style="font-size: small">nature, caster, talks to trees</p>
                <!--                <img class="yomer-center" src="Gnome.jpg" width="20%">-->

                <p class="bigtext" style="color: black;">
                    Do you spend lots of time hanging out in the woods talking to squirrels? [Yes, I’ve known people who
                    actually do this in real life, no joke.] As a Druid, if you’re not talking to squirrels, you are a
                    squirrel...literally. They’re the hippies of the D&D universe: they can always find, roll, and smoke
                    the good stuff. “Herbalism” kit included (wink, wink). It really is ridiculous to be able to go from
                    a weak, useless little shrimp to a gigantic brown bear. You can also go up to a herd of deer to get
                    local news, or just lead them into a death trap if you prefer (why not?). If you're looking for
                    spectacular spell-casting you might not find it here, though, unless you want to identify a specific
                    type of tree (at which you will be extraordinary). As an extra perk, you’ll have access to one of
                    the most useless languages in the D&D universe: Druidic. That way, you and the five other Druids
                    you’ll ever possibly meet will be able to communicate effectively.

                </p>

                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>
                <h2 class="redtext" id="5">Fighter</h2>
                <p style="font-size: small">Sword, Shield, kills everything</p>

                <!--                <img class="yomer-center" src="HalfElfBard.jpg" width="12.5%">-->

                <p class="bigtext" style="color: black;">It really is ironic that in the one class you'd expect to have
                    nothing to do with magic, magic prevails! But if you wanted to use magic, why choose a fighter in
                    the first place? To be honest, an Eldritch Knight’s magical abilities are not really that
                    remarkable. As a Battlemaster fighter though, you’ll have access to very specific combat techniques,
                    so there’ll be no more saying “I swing my sword,” as a default
                    I’m-not-really-paying-attention-to-the-game move. You’ll also have access to ALL weapons and ALL
                    armor. The options are endless, but some are admittedly less useful than others. The Champion is
                    Fourth Edition’s resurrected ghost. If you actually liked 4E for some odd reason, and are looking
                    for that nostalgia, be a Champion fighter. If you’re a person who knows nothing about D&D but liked
                    swinging swords as a kid, this one is for you.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>
                <h2 class="redtext" id="6">Monk</h2>
                <p style="font-size: small">Unarmed, Ki, basically Krillin</p>

                <!--                <img class="yomer-center" src="HalfOrc.jpg" width="12.5%">-->
                <p class="bigtext" style="color: black;">
                    As a monk, you generally have three options: You can be a magic Bruce Lee, a ninja, or an
                    air-bender. If you have a thing for badly-dubbed Kung Fu movies but want more Crouching Tiger Hidden
                    Dragon, this class is for you. You’ll fit in great if you watch Dragonball Z and have always wanted
                    to be Krillin, but without the destructo disk...or flying...or anything useful... Actually, you
                    might just be Yamcha. Alternatively, you could be a ninja. ‘Nuff said. Picture it: Casually walking
                    around swinging your katanas, your shurikens, your nunchakus, and all those other
                    impossible-to-pronounce Japanese words. Or, as your last option, you can be a water, earth, fire, or
                    air-bender...or all four if you want. However, I personally find punching someone in the face 7
                    times per turn much more fun. </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>
                <h2 class="redtext" id="7">Paladin</h2>
                <p style="font-size: small">Tanky, ultra-damage, says a lot of made up quotes</p>
                <!--                <img class="yomer-center" src="Halfling.jpg" width="25%">-->

                <p class="bigtext" style="color: black;">
                    Oh man… divine tanks… tanks blessed by the gods… I mean, how else would you describe this unkillable
                    ridiculousness? As a Paladin, you’ll bring peace and tranquility everywhere you go by hunting down
                    and mercilessly cutting off the heads of every possibly evil creature. You like armor? How about
                    holy armor? Weapons? How about holy weapons? Smite first, and convert later! You’ll be on a mission
                    from God… minus the sunglasses. You’ll only have a limited selection of magic, but why focus on that
                    when your radiant weapon can take more people down than a televangelist on a healing spree! Just
                    remember to keep your “Lay on Hands” for yourself (if you know what I mean) and you’ll never have to
                    worry about death saves again. </p>
                <!--                <img class="yomer-center" src="SamGif.gif">-->
                <br>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>
                <h2 class="redtext" id="8">Rouge</h2>
                <p style="font-size: small">stealthy, sneaky, hisses when they comes into the light</p>
                <!--                <img class="yomer-center" src="Human.jpg" width="30%">-->

                <p class="bigtext" style="color: black;">
                    Sneaky bastards. Always finding excuses for going stealth. In the middle of the desert? Can still
                    successfully go stealth. These guys can do more damage with a dagger than a barbarian with a great
                    sword. However, if after the first round, you can’t go back into stealth, you’re useless. In fact,
                    if you’re not in stealth in general, you’re useless. Don’t worry though, you’ll drop most enemies
                    before everyone else even enters initiative. You’ll always be first to find the loot, and last to
                    share. Loot before loyalty! And if someone takes it first, you can just proceed to take it from
                    their pocket. In fact, you’ll pretty much always have your hands in other people’s stuff. Just be
                    ready for your party to punish you by forcing you to find and disarm every trap, and pick every
                    lock. </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>
                <h2 class="redtext" id="9">Ranger</h2>
                <p style="font-size: small">Wild, Free roaming, basically Bear Grylls with a bow</p>
                <!--                <img class="yomer-center" src="Tiefling.png" width="25%">-->

                <p class="bigtext" style="color: black;">As a Ranger, you’ll basically be a western pioneer of the D&D
                    world, a frontier trail blazer. You will be able to find an animal’s footprints in mud on a rainy
                    day in the dark. That’s really only useful though if your DM requires periodic survival checks when
                    going from town to town. You’ll have about as much magic as a Druid; in fact you’ll really just be a
                    Druid (or a lunatic with a knife in each hand) with a bow, but without the benefit of shapeshifting
                    into animals. You do get an animal companion...for what that's worth. You’ll also be the only one in
                    the party who can identify which plants are edible and which ones are poisonous. Comes in handy when
                    you're trying to kill that one player who won't shut up about the rules. After spending most of your
                    life in the woods alone, you might periodically break into song with such Elvish classics as “Mary
                    Had a Little Lamb.” However, for the vast majority of situations you will encounter, the only phrase
                    you'll need will be, “I draw my bow!”</p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>

                <h2 class="redtext" id="10">Sorcerer</h2>
                <p style="font-size: small">Caster, splash damage, squishier than a squid</p>
                <!--                <img class="yomer-center" src="Tiefling.png" width="25%">-->
                <p class="bigtext" style="color: black;">
                    The rock stars of D&D Magic users, which make every Wizard seethe with jealousy. Far from having to
                    tediously learn spells from ancient arcane tomes, Sorcerers were born with this shit! You can
                    casually spray fire and acid from your fingers whenever the mood strikes. Sorcerers come in two
                    flavors: Draconic and Wild. Was being a Dragonborn not enough dragon for you? As a Draconic
                    Sorcerer, you can be a dragon. Pick a dragon element, grow dragon wings, terrify villagers by
                    convincing them you are, indeed, a dragon. On the other hand, if you're a little bit crazy, and for
                    some reason being a dragon is not appealing, you can choose to be a Wild Magic Sorcerer; gaining
                    your power from the random chaos that underlies existence. With every roll of the dice, you bring
                    new insanity to the campaign, with such fun possibilities as transforming into a potted plant,
                    randomly turning blue, or growing a long beard of feathers that remains until you sneeze, at which
                    point the feathers explode out from your face. But whatever path you choose, you will be sure to
                    have all the scantily-clad Drow women you could ever want, swooning at the mere mention of your
                    name.

                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>


                <h2 class="redtext" id="11">Warlock</h2>
                <p style="font-size: small">Battle caster, dark/mysterious, literally sell your soul</p>
                <!--                <img class="yomer-center" src="Tiefling.png" width="25%">-->
                <p class="bigtext" style="color: black;">
                    As long as you’re comfortable putting your soul on Craigslist, read on. As a Warlock, you will be no
                    more than a puppet for the insidious power you’re serving, whether it’s a crazy old elf, the devil
                    himself, or some unspeakable horror straight out of H.P. Lovecraft. After the initial thrill of
                    being the Chosen One of a powerful dark soul-crusher, you'll probably end up looking at the benifits
                    other classes. That being said, a warlock makes a great multiclass. You get 2 leveled-spells for
                    every SHORT rest; however, more often than not you’ll find yourself using Eldritch Blast so much
                    that the words will start to lose their meaning. You also get your very own set of invocations that
                    will make you feel just as special as your mom says you are. No matter what independent actions you
                    may take, you will find that the DM will use you and your otherworldly patron to his own diabolical
                    ends, and if you have the audacity to defy the great DM’s will (who might as well be your
                    otherworldly patron), you will be utterly cast aside as the useless ragdoll that you are. That’s
                    right: no more magic. Therefore if you decide to become a Warlock, it’s best to be mentally prepared
                    to go back to the life of a common dirt farmer at a moment’s notice.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
                <hr>

                <h2 class="redtext" id="12">Wizards</h2>
                <p style="font-size: small">pew, pew, pew</p>
                <!--                <img class="yomer-center" src="Tiefling.png" width="25%">-->
                <p class="bigtext" style="color: black;">
                    Pew! Pew! Pew! Magic Stuff! Need a campsite? Magic! Need a giant mansion? Magic! Wizards are the
                    solution to every problem. Why would you even need any other classes? Tired of playing and just want
                    to take over as DM? Wish spell! But once you’re out of spell slots, that’s it. You’re done. You’ll
                    be looking for any excuse for a long rest, even if you happen to be on a plane of lava. And for the
                    love of God, don’t lose your spell book! Even if you’ve been casting fireball your whole life, you
                    won’t know how to do it if you can’t read it on a piece of paper every morning. And don’t even get
                    me started on the different schools. Good God! What do they mean? What’s there, like, 13 of those
                    things? From level 1-5 be prepared to content yourself with hiding behind your favorite meat shield,
                    but after level 6, why do you even need a party anymore? But it’s not all summoning meteors and
                    trapping souls in glass jars. If you think you can keep up with...*takes deep breath*:<b
                        style="font-size: medium"> a multitude of spell names, descriptions, levels, and needed
                        components, which of the various spells you have chosen for that particular day, your number of
                        spell slots and how many you’ve used during the day, along with any magic items or potions you
                        happen to have collected along the way…</b> the payoff of becoming what amounts to an omnipotent
                    deity is, well, simply magical.
                </p>
                <button class="yomer-center" style="color: darkred;" onclick="openNav()"
                ">☰ Class List</button>
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
</html>

