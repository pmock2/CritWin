<?php
include("../header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homebrew</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='../../js/DropDown.js'></script>
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <!---->
</head>
<body>
<?php echo $header ?>


<section class='aboutus' id='about'>
    <div class='container2' style="align-self: center">
        <div class="row">
            <div class="col-md-12 yomer-text-center">
                <h2 class="redtext">Homebrew</h2>
                <p class="bigtext">
                    Our own custom modules that we've created over the years! In the future, we plan to put YOUR content here.
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget "
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s"></a>
                <h3></h3>
                <p>
                  </p>

            </div>
            <div class="col-md-3 yomer-text-center">
                <a class="icon-widget icon-egg" href="swordcoast/swordcoast.php"
                   data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s"></a>
                <h3>World Setting - Sword Coast Meets Eragon</h3>
                <p>
                    This world setting is just plain awesome. It takes the modules, "The Lost Mine of Phandelver", "The Hoard of the Dragon Queen", and "The rise of Tiamate", and
                    combines them with the lore of Eragon. Dragons are but a fairy tale to the people of the sword coast. That is, until the party discovers a strange egg deep in a forgotten mine.
                </p>

        </div>
        <div class="col-md-3 yomer-text-center">
            <a class="icon-widget icon-runthrough" href="#"
               data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Follow</a>
            <h3>World Setting - Aeznor</h3>


            <p>
                Aeznor is 100% homebrewed by the CritWin team. Drawing inspiration from the Dragonlance novels, Aeznor exists long after an apocolyptic event that reshaped the world.
            </p>


        </div>
        </div>
        </div>
    </section>
</body>
<script type='text/javascript' src='../../js/jquery.js'></script>
<script type='text/javascript' src='../../js/bootstrap.min.js'></script>
<script type='text/javascript' src='../../js/scrollReveal.js'></script>
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
