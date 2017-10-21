/**
 *  Javascript for CardOptions page.
 *
 *  Created by by Danny on 9/19/2017.
 */

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
const CARD_WRAPPER = '#card_wrap';


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


        let _card = new Card(cardTitle, cardSubtitle, cardArmorClass, cardHitPoints, cardSpeed, cardSkills, cardSenses, cardLanguages, cardChallengeRating,
            [cardStr, cardDex, cardCon, cardInt, cardWis, cardCha], cardAbilities, cardActions, cardReactions, cardLengendaryActions);

        //Generate card using user options.
        try {
            generateCard(_card);
            //hide options, show card
            let cardOptions = document.querySelector('#options');
            cardOptions.setAttribute('style', 'display: none');
            let cardWrapper = document.querySelector('#card_wrap');
            cardWrapper.setAttribute('style','');
            document.querySelector('#send-button').addEventListener('click', (evt)=>{
              saveCard(_card);
           });
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
 * Fill the generic card template with attributes provided by a Card object.
 *
 * @param card Card object created using user's inputs in the Card Option tools.
 */
let generateCard = (card) =>{
    let cardWrapper = document.querySelector(CARD_WRAPPER);

    //Find elements to insert data into card.
    let cardTitle = cardWrapper.querySelector('#card_title');
    let cardSubtitle = cardWrapper.querySelector('#card_subtitle');
    let cardArmorClass = cardWrapper.querySelector('#AC');
    let cardHitPoints = cardWrapper.querySelector('#hp');
    let cardSpeed = cardWrapper.querySelector('#speed');
    let cardStrTotal = cardWrapper.querySelector('#str_total');
    let cardStrMod = cardWrapper.querySelector('#str_mod');
    let cardDexTotal = cardWrapper.querySelector('#dex_total');
    let cardDexMod = cardWrapper.querySelector('#dex_mod');
    let cardConTotal = cardWrapper.querySelector('#con_total');
    let cardConMod = cardWrapper.querySelector('#con_mod');
    let cardIntTotal = cardWrapper.querySelector('#int_total');
    let cardIntMod = cardWrapper.querySelector('#int_mod');
    let cardWisTotal = cardWrapper.querySelector('#wis_total');
    let cardWisMod = cardWrapper.querySelector('#wis_mod');
    let cardChaTotal = cardWrapper.querySelector('#cha_total');
    let cardChaMod = cardWrapper.querySelector('#cha_mod');

    //Insert data into card elements.
    try{
        cardTitle.innerText = card.title;
        cardSubtitle.innerText = card.subtitle;

        cardArmorClass.innerText = card.armorClass;
        cardHitPoints.innerText = card.hitPoints;
        cardSpeed.innerText = card.cardSpeed;

        cardStrTotal.innerText = card.scores.str;
        cardStrMod.innerText = calculateModifier(card.scores.str);
        cardDexTotal.innerText = card.scores.dex;
        cardDexMod.innerText = calculateModifier(card.scores.dex);
        cardConTotal.innerText = card.scores.con;
        cardConMod.innerText = calculateModifier(card.scores.con);
        cardIntTotal.innerText = card.scores.int;
        cardIntMod.innerText = calculateModifier(card.scores.int);
        cardWisTotal.innerText = card.scores.wis;
        cardWisMod.innerText = calculateModifier(card.scores.wis);
        cardChaTotal.innerText = card.scores.cha;
        cardChaMod.innerText = calculateModifier(card.scores.cha);

        // Add each ability.
        card.abilities.forEach((ability)=>{
            let cardAbilityContainer = document.createElement('div');
            cardAbilityContainer.setAttribute('class', 'abil_name');

            let cardAbilityName = document.createElement('h4');
            cardAbilityName.appendChild(document.createTextNode(ability.name));

            let cardAbilityDesc = document.createElement('p');
            cardAbilityDesc.appendChild(document.createTextNode(ability.desc));

            cardAbilityContainer.appendChild(cardAbilityName);
            cardAbilityContainer.appendChild(cardAbilityDesc);

            //Append generated ability container to document.
            cardWrapper.querySelector('#abils_list').appendChild(cardAbilityContainer);
        });

        // Add each action.
        card.actions.forEach((action)=>{
            let cardActionContainer = document.createElement('div');

            let cardActionName = document.createElement('h4');
            cardActionName.appendChild(document.createTextNode(action.name));

            let cardActionDesc = document.createElement('p');
            cardActionDesc.appendChild(document.createTextNode(action.desc));

            cardActionContainer.appendChild(cardActionName);
            cardActionContainer.appendChild(cardActionDesc);

            //Append generated action container to document.
            cardWrapper.querySelector('#acts_list').appendChild(cardActionContainer);
        });

        // Add each reaction.
        card.reactions.forEach((reaction)=>{
            let cardReactionContainer = document.createElement('div');

            let cardReactionName = document.createElement('h4');
            cardReactionName.appendChild(document.createTextNode(reaction.name));

            let cardReactionDesc = document.createElement('p');
            cardReactionDesc.appendChild(document.createTextNode(reaction.desc));

            cardReactionContainer.appendChild(cardReactionName);
            cardReactionContainer.appendChild(cardReactionDesc);

            //Append generated reaction container to document
            cardWrapper.querySelector('#racts_list').appendChild(cardReactionContainer);
        });

        // Add each legendary action
        card.legendaryActions.forEach((lAction)=>{
            let cardLActionContainer = document.createElement('div');

            let cardLActionName = document.createElement('h4');
            cardLActionName.appendChild(document.createTextNode(lAction.name));

            let cardLActionDesc = document.createElement('p');
            cardLActionDesc.appendChild(document.createTextNode(lAction.desc));

            cardLActionContainer.appendChild(cardLActionName);
            cardLActionContainer.appendChild(cardLActionDesc);

            //Append generated legendary container to document.
            cardWrapper.querySelector('#lacts_list').appendChild(cardLActionContainer);
        })

    } catch(e){
        throw e;
    }

    /**
     * Nested function to calculate modifier.
     */
    function calculateModifier(statTotal){
        //TODO: This should round DOWN. For now will allow halves.
        if (typeof(statTotal)!=='number') statTotal = parseInt(statTotal);
        let statMod = (statTotal - 10) / 2;
        if(statMod > 0 ){
            return `+${statMod}`;
        } else {
            return statMod;
        }
    }
};

/**
 * Save card to database.
 * @param card Object of Card Class.
 */
function saveCard(card){
    let cardJSON = JSON.stringify(card.toJSON());
    let ajax = ajaxObj('POST', 'cardoptions.php');

    // TODO: Add event listener for when ajax is ready.
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

/**
 * Class representing Card created by user.
 */
class Card {
    constructor(title, subtitle, armorClass, hitPoints, speed, skills, senses, languages, challengeRating, scores, abilities, actions, reactions, legendaryActions) {
        this.title = title;
        this.subtitle = subtitle;
        this.armorClass = armorClass;
        this.hitPoints = hitPoints;
        this.cardSpeed = speed;
        this.skills = skills;
        this.senses = senses;
        this.languages = languages;
        this.challengeRating = challengeRating;

        //Set Ability scores.
        this.setAbilityScores(scores);
        //Set Abilities.
        this.abilities = abilities;
        this.actions = actions;
        this.reactions = reactions;
        this.legendaryActions = legendaryActions;
    }

    //Only for dev purposes.
    logContent() {
        console.log(`Title: ${this.title}`);
        console.log(`Subtitle: ${this.subtitle}`);
        console.log(`Skills: ${this.skills}`);
        console.log(`Senses: ${this.senses}`);
        console.log(`Languages: ${this.languages}`);
        console.log(`Challenge Rating ${this.challengeRating}`);

    }

    /**
     * Helper function for setting abilities attribute.
     * Only seperated into own function because it is likely to be changed.
     *
     * @param scores An array containing the value for each ability.
     */
    setAbilityScores(scores) {
        this.scores = {
            str: scores[0],
            dex: scores[1],
            con: scores[2],
            int: scores[3],
            wis: scores[4],
            cha: scores[5]
        };
    }

    // This may not be needed, a predefined function likely exist to handle this.
    toJSON() {
        return {
            title: this.title,
            subtitle: this.subtitle,
            armorClass: this.armorClass,
            hitPoints: this.hitPoints,
            speed: this.cardSpeed,
            skills: this.skills,
            senses: this.senses,
            languages: this.languages,
            challengeRating: this.challengeRating,
            scores: this.scores,
            abilities: this.abilities,
            actions: this.actions,
            reactions: this.reactions,
            legendaryActions: this.legendaryActions
        }
    }
}

