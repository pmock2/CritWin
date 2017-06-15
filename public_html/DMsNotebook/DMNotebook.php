<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DMs Notebook</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='../js/DropDown.js'></script>
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <!---->
</head>
<body>
<?php echo $header ?>


<section class='aboutus' id='about'>
    <div class='container2'>
        <div class="row">
            <div class="col-md-12 yomer-text-center">
                <h2 class="redtext">Dungeon Master's Notebook</h2>
                <p class="bigtext">
                    The 300 page Player's Handbook and Dungeon Master guides tend to over-complicate simple things that
                    new DM's have trouble learning. These guides are built specificly to simplify everything a DM needs
                    to know.
                </p>
            </div>
        </div>
        <!--<div class = "menu">-->
        <!--<ul>-->
        <!--<li><a href="#">Home</a></li>-->
        <!--<li><a href="#">News</a></li>-->
        <!--<li><a href="#">Contact</a></li>-->
        <!--<li><a href="#">About</a></li>-->
        <!--</ul>-->
        <!--<div>-->


        <div class="row">
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget classes" href="SimpleClasses.php"
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Share</a>
                <h3>Simple Classes</h3>

                <p>
                    A class isn’t just a stat modifier; it determines who your character is and the path they’re going to take.  If you want to find a character class that fits your playing style, here’s our take on the benefits and drawbacks of the playable classes.
                </p>

            </div>
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget races" href="SimpleRaces.php"
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Follow</a>
                <h3>Simple Races</h3>

                <p>
                    For your convenience, here’s a handy reference guide to all the playable races in the 5th Edition D&D Player’s Handbook, arranged in alphabetical order.

                </p>


            </div>
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget exclame" href="#"
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Market</a>
                <h3>Tips/Tricks for a Healthy Campaign</h3>
                <p>
                    <a class="link-more" href="#">See More</a>
                </p>

                <p>
                    Coming Soon!
                </p>

            </div>
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget blog" href="DMblog.php"
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Recommend</a>
                <h3>DM's Blog</h3>
                <p>
                    <a class="link-more" href="htpps://critwin.com/DMsNotebook/DMblog.php">Read</a>
                </p>

                <p>
                    This week's blog by Zack Tackett: How to Open an Unlocked Door
                </p>

            </div>

        </div>
    </div>
</section>
<section class="whychose" id='whychose'>
    <div class="container">
        <div class="row">


            <div style="margin-left: auto">
                <h3>If you tell the party that there's a big ominous door with no guards, they're gonna do anything but go through that door. But if you tell them that door
                is near impossible to lockpick or break down, you better beleive they're going straight through that door</h3>
                <small>DM tip #63</small>
            </div>

        </div>
    </div>
</section>

</body>
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
    });

</script>

</html>