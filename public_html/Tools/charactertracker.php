<?php
/**
 * Created by PhpStorm.
 * User: paytmock
 * Date: 9/19/2017
 * Time: 4:22 PM
 */
include("../header.php");
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
  
    <link href="../css/style.css" rel="stylesheet">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='../js/DropDown.js'></script>
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    <script>
        $(document).ready(function(){
            $(this).scrollTop(0);
        });
        
        function openNav() {
            document.getElementById("mySidenav").style.width = "75%";
            document.getElementById("side_nav_btn").style.width = "77%";
            document.getElementById('mySidenav').style.backgroundColor = '#1D2951';
            closeNav_right();
        }

        function openNav_right() {
            document.getElementById("mySidenav_right").style.width = "100%";
            document.getElementById("add_new_btn").style.width = "100%";
            document.getElementById('mySidenav_right').style.backgroundColor = 'black';
            closeNav();
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById('side_nav_btn').style.width = '55px';
            document.getElementById('mySidenav').style.backgroundColor = 'black';
        }
        function closeNav_right() {
            document.getElementById("mySidenav_right").style.width = "0";
            document.getElementById('add_new_btn').style.width = '55px';
            document.getElementById('mySidenav_right').style.backgroundColor = 'black';
        }

        window.smoothScroll = function(target) {
            var scrollContainer = target;
            do { //find scroll container
                scrollContainer = scrollContainer.parentNode;
                if (!scrollContainer) return;
                scrollContainer.scrollTop += 1;
            } while (scrollContainer.scrollTop == 0);

            var targetY = 0;
            do { //find the top of target relatively to the container
                if (target == scrollContainer) break;
                targetY += target.offsetTop;
            } while (target = target.offsetParent);

            scroll = function(c, a, b, i) {
                i++; if (i > 30) return;
                c.scrollTop = a + (b - a) / 30 * i;
                setTimeout(function(){ scroll(c, a, b, i); }, 20);
            };
            // start scrolling
            scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
        }

    </script>
</head>
<body style="background-color: black">
<?php echo $header ?>
<div id="mySidenav" class="sidenav" style="z-index: 3;">
    <h2 class="sidenav_title">Scroll To</h2>
    <a href="javascript:void(0)" class="closebtn side_nav_options" onclick="closeNav()">&times;</a>
    <a class="side_nav_options" onclick="smoothScroll(document.getElementById('info_btn')); closeNav();">Character Info</a>
    <a class="side_nav_options" href="#">Ability Scores</a>
    <a class="side_nav_options" href="#">Health</a>
    <a class="side_nav_options" href="#">Feats and Abilities</a>
    <a class="side_nav_options" href="#">Items</a>
    <a class="side_nav_options" href="#">Notes</a>
</div>

<div id="mySidenav_right" class="sidenav_right" style="z-index: 3;">
    <a href="javascript:void(0)" class="closebtn side_nav_options" onclick="closeNav_right()">&times;</a>
    <h2 >Add New</h2>
    <h1>Title:</h1>
    <br>
    <input type="text" value="Preview" class="add_new_title" style="margin-bottom: 20px" onclick="this.select()">
    <h1>Input Type: </h1>
    <br>
    <div class="dropdown" style="width: 100%">
        <button id='input_type_btn' class="btn btn-primary dropdown-toggle dropdown_btn" type="button" data-toggle="dropdown">Long Text
            <span class="caret"></span></button>
        <ul class="dropdown-menu" style="width: 100%">
            <li class='input_type'><a href='#'>Long Text</a></li>
            <li class='input_type'><a href="#">Short Text</a></li>
            <li class='input_type'><a href="#">Short Number</a></li>
            <li class='input_type'><a href="#">Long Number</a></li>
        </ul>
    </div>
    <h1>Background Color:</h1>
    <br>
    <input id='new_bg_color' type="color" value="#00bfff" class="option_bg_color">
    <h1>Text Color:</h1>
    <br>
    <input id='new_text_color' type="color" value="#ffffff" class="option_bg_color">
    <div id='new_preview'></div>
    <br>
    <button id="add_btn" class="btn btn-default btn-lg btn-block add_btn">Add</button>
</div>


