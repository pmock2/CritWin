<?php
/**
 * Created by IntelliJ IDEA.
 * User: Payton
 * Date: 9/17/2017
 * Time: 11:47 PM
 */
include("header.php");
//include_once("check_login_status.php");
//if(ISSET($_POST["card"])){
    //echo 'This is a test';
//    include_once("db_conx.php");
    //TODO: Add a regex that replaces characters NOT needed in a JSON object.
    //$card = preg_replace('#[^a-z0-9]#i', '', $_POST("card"));
//    $c = $_POST('card');
    //$u = $_SESSION('u');
//    $u = "devTesting";
//    $sql = "INSERT INTO user_cards1 (username, card) VALUES ('$u', '$c')";
//    $query = mysqli_query($db_conx, $sql);
//    echo "Sent input to card.";
//    exit();

if(isset($_POST["card"])) {
    include_once("db_conx.php");
//    TODO Add a preg_replace to the JSON input.
//    $input = preg_replace('#[^a-z0-9]#i', '', $_POST['card']);
    $input = $_POST["card"];
    if(isset($_SESSION['usernamßßßße'])){
        $u = $_SESSION['username'];
    } else {
        $u = 'no_username';
    }
    $sql = "INSERT INTO user_cards1 (username, card) VALUES ('$u', '$input')";
    $query = mysqli_query($db_conx, $sql);
    echo "Sent $input to database as card";
    exit();
}
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
<template id="tapered-rule">
    <style>
        svg {
            fill: #922610;
            stroke: #922610;
            margin-top: 0.6em;
            margin-bottom: 0.35em;
        }
    </style>
    <svg height="5" width="400">
        <polyline points="0,0 400,2.5 0,5"></polyline>
    </svg>
</template>
<script>
    (function (window, document) {
        var elemName = 'tapered-rule';
        var thatDoc = document;
        var thisDoc = (thatDoc.currentScript || thatDoc._currentScript).ownerDocument;
        var proto = Object.create(HTMLElement.prototype, {
            createdCallback: {
                value: function () {
                    var template = thisDoc.getElementById(elemName);
                    var clone = thatDoc.importNode(template.content, true);
                    this.createShadowRoot().appendChild(clone);
                }
            }
        });
        thatDoc.registerElement(elemName, {prototype: proto});
    })(window, document);
</script>
<body>
<?php echo $header ?>
<body>
<!-- Card Options -->
<div id="options">
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
                    <input type="text" style="width: 100%" class="form-control" id="title" placeholder="Goblin"
                           name="title">
                </div>
                <div class="form-group">
                    <h3>Subtitle</h3>
                    <input style="font-style: italic; width: 100%" type="text" class="form-control" id="subtitle"
                           placeholder="Small humanoid (goblinoid), neutral evil" name="subtitle">
                </div>
                <hr>
                <div class="form-group">
                    <h3>Armor Class</h3>
                    <input type="number" class="form-control" id="armorclass" placeholder="10" name="armorclass">
                </div>
                <div class="form-group">
                    <h3>Hit Points</h3>
                    <input type="text" class="form-control" id="hitpoints" placeholder="2(1d4)" name="hitpoints">
                </div>
                <div class="form-group">
                    <h3>Speed</h3>
                    <input type="text" class="form-control" id="speed" placeholder="fast" name="speed">
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
                    <input style="width: 100%" type="text" class="form-control" id="languages"
                           placeholder="Common, Goblin"
                           name="languages">
                </div>
                <div class="form-group">
                    <h3>Challenge Rating</h3>
                    <input style="width: 100%" type="text" class="form-control" id="cr" placeholder="1/4 (50 XP)"
                           name="cr">
                </div>
                <hr>
                <div id="abils-group" class="form-group">
                    <h3>Abilities</h3>
                    <div id="abils_list">
                        <!-- Abilities inserted here with javascript -->
                    </div>
                    <br>
                    <div class="addbtn">
                        <span class="glyphicon glyphicon-plus" style="font-size: 25px;top: 5px; left: 6px"></span>
                    </div>
                </div>
                <hr>
                <div id="acts-group" class="form-group">
                    <h3>Actions</h3>
                    <div id="acts_list">
                        <!-- Actions inserted here with javascript -->
                    </div>
                    <br>
                    <div class="addbtn">
                        <span class="glyphicon glyphicon-plus" style="font-size: 25px;top: 5px; left: 6px"></span>
                    </div>
                </div>
                <hr>

                <div id="racts-group" class="form-group">
                    <h3>Reactions</h3>
                    <div id="racts_list">
                        <!-- Reactions inserted here with javascript -->
                    </div>
                    <br>
                    <div class="addbtn">
                        <span class="glyphicon glyphicon-plus" style="font-size: 25px;top: 5px; left: 6px"></span>
                    </div>
                </div>
                <hr>
                <div id="lacts-group" class="form-group">
                    <h3>Legendary Actions</h3>
                    <div id="lacts_list">
                        <!-- Legendary Actions inserted here with javascript -->
                    </div>
                    <br>
                    <div class="addbtn">
                        <span class="glyphicon glyphicon-plus" style="font-size: 25px;top: 5px; left: 6px"></span>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <h3>Notes</h3>
                    <input style="width: 100%" type="text" class="form-control" id="notes" placeholder="Extra notes"
                           name="notes">
                </div>
                <hr>

                <button id='card-submit-btn' class="btn btn-default">Submit</button>
            </form>
        </div>
    </section>
