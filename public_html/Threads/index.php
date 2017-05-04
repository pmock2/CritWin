<?php
include("header.php");
//include("../loginforms/user.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Threads</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
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
    <div id="pageMiddle" class="container1">
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <h2 class="redtext">Threads (Beta)</h2>
                <p class="bigtext">
                Welcome to the beta Threads page! You'll be able to start you're own thread as well as reply to others. The text limit is currently
                set to 255 characters, but this may change soon.
                </p>
                <div>
                <p class="bigtext">Your current user level is: <b> <?php
                    include("userlevel.php");
                    if ($userlevel == "a")
                        $level = "Normal User";
                    else if ($userlevel == "b")
                        $level = "Moderator";
                    else if ($userlevel == "c")
                        $level = "Administrator";
                    else
                        $level = "Not logged in";
                    echo $level;

                    ?></b>
                </p>
                    </div>
                    <div>
                <hr />
                <?php include_once("template_status.php"); ?>

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