<div class='aboutus' id='about' style="margin-top: 70px; background-color: black">
    <div id='main' class='container' style="padding-top: 0;">
        <div class="side_nav_btn" id="side_nav_btn" onclick="openNav()">
                <span style="font-size:30px;cursor:pointer; width: 55px;">&#9776;</span>
        </div>
        <div id="add_new_btn" class="add_new_btn" onclick="openNav_right()">
            <span style="font-size:35px;cursor:pointer;">+</span>
        </div>
        <div class="row">
            <div class="col-md-12 yomer-text-center title_wrapper">
                <h2 style="word-wrap: break-word; color: white; font-size: 50px;">Name</h2>
            </div>
        </div>
        <div id="one">
            <button id="info_btn" data-toggle="collapse" class="btn btn-primary btn-lg btn-block" data-target="#info"
                    style="width: 100%; margin-bottom: 20px" onclick="smoothScroll(document.getElementById('info_btn')); closeNav();">
                Character Info
            </button>
        </div>
        <div id="info" class="collapse tracker_content">
            <div id="optionsDiv" class="bigtext tracker_option" style="margin: 10px">
                <input type="text" style="width: 100%" class="form-control bigtext" id="name" placeholder="Name">
                <input type="text" style="width: 100%; display: inline-block" class="form-control bigtext" id="race"
                       placeholder="Race">
                <input type="text" style="width: 100%; display: inline-block" class="form-control bigtext" id="class"
                       placeholder="Class">
                <input type="number" style="width: 100%; display: inline-block" class="form-control bigtext" id="Level"
                       placeholder="Level">
                <input type="text" style="width: 100%; display: inline-block; margin-bottom: 0;"
                       class="form-control bigtext"
                       id="background"
                       placeholder="Background">
            </div>
        </div>
        <button id="abils_btn" data-toggle="collapse" class="btn btn-success btn-lg btn-block" data-target="#abils"
                style="width: 100%; margin-bottom: 20px" onclick="smoothScroll(document.getElementById('abils_btn')); closeNav();">
        Ability Scores
        </button>
        <div id="abils" class="collapse tracker_content">
            <div id="abils_box" class="bigtext tracker_option">
                <div style="color: white">
                    <div class="abils_score_wrap">
                        STR: <input type="number" style="" class="form-control bigtext abils_score" id="str" value="10">
                    </div>
                    <div class="abils_score_wrap">
                        DEX: <input type="number" style="" class="form-control bigtext abils_score" id="dex" value="10">
                    </div class="abils_score_wrap">
                    <div class="abils_score_wrap">
                        CON: <input type="number" style="" class="form-control bigtext abils_score" id="con" value="10">
                    </div>
                    <div class="abils_score_wrap">
                        INT: <input type="number" style="" class="form-control bigtext abils_score" id="int" value="10">
                    </div>
                    <div class="abils_score_wrap">
                        WIS: <input type="number" style="" class="form-control bigtext abils_score" id="wis" value="10">
                    </div>
                    <div class="abils_score_wrap">
                        CHA: <input type="number" style="" class="form-control bigtext abils_score" id="cha" value="10">
                    </div>
                </div>
            </div>
        </div>
        <button id="hp_btn" data-toggle="collapse" class="btn btn-danger btn-lg btn-block" data-target="#hp"
                style="width: 100%; margin-bottom: 20px" onclick="smoothScroll(document.getElementById('hp_btn')); closeNav();">
        Health
        </button>
        <div id="hp" class="collapse tracker_content">
            <div class="bigtext tracker_option" style="color: white;">
                Total Health:
                <input type="number"
                       style="margin: 0 auto; width: 300px; height: 80px; text-align: center; margin-bottom: 10px; font-weight: bold"
                       class="form-control bigtext" id="totalhp" value="10">
                Current Health:
                <input type="number"
                       style="margin: 0 auto; width: 300px; height: 80px; text-align: center; margin-bottom: 10px;"
                       class="form-control bigtext" id="curhp" value="10">
            </div>
        </div>
        <button id="feats_btn" data-toggle="collapse" class="btn btn-warning btn-lg btn-block" data-target="#feats"
                style="width: 100%; margin-bottom: 20px; margin-top: 20px;" onclick="smoothScroll(document.getElementById('feats_btn')); closeNav();">
            Feats and Abilities
        </button>
        <div id="feats" class="collapse tracker_content">
            <textarea id="feats_area" class="form-control bigtext" rows="10"
                      placeholder="Feats and Abilities"></textarea>
        </div>
        <button id="items_btn" data-toggle="collapse" class="btn btn-info btn-lg btn-block" data-target="#items"
                style="width: 100%; margin-bottom: 20px; margin-top: 20px;" onclick="smoothScroll(document.getElementById('items_btn')); closeNav();">
            Items
        </button>
        <div id="items" class="collapse tracker_content">
            <textarea id="items_area" class="form-control bigtext" rows="10" placeholder="Items"></textarea>
        </div>
        <button id="notes_btn" data-toggle="collapse" class="btn btn-basic btn-lg btn-block" data-target="#notes"
                style="width: 100%; margin-bottom: 20px; margin-top: 20px;" onclick="smoothScroll(document.getElementById('notes_btn')); closeNav();">
            Notes
        </button>
        <div id="notes" class="collapse tracker_content">
            <textarea id="notes_area" class="form-control bigtext" rows="10" placeholder="Notes"></textarea>
        </div>
    </div>
