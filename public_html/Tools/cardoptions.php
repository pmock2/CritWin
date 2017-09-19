<?php
/**
 * Created by IntelliJ IDEA.
 * User: Payton
 * Date: 9/17/2017
 * Time: 11:47 PM
 */
include("header.php");
?>
<html>
<head>
    <link rel="shortcut icon" href="../favicon.ico">
    <meta charset="UTF-8">
    <!--    <META HTTP-EQUIV="refresh" CONTENT="15">-->
    <title>
        Card Options
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
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='../js/DropDown.js'></script>
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>
<script>

</script>
<body>
<?php echo $header ?>
<body>
<section class='aboutus' id='about'>
    <div class='container1'>
        <div class="row">
            <div class="col-md-12 yomer-text-center">
                <h2 class="redtext">Card Creation Tool</h2>
                <p class="bigtext">
                    Fill the form below to create a cutom card
                </p>
            </div>
        </div>
        <form action="">
            <div class="form-group">
                <h3>Card Title</h3>
                <input type="text" style="width: 100%" class="form-control" id="title" placeholder="Goblin" name="title">
            </div>
            <div class="form-group">
                <h3>Subtitle</h3>
                <input style="font-style: italic; width: 100%" type="text" class="form-control" id="subtitle"
                       placeholder="Small humanoid (goblinoid), neutral evil" name="subtitle">
            </div>
            <hr>
            <h3>Ability Scores</h3>
            <div>
                <div class="abils">
                    STR
                    <div>
                        <input class="form-control" type="number" value="10" style="width: 70px" id="str">
                    </div>
                </div>
                <div class="abils">
                    DEX
                    <input class="form-control" type="number" value="10" style="width: 70px" id="dex">
                </div>
                <div class="abils">
                    CON
                    <input class="form-control" type="number" value="10" style="width: 70px" id="con">
                </div>
                <div class="abils">
                    INT
                    <input class="form-control" type="number" value="10" style="width: 70px" id="int">
                </div>
                <div class="abils">
                    WIS
                    <input class="form-control" type="number" value="10" style="width: 70px" id="wis">
                </div>
                <div class="abils">
                    CHA
                    <input class="form-control" type="number" value="10" style="width: 70px" id="cha">
                </div>
            </div>
            <hr>
            <div class="form-group">
                <h3>Skills</h3>
                <input style="width: 100%" type="text" class="form-control" id="skills" placeholder="Stealth +6"
                       name="skills">
            </div>
            <div class="form-group">
                <h3>Senses</h3>
                <input style="width: 100%" type="text" class="form-control" id="senses"
                       placeholder="darkvision 60 ft., passive perception 9" name="senses">
            </div>
            <div class="form-group">
                <h3>Languages</h3>
                <input style="width: 100%" type="text" class="form-control" id="languages" placeholder="Common, Goblin"
                       name="languages">
            </div>
            <div class="form-group">
                <h3>Challenge Rating</h3>
                <input style="width: 100%" type="text" class="form-control" id="cr" placeholder="1/4 (50 XP)" name="cr">
            </div>
            <hr>
            <div class="form-group">
                <h3>Abilities</h3>
                <div id="abils_list">
                    Name:
                    <input style="width: 100%; font-weight: bold; font-style: italic;" type="text" class="form-control"
                           id="abils_name0" placeholder="Nimble Escape" name="abils_name0">
                    Description:
                    <input style="width: 100%;" type="text" class="form-control" id="abils_des0"
                           placeholder="The goblin can take the Disengage or Hide action as a bonus action on each of its turns."
                           name="abils_des0">
                </div>
                <br>
                <div class="addbtn">
                    <span class="glyphicon glyphicon-plus" style="font-size: 25px;top: 5px; left: 6px"></span>
                </div>
                <div class="minbtn">
                    <span class="glyphicon glyphicon-minus" style="font-size: 25px;top: 5px; left: 4px"></span>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <h3>Actions</h3>
                <div id="acts_list">
                    Name:
                    <input style="width: 100%; font-weight: bold; font-style: italic;" type="text" class="form-control"
                           id="acts_name0" placeholder="Scimitar" name="acts_name0">
                    Description:
                    <input style="width: 100%;" type="text" class="form-control" id="acts_des0"
                           placeholder="Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) slashing damage."
                           name="acts_des0">
                </div>
                <br>
                <div class="addbtn">
                    <span class="glyphicon glyphicon-plus" style="font-size: 25px;top: 5px; left: 6px"></span>
                </div>
                <div class="minbtn">
                    <span class="glyphicon glyphicon-minus" style="font-size: 25px;top: 5px; left: 4px"></span>
                </div>
            </div>
            <hr>

            <div class="form-group">
                <h3>Reactions</h3>
                <div id="acts_list">
                    Name:
                    <input style="width: 100%; font-weight: bold; font-style: italic;" type="text" class="form-control"
                           id="reacts_name0" placeholder="Reaction" name="reacts_name0">
                    Description:
                    <input style="width: 100%;" type="text" class="form-control" id="reacts_des0"
                           placeholder="Reaction Description"
                           name="reacts_des0">
                </div>
                <br>
                <div class="addbtn">
                    <span class="glyphicon glyphicon-plus" style="font-size: 25px;top: 5px; left: 6px"></span>
                </div>
                <div class="minbtn">
                    <span class="glyphicon glyphicon-minus" style="font-size: 25px;top: 5px; left: 4px"></span>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <h3>Legendary Actions</h3>
                <div id="acts_list">
                    Name:
                    <input style="width: 100%; font-weight: bold; font-style: italic;" type="text" class="form-control"
                           id="legacts_name0" placeholder="Legendary Action" name="legacts_name0">
                    Description:
                    <input style="width: 100%;" type="text" class="form-control" id="legacts_des0"
                           placeholder="Legendary Action Description"
                           name="legacts_des0">
                </div>
                <br>
                <div class="addbtn">
                    <span class="glyphicon glyphicon-plus" style="font-size: 25px;top: 5px; left: 6px"></span>
                </div>
                <div class="minbtn">
                    <span class="glyphicon glyphicon-minus" style="font-size: 25px;top: 5px; left: 4px"></span>
                </div>
            </div>
            <hr>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</section>
</body>
</html>