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
<!-- Experimental spot for Card rendering target -->
<div id="card_target"></div>

<!-- Scripts -->
<script type="module">
    import {Card} from '../js/card.js';

    /** Constants **/
//CSS Selectors
    const CARD_SUBMIT_BUTTON = '#card-submit-btn';
    const CARD_TITLE = '#title';
    const CARD_SUBTITLE = '#subtitle';
    const CARD_SKILLS = '#skills';
    const CARD_SENSES = '#senses';
    const CARD_LANGUAGES = '#languages';
    const CARD_CHALLENGERATING = '#cr';
    const CARD_STR = '#str';
    const CARD_DEX = '#dex';
    const CARD_CON = '#con';
    const CARD_INT = '#int';
    const CARD_WIS = '#wis';
    const CARD_CHA = '#cha';
    const CARD_ABILITIES = '#abils_list';
    const CARD_ABILITY = '.abil';
    const CARD_ACTIONS = '#acts_list';
    const CARD_ACTION = '.act';
    const CARD_REACTIONS = '#racts_list';
    const CARD_REACTION = '.ract';
    const CARD_LEGENDARY_ACTIONS = '#lacts_list';
    const CARD_LEGENDARY_ACTION = '.lact';

    (function () {
        // Initialize elements
        let submitButton = document.querySelector(CARD_SUBMIT_BUTTON);

        /**
         * Adds Event Listener to submitButton.
         * For now, only being used to help test query selectors and model JSON object to be exported.
         */
        submitButton.addEventListener('click', (evt) => {

            evt.preventDefault();
            // Get all information from forms
            let cardTitle = document.querySelector(CARD_TITLE).value;
            let cardSubtitle = document.querySelector(CARD_SUBTITLE).value;
            let cardSkills = document.querySelector(CARD_SKILLS).value;
            let cardSenses = document.querySelector(CARD_SENSES).value;
            let cardLanguages = document.querySelector(CARD_LANGUAGES).value;
            let cardChallengeRating = document.querySelector(CARD_CHALLENGERATING).value;
            let cardStr = document.querySelector(CARD_STR).value;
            let cardDex = document.querySelector(CARD_DEX).value;
            let cardCon = document.querySelector(CARD_CON).value;
            let cardInt = document.querySelector(CARD_INT).value;
            let cardWis = document.querySelector(CARD_WIS).value;
            let cardCha = document.querySelector(CARD_CHA).value;
            let cardArmorClass = document.querySelector('#armorclass').value;
            let cardHitPoints = document.querySelector('#hitpoints').value;
            let cardSpeed = document.querySelector('#speed').value;

            //Get all card abilities.
            let cardAbilities = [...document.querySelectorAll(CARD_ABILITY)].map((ability)=>{
                //TODO: Null check might be needed in this position for each of the appendable attributes.
                let abilityName = ability.querySelector('.appendable_name').value;
                let abilityDesc = ability.querySelector('.appendable_desc').value;
                return {name: abilityName, desc: abilityDesc};
            });

            //Get all card actions.
            let cardActions = [...document.querySelectorAll(CARD_ACTION)].map((action)=>{
                let actionName = action.querySelector('.appendable_name').value;
                let actionDesc = action.querySelector('.appendable_desc').value;
                return { name:actionName, desc: actionDesc};
            });


            //Get all card reactions.
            let cardReactions = [...document.querySelectorAll(CARD_REACTION)].map((reaction)=>{
                let reactionName = reaction.querySelector('.appendable_name').value;
                let reactionDesc = reaction.querySelector('.appendable_desc').value;
                return {name: reactionName, desc: reactionDesc};
            });

            //Get all card Legendary Actions.
            let cardLengendaryActions = [...document.querySelectorAll(CARD_LEGENDARY_ACTION)].map((legendaryAction)=>{
                let legendaryActionName = legendaryAction.querySelector('.appendable_name').value;
                let legendaryActionDesc = legendaryAction.querySelector('.appendable_desc').value;
                return {name:legendaryActionName, desc: legendaryActionDesc};
            });

            //Get card notes.
            let cardNotes = document.querySelector('#notes').value;

            let _card = new Card(cardTitle, cardSubtitle, cardArmorClass, cardHitPoints, cardSpeed, cardSkills, cardSenses, cardLanguages, cardChallengeRating,
                [cardStr, cardDex, cardCon, cardInt, cardWis, cardCha], cardAbilities, cardActions, cardReactions, cardLengendaryActions, cardNotes);

            try{
                _card.render("#card_target");
                //document.querySelector('#options').setAttribute('style', 'none');
            } catch (e){
                console.error(e);
            }
        });

        /**
         * Add event listener to buttons that add Name/Description elements.
         */
        document.querySelectorAll('.addbtn').forEach((addButton)=>{
            addButton.addEventListener('click', (evt)=>{
                let formGroup = null;
                let parentElement = evt.srcElement.parentNode;

                //If glyph is clicked, the containing div will be parent instead of formgroup. Formgroup is needed to determine anchor for appendable.
                if(parentElement.getAttribute('class')==='addbtn'){
                    formGroup = parentElement.parentNode;
                } else {
                    formGroup = parentElement;
                }

                // Verify form group is found.
                if(formGroup.getAttribute('class')!== 'form-group'){
                    console.error(`Unable to find form-group. Class found ${formGroup.getAttribute('class')}`);
                    return;
                }

                addAppendable(formGroup.getAttribute('id'));
            })
        });
    })();

    /**
     * Create and append elements to existing element.
     * Used for creating new inputs when adding new Ability, Action, Reactions, Legendary Actions
     *
     *
     * @param elementType must be 'abils-group', 'acts-group', 'racts-group', or 'lacts-group'.
     * 'abils-group' -- Abilities
     * 'acts-group'  -- Actions
     * 'racts-group' -- Reactions
     * 'lacts-group' -- Legendary Actions
     */
    let addAppendable = (elementType) =>{
        const ABILITY_GROUP = 'abils-group';
        const ACTION_GROUP = 'acts-group';
        const REACTION_GROUP = 'racts-group';
        const LEGENDARY_ACTIONS_GROUP = 'lacts-group';

        let existingContainer = null;
        let appendableType = null;

        //Append created container to existing.
        switch(elementType){
            case ABILITY_GROUP:
                existingContainer = document.querySelector(CARD_ABILITIES);
                appendableType = 'abil';
                break;
            case ACTION_GROUP:
                existingContainer = document.querySelector(CARD_ACTIONS);
                appendableType = 'act';
                break;
            case REACTION_GROUP:
                existingContainer = document.querySelector(CARD_REACTIONS);
                appendableType = 'ract';
                break;
            case LEGENDARY_ACTIONS_GROUP:
                existingContainer = document.querySelector(CARD_LEGENDARY_ACTIONS);
                appendableType = 'lact';
                break;
            default:
                existingContainer = null;
        }

        if(existingContainer===null){
            console.error('Invalid element type passed into addAppendable()');
            return;
        }

        // Create DIV that will hold entire object.
        let appendableContainer = document.createElement('div');
        appendableContainer.setAttribute('class', 'appendableAttr');
        appendableContainer.setAttribute('class', appendableType);
        //TODO: Need to check and append number to provide unique ID.
        appendableContainer.setAttribute('style', 'border: 1px solid black; margin:10px; padding: 10px;');

        //Create close button and append it to container.
        //TODO: Add styling for button hover and button click.
        //let closeButtonContainer = document.createElement('div');
        let closeButton = document.createElement('span');
        closeButton.setAttribute('class', 'glyphicon glyphicon-minus-sign');
        closeButton.setAttribute('style', 'float:right');
        closeButton.addEventListener('click',(evt)=>{
            let spanParent = evt.srcElement.parentNode;
            spanParent.parentNode.removeChild(spanParent);
        });
        //closeButtonContainer.appendChild(closeButton);
        //closeButtonContainer.setAttribute('style','float:right');
        appendableContainer.appendChild(closeButton);

        //Create Name input and append it to container.
        appendableContainer.appendChild(document.createTextNode('Name: '));
        let nameInput = document.createElement('input');
        nameInput.setAttribute('style', 'width: 100%; font-weight: bold; font-style: italic;');
        nameInput.setAttribute('class', 'form-control appendable_name');
        nameInput.setAttribute('type', 'text');
        appendableContainer.appendChild(nameInput);

        //Create Description input and append it to container.
        appendableContainer.appendChild(document.createTextNode('Description: '));
        let descriptionInput = document.createElement('input');
        descriptionInput.setAttribute('style', 'width: 100%; font-weight: bold; font-style: italic;');
        descriptionInput.setAttribute('class', 'form-control appendable_desc');
        descriptionInput.setAttribute('type', 'text');
        appendableContainer.appendChild(descriptionInput);

        existingContainer.appendChild(appendableContainer);
    };

    /**
     * Save card to database.
     * @param card Object of Card Class.
     */
    function saveCard(card){
        let cardJSON = JSON.stringify(card.toJSON());
        let ajax = ajaxObj('POST', 'cardoptions.php');

        ajax.onreadystatechange = function(){
            if(ajaxReturn(ajax) === true){
                alert('ajax returned true');
            }

        };

        ajax.send(`card=${cardJSON}`);
    }

    function ajaxReturn(x) {
        if (x.readyState === 4 && x.status === 200) {
            return true;
        }
    }

</script>
<!--         -->
</body>
</html>