</div>
<script type="module">
(function(){

 
    /**
     * Add event listener for Add button in right side nav. 
     * The Add button should inject an element into the dom, according
     * to user settings. 
     */
    document.querySelector('#add_btn').addEventListener('click',()=>{
        // Get user's selected options and generate element in DOM
        let newEntry = getNewFieldData();
        let characterField = new CharacterField(newEntry.title, newEntry.inputType, newEntry.backgroundColor, newEntry.textColor);
        document.querySelector('#main').appendChild(characterField.generateElement());
    
        //Close the nav and reset the values. 
        closeNav_right();
        resetNewFieldData();
    });

    /**
     * Add event listener for selecting Input Type when adding new. 
     * The buttons text should be updated to reflect selected option.
     */
    let inputTypeOptions = document.querySelectorAll('.input_type');
    inputTypeOptions.forEach((inputTypeOption)=>{
        inputTypeOption.addEventListener('click', (evt)=>{
            document.querySelector('#input_type_btn').textContent = evt.srcElement.textContent;
        })
    });

    // Retrieve and return values from fields in the "Add New" tab.
    function getNewFieldData(){
        let title = document.querySelector('.add_new_title').value; 
        let inputType = document.querySelector('#input_type_btn').textContent;
        let backgroundColor = document.querySelector('#new_bg_color').value;
        let textColor = document.querySelector('#new_text_color').value;

        return {
            title: title,
            inputType: inputType,
            backgroundColor: backgroundColor,
            textColor: textColor
        };
    }

    // Reset field values to default
    function resetNewFieldData(){
        document.querySelector('.add_new_title').value = 'Preview';
        document.querySelector('#input_type_btn').textContent = 'Long Text'
        document.querySelector('#new_bg_color').value = '#00bfff';
        document.querySelector('#new_text_color').value = '#ffffff';
    }
}());

/**
 * Generate a unique ID
 */
function generateID(){
        function s4() {
            return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
        }
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
        s4() + '-' + s4() + s4() + s4();
    }

class CharacterField{
    constructor(title, inputType, backgroundColor, textColor){
        this.title = title;
        this.inputType = inputType; 
        this.backgroundColor = backgroundColor;
        this.textColor = textColor;
    }

    //Returns DOM element based on settings
    generateElement(){
        let elementContainer = document.createElement('div');
        let uniqueID = generateID();
        elementContainer.setAttribute('id', 'testing')
        // Create the button. 
        let buttonElement = document.createElement('button');
        buttonElement.setAttribute('data-toggle', 'collapse');
        buttonElement.setAttribute('data-target', `#${uniqueID}`);
        buttonElement.className = 'btn btn-basic btn-lg btn-block';
        buttonElement.setAttribute('style', `width: 100%; margin-bottom: 20px; margin-top:20px; background-color:${this.backgroundColor}; color: ${this.textColor}`);
        buttonElement.textContent = this.title;

        // Create the collapsible data 
        let collapsibleContainer = document.createElement('div');
        collapsibleContainer.setAttribute('id', uniqueID); 
        collapsibleContainer.className = 'tracker_content collapse';
        collapsibleContainer.setAttribute('aria-expanded', 'false');
        let textArea = document.createElement('textarea');
        textArea.className = 'form-control bigtext';
        textArea.setAttribute('rows', '10');
        collapsibleContainer.appendChild(textArea);

        elementContainer.appendChild(buttonElement);
        elementContainer.appendChild(collapsibleContainer);
        return elementContainer; 
    }
}
   

</script>
</body>
</html>
