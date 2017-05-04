<?php
include("header.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tools</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='/js/DropDown.js'></script>
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
                    <h2 class="redtext">Check Out Our Tools</h2>
                    <p class="bigtext">
                       Our website will supply you with all the essentials for your roll playing game. 
                    </p>
                </div>
            </div>
    <div class="row">
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget icon-share1" href="DiceRoller.html" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Share</a>
                    <h3>Dice Roller</h3>
                    <p>
                        <a class="link-more" href="DiceRoller.html">Lets Roll!</a>
                    </p>

                    <p>Uses the power of the SUN'S RADIATION to generate random numbers to ensure that each roll is truly random. It's a thing. Google it.
                    </p>

                </div>
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget random" href="" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Follow</a>
                    <h3>Random Generators</h3>
                    <p>
                        <a class="link-more" href="">Generate Randomness!</a>
                    </p>

                    <p>
                        Coming Soon!

                    </p>
                    

                </div>
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget tracker" href="#" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Market</a>
                    <h3>Character Creator Quiz</h3>


                    <p>
                        This tool, coming VERY soon, will walk you through a quiz and determine your best fit class using our own very special algorithm.
                    </p>

                </div>
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget monster" href="#" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Recommend</a>
                    <h3>Monster/Trap/Item Generator</h3>
                     <p>
                        <a class="link-more" href="#">See More</a>
                    </p>

                    <p>
                       Coming Soon!
                    </p>

                </div>
        
        </div>
        <div class="row">
        
        <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget comp" href="#" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Recommend</a>
                    <h3>Compendium</h3>
                     <p>
                        <a class="link-more" href="#">Search</a>
                    </p>

                    <p>
                       Coming Soon!
                    </p>

                </div>

        <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget near" href="#" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Recommend</a>
                    <h3>DND Near You</h3>
                     <p>
                        <a class="link-more" href="#">See Who's Around</a>
                    </p>

                    <p>
                       Coming Soon!
                    </p>

                </div>
        <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget convert" href="#" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Recommend</a>
                    <h3>Edition Converter</h3>
                     <p>
                        <a class="link-more" href="#">Convert</a>
                    </p>

                    <p>
                       Coming Soon!
                    </p>

                </div>
        <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget spells" href="#" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Recommend</a>
                    <h3>Spell List</h3>
                     <p>
                        <a class="link-more" href="#">Spells</a>
                    </p>

                    <p>
                       Coming Soon!
                    </p>

                </div>

            </div>
    </div>
    </section>

</body>
<script type='text/javascript' src='/js/jquery.js'></script>
<script type='text/javascript' src='/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/js/scrollReveal.js'></script>
<script type='text/javascript'>
jQuery(document).ready(function() {


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