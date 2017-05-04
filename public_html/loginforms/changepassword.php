<?php
include("header.php")
?>
<?php

include_once("check_login_status.php");
// If user is not logged in, header them away
if (isset($_SESSION["username"])) {
    header("location: http://critwin.com/index.php");
    exit();
}

// Initialize any variables that the page might echo
$u = $_SESSION["username"];


if (isset($_POST["p1"])) {
// CONNECT TO THE DATABASE
    include_once("db_conx.php");
// GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE

    $p = md5($_POST['oldpass']);
// GET USER IP ADDRESS
    $newp = md5($_POST['p1']);



    $sql = "SELECT temp_pass FROM useroptions WHERE username='$u' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
    $row = mysqli_fetch_row($query);
    $db_pass_str = $row[0];
    if ($p != $db_pass_str) {
        echo "Current password is incorrect";
        $respond = "$p". " ". "$db_pass_str";
        exit();
    } else {
        $sql = "UPDATE users SET password='$newp' WHERE username='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        echo "Password Change Success";
        $sql = "UPDATE useroptions SET temp_pass='' WHERE username='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>

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
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style1.css">
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $("#passbtn").click(function(){
                $("#backbtn").show();
            });
        });
    </script>


    <script>


        function changePass() {
            var oldPass = _("oldpass").value;
            var p1 = _("pass1").value;
            var p2 = _("pass2").value;

            if (oldPass == "" || p1 == "" || p2 == "")
                _("status").innerHTML = "Fill out all of the forms";
            else if (p1 != p2) {
                _("status").innerHTML = "Passwords do not match";
            }
            else {

                var ajax = ajaxObj("POST", "changepassword.php");
                ajax.onreadystatechange = function () {
                    if (ajaxReturn(ajax) == true) {
                        var response = ajax.responseText;
                        if (response == "Current password is incorrect") {
                            _("status").innerHTML = "Current password is incorrect, try again";
                        }
                        else if (response == "good"){
                            _("status").innerHTML = "Password change success";

                        }
                        else {
                            _("status").innerHTML = response;
                            ("backbtn").style.visibility = "visible";
                        }
                    }
                };
                ajax.send("p1=" + p1 + "&oldpass=" + oldPass)
            }
        }
        function _(x) {
            return document.getElementById(x);
        }
        function emptyElement(x) {
            _(x).innerHTML = "";
        }

        function ajaxObj(meth, url) {
            var x = new XMLHttpRequest();
            x.open(meth, url, true);
            x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            return x;
        }
        function ajaxReturn(x) {
            if (x.readyState == 4 && x.status == 200) {
                return true;
            }
        }


    </script>
</head>
<body>

<?php echo $header ?>


<section class='aboutus' id='about'>
    <div class='container1'>
        <div class="row">
            <div class="col-md-12 yomer-text-left" style="padding-bottom: 220px">
                <h2 class="redtext">Create New Password</h2>
                <form id="forgotpassform" onsubmit="return false;">
                    <div>Enter Your Current Password or Temporary Password</div>
                    <input id="oldpass" class="bigtext" type="password" onfocus="_('status').innerHTML='';" maxlength="808"><br>
                    <div>Enter Your New Password</div>
                    <input id="pass1" class="bigtext" type="password" onfocus="_('status').innerHTML='';"
                           maxlength="808"><br>
                    <div>Confirm New Password</div>
                    <input id="pass2" class="bigtext" type="password" onfocus="_('status').innerHTML='';" maxlength="808">
                    <br/>
                    <button id="passbtn" onclick="changePass()">Create Password</button>


                        <button id="backbtn" onclick="goBack()">Back</button>


                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>


                </form>

                <span id="status"></span>

            </div>
        </div>
    </div>

</section>


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
