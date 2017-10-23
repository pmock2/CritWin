<?php
//include("header.php")
?>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Payton
 * Date: 7/16/2016
 * Time: 1:42 AM
 */
include_once("check_login_status.php");
$varfield = "Login";
$dropfield = "Login";
// If user is logged in, header them away
if (isset($_SESSION["username"])) {
    $varfield = "Welcome " . $_SESSION["username"];
    $dropfield = "View Profile";
}



// Initialize any variables that the page might echo
$u = "";
$e = "";
$p = "";
$sex = "Male";
$userlevel = "";
$country = "";
$joindate = "";
$lastsession = "";

// Make sure the _GET username is set, and sanitize it
if (isset($_GET["u"])) {
    $u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
} else {
    header("location: http://www.critwin.com");
    exit();
}

// Select the member from the users table
$sql = "SELECT * FROM users WHERE username='$u' AND activated='1' LIMIT 1";
$user_query = mysqli_query($db_conx, $sql);
// Now make sure that user exists in the table
$numrows = mysqli_num_rows($user_query);
if ($numrows < 1) {
    header("location: http://critwin.com/index.php" . $_SESSION["username"]);
    echo '<strong style="color:#F00;"><br>Username or password incorrect</strong>';
    exit();
}
// Check to see if the viewer is the account owner
$isOwner = "no";
$form = '';
if ($u == $log_username && $user_ok == true) {
    $isOwner = "yes";
}

// Fetch the user row from the query above
while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
    $profile_id = $row["id"];
    $e = $row["email"];
    $gender = $row["gender"];
    $country = $row["country"];
    $userlevel = $row["userlevel"];
    $signup = $row["signup"];
    $lastlogin = $row["lastlogin"];
    $joindate = strftime("%b %d, %Y", strtotime($signup));
    $lastsession = strftime("%b %d, %Y", strtotime($lastlogin));

    if ($gender == "f") {
        $sex = "Female";
    }
    if ($userlevel == "a") {
        $userlevel = "Normal User";
    }
    if ($userlevel == "b") {
        $userlevel = "Moderator";
    }
    if ($userlevel == "c") {
        $userlevel = "Administrator";
    }

    if ($isOwner == "yes") {
        $message = "Welcome";
        $form = '<form action="changepassword.php">
                <button class="biggertext">Change Password</button>
            </form>
            
            <form action="logout.php">
            <button class="biggertext">Log Out</button>
                </form>';



    }

    if ($isOwner == "no") {
        $message = "Welcome to $u's profile.";

    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $u; ?></title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <!--    <script src="loginforms/js/main.js"></script>-->
    <script src="js/ajax.js">

        function userLevel(<?php echo $userlevel; ?>) {
            var level = <?php echo $userlevel; ?>;
            if (level == "a")
                level = "Normal User";
            if (level == "b")
                level = "Moderator";
            if (level == "c")
                level = "Administrator";

            document.getElementById("userlevel").innerHTML = level;
        }

    </script>

    <meta charset="UTF-8">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="google-site-verification" content="PJSAZ0KSeqiw_wB5pURWWUEb2ESbYUg0bNm3T4kjuYQ"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='js/DropDown.js'></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-color: black">

<?php echo $header ?>

<section class='aboutus' id='about'>
    <div id="pageMiddle" class="container2">
        <div class="row">
            <div class="col-md-12 yomer-text-center">
                <h2 class="redtext"><?php echo $u; ?></h2>
                <div class="biggertext">
                <p><b><?php echo $message; ?></b></p>
                <p>User Level: <?php echo $userlevel ?></p>
                <p>Email: <?php echo $e ?> </p>
                <p>Join Date: <?php echo $joindate; ?></p>
                <p><a href="/Threads/index.php">Threads!</a></p>
                    </div>

                <?php echo $form; ?>


            </div>
            <br>
        </div>

    </div>


</section>
<section class='aboutus' id='about'>
    <div id="pageMiddle" class="container1">
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <p class="bigtext">Bio</p>
<hr />
<?php include_once("template_status.php"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <p class="bigtext">Cards</p>
                <ul id="card_list">
                    <!-- Insert list of cards here !-->
                </ul>
                <div id="card_target"></div>
            </div>
        </div>

        </div>
    </section>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/scrollReveal.js'></script>
<!--<script type='text/javascript' src='js/user.js'></script>-->
<script type="module">
    import {Card} from '../js/card.js'

    (function(){
        // Make request for cards and list them in DOM.
       cardRequestPromise().then((resp)=>{
            let cards = resp.map((_card)=>{
                let card = JSON.parse(_card["card"]);
                card["card"] = JSON.parse(card["card"]);
                return card;
            });
            addCards(cards);
        })
    })();

    /**
     * Make an asychronous request to retrieve card data matching username.
     */
    function cardRequestPromise(){
        //TODO: CARD_API_URL needs to be changed once out of testing
        const username = "<?php echo $u?>";
        const CARD_API_URL = `http://critwin.com/test2/loginforms/cardapi.php?u=${username}`;
        return(
            new Promise((resolve, reject)=>{
                fetch(CARD_API_URL)
                    .then((resp)=>{
                        resolve(resp.json());
                    })
                    .catch((err)=>{
                        reject(err);
                    })
            })
        )
    }

    /**
     * Add list elements to DOM for each card.
     * @param userCards array of cards.
     */
    function addCards(userCards){
        let cardList = document.querySelector('#card_list');
        userCards.forEach((userCard)=>{
            console.log(userCard.title);
            let userCardContainer = document.createElement('li');
            userCardContainer.setAttribute('class','user-card-container');
            let userCardElement = document.createElement('div');
            userCardElement.setAttribute('class', 'user-card');
            userCardElement.setAttribute('id', userCard.id);
            userCardElement.textContent = userCard.card.title;

            userCardElement.addEventListener('click', ()=>{
                let cardData = userCard.card;
                let _card = new Card(cardData.title, cardData.subtitle, cardData.armorClass, cardData.hitPoints, cardData.cardSpeed, cardData.skills, cardData.senses, cardData.languages,
                    cardData.challengeRating, [ cardData.scores.str, cardData.scores.dex, cardData.scores.con, cardData.scores.int, cardData.scores.wis, cardData.scores.cha], cardData.abilities,
                    cardData.actions, cardData.reactions, cardData.legendaryActions, cardData.notes);
                document.querySelector('#card_target').innerHTML = '';
                _card.render('#card_target')
            });

            userCardContainer.appendChild(userCardElement);
            cardList.appendChild(userCardContainer);
        })
    }
</script>
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