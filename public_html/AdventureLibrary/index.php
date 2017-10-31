<?php
include("../header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adventure Library</title>

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
                <h2 class="redtext">Adventure Library</h2>
                <p class="bigtext">
                    Need ideas? Afraid that the awesome module you’ve been wanting to try out for months is going to fall flat? In this section you will find all you need to make sure your next D&D night is enjoyed by all---even that one guy who is always trying to debate you on small details of obscure lore that nobody cares about
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget icon-shelf" href="#"
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Share</a>
                <h3>On the Shelf - Reviews</h3>
                <p>
                    Coming Soon!
                </p>
            </div>
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget icon-runthrough" href="#"
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Follow</a>
                <h3>My-Campaign</h3>


                <p>
                    Coming Soon!
                </p>


            </div>
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget icon-classics" href="#"
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Market</a>
                <h3>The Classics</h3>


                <p>
                    Coming Soon!
                </p>

            </div>
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget icon-homebrew" href="homebrew/index.php"
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Recommend</a>
                <h3>Homebrew</h3>


                <p>
                    We've made some awesome campaign settings and we wanna share them with the world. Check them out here.
                </p>

            </div>

        </div>
    </div>
</section>
<section class="whychose2" id='whychose'>
    <div class="container">
        <div class="row">


            <div style="margin-left: auto">
                <h3>DM - "A man walks up to you holding a map to th-"
                <br>"I kill him immediately"
                </h3>
                <small>This actually happens a lot</small>
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
