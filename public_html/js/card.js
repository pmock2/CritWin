/**
 * Created by Danny on 10/22/2017.
 */


/**
 * Class representing Card created by user.
 */
export class Card {
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

    /**
     * Create and append HTML representation of Card.
     * @param renderTarget query selector of html element to append card to.
     */
    render(renderTarget) {
        let target = document.querySelector(renderTarget);
        if(target === null){
            throw "Card render target element not found.";
        }
        alert('render called');

        //Create the container for entire card.
        let cardContainer = document.createElement("div");
        cardContainer.setAttribute('id', 'card_wrap');

        //Create and append the card header.
        let cardHead = document.createElement('div');
        let cardTitle = document.createElement('h1');
        cardTitle.setAttribute('id', 'card_title');
        cardTitle.textContent = this.title;
        let cardSubtitle = document.createElement('h2');
        cardSubtitle.setAttribute('id', 'card_subtitle');
        cardSubtitle.textContent = this.subtitle;
        cardHead.appendChild(cardTitle);
        cardHead.appendChild(cardSubtitle);

        //Create and append general stats.
        let generalCardStats = document.createElement('div');
        generalCardStats.setAttribute('class', 'stats');
        generalCardStats.appendChild(generateStatElement('Armor Class', this.armorClass));
        generalCardStats.appendChild(generateStatElement('Hit points', this.hitPoints));
        generalCardStats.appendChild(generateStatElement('Speed', this.cardSpeed));

        //Create and append secondary stats
        let secondaryCardStats = document.createElement('div');
        secondaryCardStats.setAttribute('class', 'stats');
        secondaryCardStats.appendChild(generateStatElement('Senses', this.senses));
        secondaryCardStats.appendChild(generateStatElement('Languages', this.languages));
        secondaryCardStats.appendChild(generateStatElement('CR', this.challengeRating));


        //Append everything to container.
        cardContainer.appendChild(cardHead);
        cardContainer.append(document.createElement('tapered-rule'));
        cardContainer.appendChild(generalCardStats);
        cardContainer.appendChild(generateAbilityTable(this.scores));
        cardContainer.append(document.createElement('tapered-rule'));
        cardContainer.append(secondaryCardStats);
        cardContainer.append(document.createElement('tapered-rule'));

        target.appendChild(cardContainer);

        /**
         * Nested function for generating element for individual stat.
         *
         * @param description
         * @param value
         * @returns {Element}
         */
        function generateStatElement(description, value){
            let statContainer = document.createElement('div');
            statContainer.setAttribute('class', 'statline');
            let statHeader = document.createElement('h4');
            statHeader.textContent = `${description}:`;
            let statValue = document.createElement('p');
            statValue.textContent = value;

            statContainer.appendChild(statHeader);
            statContainer.appendChild(statValue);

            return statContainer;
        }

        function generateAppendableProperty(title, appendableProperties){
            let appendableProperty = document.createElement('div');
            appendableProperty.setAttribute('class', 'propertyblock');
            appendableProperty.setAttribute('style', 'width:100%');

            let appendableTitle = document.createElement('div');
            appendableTitle.setAttribute('class', 'title');
            appendableTitle.textContent = title;

            //TODO: ---- STOPPED HERE ---
            //TODO: Iterate through appendableProperties and add element for each.
        }

        /**
         * Nested function for generating table element for containing all ability scores.
         * @param abilityScores
         * @returns {Element}
         */
        function generateAbilityTable(abilityScores){
            let abilityTableContainer = document.createElement('div');

            let abilityTable = document.createElement('table');
            abilityTable.setAttribute('class', 'abilstable');

            let tableBody = document.createElement('tbody');

            //Create and append Table Headers for each ability score.
            let nameRow = document.createElement('tr');
            let strHeader = document.createElement('th');
            strHeader.textContent = 'STR';
            let dexHeader = document.createElement('th');
            dexHeader.textContent = 'DEX';
            let conHeader = document.createElement('th');
            conHeader.textContent = 'CON';
            let intHeader = document.createElement('th');
            intHeader.textContent = 'INT';
            let wisHeader = document.createElement('th');
            wisHeader.textContent = 'WIS';
            let chaHeader = document.createElement('th');
            chaHeader.textContent = 'CHA';
            nameRow.appendChild(strHeader);
            nameRow.appendChild(dexHeader);
            nameRow.appendChild(conHeader);
            nameRow.appendChild(intHeader);
            nameRow.appendChild(wisHeader);
            nameRow.appendChild(chaHeader);
            tableBody.appendChild(nameRow);

            tableBody.appendChild(document.createElement('tr'));

            //Create and append Table Data for each ability score.
            let valueRow = document.createElement('tr');
            let strData = document.createElement('td');
            strData.setAttribute('id','str');
            let strValue = document.createElement('span');
            strValue.textContent = abilityScores.str;
            strData.appendChild(strValue);
            let dexData = document.createElement('td');
            dexData.setAttribute('id', 'dex');
            let dexValue = document.createElement('span');
            dexValue.textContent= abilityScores.dex;
            dexData.appendChild(dexValue);
            let conData = document.createElement('td');
            conData.setAttribute('id', 'con');
            let conValue = document.createElement('span');
            conValue.textContent = abilityScores.con;
            conData.appendChild(conValue);
            let intData = document.createElement('td');
            intData.setAttribute('id', 'int');
            let intValue = document.createElement('span');
            intValue.textContent = abilityScores.int;
            intData.appendChild(intValue);
            let wisData = document.createElement('td');
            wisData.setAttribute('id', 'wis');
            let wisValue = document.createElement('span');
            wisValue.textContent = abilityScores.wis;
            wisData.appendChild(wisValue);
            let chaData = document.createElement('td');
            chaData.setAttribute('id', 'cha');
            let chaValue = document.createElement('span');
            chaValue.textContent = abilityScores.cha;
            chaData.appendChild(chaValue);
            valueRow.appendChild(strData);
            valueRow.appendChild(dexData);
            valueRow.appendChild(conData);
            valueRow.appendChild(intData);
            valueRow.appendChild(wisData);
            valueRow.appendChild(chaData);
            tableBody.appendChild(valueRow);


            abilityTable.appendChild(tableBody);
            abilityTableContainer.appendChild(abilityTable);

            return abilityTableContainer;
        }
    }
}

/* render() needs to Create this:

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
 */