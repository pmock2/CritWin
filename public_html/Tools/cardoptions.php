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
                <div class="form-group">
                    <h3>Abilities</h3>
                    <div id="abils_list">
                        Name:
                        <input style="width: 100%; font-weight: bold; font-style: italic;" type="text"
                               class="form-control"
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
                        <input style="width: 100%; font-weight: bold; font-style: italic;" type="text"
                               class="form-control"
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
                        <input style="width: 100%; font-weight: bold; font-style: italic;" type="text"
                               class="form-control"
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
                        <input style="width: 100%; font-weight: bold; font-style: italic;" type="text"
                               class="form-control"
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
                <div class="form-group">
                    <h3>Notes</h3>
                    <input style="width: 100%" type="text" class="form-control" id="notes" placeholder="Extra notes"
                           name="notes">
                </div>
                <hr>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </section>
</div>

<div id="card_wrap" style="display: none">
    <div id="card_head">
        <h1>CARD TITLE</h1>
        <h2>Some Creature (some size)</h2>
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
                <td id="str">10 (+0)</td>
                <td id="dex">10 (+0)</td>
                <td id="con">10 (+0)</td>
                <td id="int">10 (+0)</td>
                <td id="wis">10 (+0)</td>
                <td id="cha">10 (+0)</td>
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
    <div class="propertyblock" id="abils_list">
        <h4 id="abil1_name">Ability.</h4>
        <p id="abil1_descript">This is an ability </p>
    </div>
    <div class="propertyblock">
        <div class="title">Actions</div>
        <h4 id="atk1_name">Weapon Attack.</h4>
        <p id="atk1_descript">Description. This is a very long description that takes several lines to show the whole
            thing</p>
    </div>
    <div class="propertyblock">
        <div class="title">Reactions</div>
        <h4 id="rectn1_name">Reaction.</h4>
        <p id="rectn1_descript">Description. This is a very long description that takes several lines to show the whole
            thing</p>
    </div>
    <div class="propertyblock">
        <div class="title">Legendary Actions</div>
        <p id="lgn1_descript">The monster can take 3 legendary actions, choosing from the options below. Only one
            legendary action can be
            used at a time and only at the end of another creature's turn. The monster regains spent legendary actions
            at the start of its turn.</p>
        <h4 id="lgnd1_name">Legendary.</h4>
        <p id="atk1_descript">Description. This is a very long description that takes several lines to show the whole
            thing</p>
    </div>
</div>

</body>
</html>