</div>

<!-- Card Tool -->
<div id="card_wrap" style="display: none">
    <div id="card_head">
        <h1 id="card_title">CARD TITLE</h1>
        <h2 id="card_subtitle">Some Creature (some size)</h2>
    </div>
    <tapered-rule></tapered-rule>
    <div class="stats">
        <div class="statline">
            <h4>Armor Class:</h4>
            <p id="AC">10</p>
        </div>
        <div class="statline">
            <h4>Hit Points:</h4>
            <p id="hp">2(1d4)</p>
        </div>
        <div class="statline">
            <h4>Speed:</h4>
            <p id="speed">fast</p>
        </div>
    </div>
    <tapered-rule></tapered-rule>
    <div class="abilstable">
        <table>
            <tbody>
            <tr>
                <th>STR</th>
                <th>DEX</th>
                <th>CON</th>
                <th>INT</th>
                <th>WIS</th>
                <th>CHA</th>
            </tr>
            <tr>
            <tr>
                <td id="str"><span id="str_total"></span> (<span id="str_mod"></span>)</td>
                <td id="dex"><span id="dex_total"></span> (<span id="dex_mod"></span>)</td>
                <td id="con"><span id="con_total"></span> (<span id="con_mod"></span>)</td>
                <td id="int"><span id="int_total"></span> (<span id="int_mod"></span>)</td>
                <td id="wis"><span id="wis_total"></span> (<span id="wis_mod"></span>)</td>
                <td id="cha"><span id="cha_total"></span> (<span id="cha_mod"></span>)</td>
            </tr>
            </tbody>
        </table>
    </div>
    <tapered-rule></tapered-rule>
    <div class="stats">
        <div class="statline">
            <h4>Senses:</h4>
            <p id="senses">Sight</p>
        </div>
        <div class="statline">
            <h4>Languages:</h4>
            <p id="lang">English</p>
        </div>
        <div class="statline">
            <h4>CR:</h4>
            <p id="cr">Easy (1 XP)</p>
        </div>
    </div>
    <tapered-rule></tapered-rule>
    <div class="propertyblock" id="abils_list" style="width:100%">
        <div class="title">Abilities.</div>
        <!-- Insert abilities here -->
    </div>
    <div class="propertyblock" id="acts_list" style="width:100%">
        <div class="title">Actions</div>
        <!-- Insert actions here -->
    </div>
    <div class="propertyblock" id="racts_list" style="width:100%">
        <div class="title">Reactions</div>
        <!-- Insert reactions here -->
    </div>
    <div class="propertyblock" id="lacts_list" style="width:100%">
        <div class="title">Legendary Actions</div>
        <!-- Insert legendary actions here -->
    </div>
    <div>
        <button id="send-button">TEST AJAX CALL</button>
    </div>

</div>
<script>
   /* document.querySelector('#send-button').addEventListener('click', (evt)=>{
        let x = new XMLHttpRequest();
        x.open('POST', 'cardoptions.php');
        x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        x.onreadystatechange = function(){
            if (x.readyState === 4 && x.status === 200) {
                console.log(x.responseText);
            }
            else if (x.responseText == 'This is a test') {
                alert("Test success");
            }
            else {
                alert(x.responseText);
            }
        };
        x.send('card=teeter');

    })*/
</script>
<!-- Scripts -->
<script type='text/javascript' src="../js/cardOptions.js"></script>
<!--         -->
</body>
</html>