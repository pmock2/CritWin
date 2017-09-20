<?php
/**
 * Created by PhpStorm.
 * User: paytmock
 * Date: 9/19/2017
 * Time: 4:22 PM
 */
include("header.php");
?>
<html>
<head>
    <link rel="shortcut icon" href="../favicon.ico">
    <meta charset="UTF-8">
    <!--    <META HTTP-EQUIV="refresh" CONTENT="15">-->
    <title>
        Character Tracker
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="google-site-verification" content="PJSAZ0KSeqiw_wB5pURWWUEb2ESbYUg0bNm3T4kjuYQ"/>
    <meta property="og:url" content="http://www.critwin.com"/>
    <meta property="og:type" content="CritWin"/>
    <meta property="og:title" content="CritWin"/>
    <meta property="og:description" content="Made for DMs, By DMs"/>
    <meta name="keywords" content="DnD, dangeon and dragons, roleplay, dice, roller, 3D, RPG, wargame"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='../js/DropDown.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>
<body>
<?php echo $header ?>
<div class='aboutus' id='about' style="margin-top: 70px">
    <div class='container'>
        <div class="row">
            <div class="col-md-12 yomer-text-center">
            </div>
        </div>
        <div id="one">
            <button id="info_btn" data-toggle="collapse" class="btn btn-primary btn-lg btn-block" data-target="#info"
                    style="width: 100%; margin-bottom: 20px">
                    Character Info
            </button>
        </div>
        <div id="info" class="collapse tracker_content">
            <div id="name" class="bigtext tracker_option">
                <input type="text" style="width: 100%" class="form-control bigtext" id="name" placeholder="Name">
                <input type="text" style="width: 100%; display: inline-block" class="form-control bigtext" id="race"
                       placeholder="Race">
                <input type="text" style="width: 100%; display: inline-block" class="form-control bigtext" id="class"
                       placeholder="Class">
                <input type="number" style="width: 100%; display: inline-block" class="form-control bigtext" id="Level"
                       placeholder="Level">
                <input type="text" style="width: 100%; display: inline-block" class="form-control bigtext"
                       id="background"
                       placeholder="Background">
            </div>
        </div>
        <button data-toggle="collapse" class="btn btn-success btn-lg btn-block" data-target="#abils"
                style="width: 100%; margin-bottom: 20px"">
            Ability Scores
        </button>
        <div id="abils" class="collapse tracker_content">
            <div id="abils_box" class="bigtext tracker_option">
                <div style="margin: 0 auto">
                    STR: <input type="number"
                                style="margin: 0 auto; width: 300px; height: 60px; text-align: center; margin-bottom: 10px;"
                                class="form-control bigtext" id="str" value="10">
                    DEX: <input type="number"
                                style="margin: 0 auto; width: 300px; height: 60px; text-align: center; margin-bottom: 10px;"
                                class="form-control bigtext" id="dex" value="10">
                    CON: <input type="number"
                                style="margin: 0 auto; width: 300px; height: 60px; text-align: center; margin-bottom: 10px;"
                                class="form-control bigtext" id="con" value="10">
                    INT: <input type="number"
                                style="margin: 0 auto; width: 300px; height: 60px; text-align: center; margin-bottom: 10px;"
                                class="form-control bigtext" id="int" value="10">
                    WIS: <input type="number"
                                style="margin: 0 auto; width: 300px; height: 60px; text-align: center; margin-bottom: 10px;"
                                class="form-control bigtext" id="wis" value="10">
                    CHA: <input type="number"
                                style="margin: 0 auto; width: 300px; height: 60px; text-align: center; margin-bottom: 10px;"
                                class="form-control bigtext" id="cha" value="10">
                </div>
            </div>
        </div>
        <button data-toggle="collapse" class="btn btn-danger btn-lg btn-block" data-target="#hp" style="width: 100%; margin-bottom: 20px"">
            Health
        </button>
        <div id="hp" class="collapse tracker_content">
            <div class="bigtext tracker_option">
                Total Health:
                <input type="number" style="margin: 0 auto; width: 300px; height: 80px; text-align: center; margin-bottom: 10px; font-weight: bold"
                       class="form-control bigtext" id="totalhp" value="10">
                Current Health:
                <input type="number" style="margin: 0 auto; width: 300px; height: 80px; text-align: center; margin-bottom: 10px;"
                       class="form-control bigtext" id="curhp" value="10">
            </div>
        </div>
        <button data-toggle="collapse" class="btn btn-warning btn-lg btn-block" data-target="#feats" style="width: 100%; margin-bottom: 20px; margin-top: 20px;">
            Feats and Abilities
        </button>
        <div id="feats" class="collapse tracker_content">
            <textarea id="feats_area" class="form-control bigtext" rows="10" placeholder="Feats and Abilities"></textarea>
        </div>
        <button data-toggle="collapse" class="btn btn-info btn-lg btn-block" data-target="#items" style="width: 100%; margin-bottom: 20px; margin-top: 20px;">
        Items
        </button>
        <div id="items" class="collapse tracker_content">
            <textarea id="items_area" class="form-control bigtext" rows="10" placeholder="Items"></textarea>
        </div>
        <button data-toggle="collapse" class="btn btn-basic btn-lg btn-block" data-target="#notes" style="width: 100%; margin-bottom: 20px; margin-top: 20px;">
            Notes
        </button>
        <div id="notes" class="collapse tracker_content">
            <textarea id="notes_area" class="form-control bigtext" rows="10" placeholder="Notes"></textarea>
        </div>
    </div>
</div>
</body>
</html>
