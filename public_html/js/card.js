/**
 * Created by Danny on 10/22/2017.
 */


/**
 * Class representing Card created by user.
 */
export class Card {
    constructor(title, subtitle, armorClass, hitPoints, speed, skills, senses, languages, challengeRating, scores, abilities, actions, reactions, legendaryActions, notes) {
        this.title = title;
        this.subtitle = subtitle;
        this.armorClass = armorClass;
        this.hitPoints = hitPoints;
        this.cardSpeed = speed;
        this.skills = skills;
        this.senses = senses;
        this.languages = languages;
        this.challengeRating = challengeRating;
        this.notes = notes;

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

        //Create and append card notes.
        let cardNotesContainer = document.createElement('div');
        cardNotesContainer.setAttribute('class', 'propertyblock');
        cardNotesContainer.setAttribute('style', 'width:100%');
        let cardNotesTitle = document.createElement('div');
        cardNotesTitle.setAttribute('class', 'title');
        cardNotesTitle.textContent = 'Notes';
        let cardNotes = document.createElement('p');
        cardNotes.textContent = this.notes;
        cardNotesContainer.appendChild(cardNotesTitle);
        cardNotesContainer.appendChild(cardNotes);

        let appendableTitle = document.createElement('div');
        appendableTitle.setAttribute('class', 'title');

        //Append everything to container.
        cardContainer.appendChild(cardHead);
        cardContainer.appendChild(document.createElement('tapered-rule'));
        cardContainer.appendChild(generalCardStats);
        cardContainer.appendChild(generateAbilityTable(this.scores));
        cardContainer.appendChild(document.createElement('tapered-rule'));
        cardContainer.appendChild(secondaryCardStats);
        cardContainer.appendChild(document.createElement('tapered-rule'));
        cardContainer.appendChild(generateAppendableProperty('Abilities', this.abilities));
        cardContainer.appendChild(generateAppendableProperty('Actions', this.actions));
        cardContainer.appendChild(generateAppendableProperty('Reactions', this.reactions));
        cardContainer.appendChild(generateAppendableProperty('Legendary Actions', this.legendaryActions));
        cardContainer.appendChild(document.createElement('tapered-rule'));
        cardContainer.appendChild(cardNotesContainer);

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

        /**
         * Generate element containing appendable properties.
         * @param title Name of appendable properties.
         * @param appendableProperties Array of appendable properties.
         * @returns {Element} HTML element containing appendable properties.
         */
        function generateAppendableProperty(title, appendableProperties){
            let appendablesContainer = document.createElement('div');
            appendablesContainer.setAttribute('class', 'propertyblock');
            appendablesContainer.setAttribute('style', 'width:100%');

            let appendableTitle = document.createElement('div');
            appendableTitle.setAttribute('class', 'title');
            appendableTitle.textContent = title;

            appendablesContainer.appendChild(appendableTitle);

            appendableProperties.forEach((property)=>{
               let appendableContainer = document.createElement('div');

               let appendableName = document.createElement('h4');
               appendableName.textContent = property.name;

               let appendableDescription = document.createElement('p');
               appendableDescription.textContent = property.desc;

               appendableContainer.appendChild(appendableName);
               appendableContainer.appendChild(appendableDescription);

               appendablesContainer.appendChild(appendableContainer);
            });

            return appendablesContainer;
        }

        /**
         * Nested function for generating table element for containing all ability scores.
         * @param abilityScores Array containing ability scores.
         * @returns {Element} HTML table element containing all of the Ability Scores.
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
            strValue.textContent = `${abilityScores.str}(${calculateModifier(abilityScores.str)})`;
            strData.appendChild(strValue);
            let dexData = document.createElement('td');
            dexData.setAttribute('id', 'dex');
            let dexValue = document.createElement('span');
            dexValue.textContent= `${abilityScores.dex}(${calculateModifier(abilityScores.dex)})`;
            dexData.appendChild(dexValue);
            let conData = document.createElement('td');
            conData.setAttribute('id', 'con');
            let conValue = document.createElement('span');
            conValue.textContent = `${abilityScores.con}(${calculateModifier(abilityScores.con)})`;
            conData.appendChild(conValue);
            let intData = document.createElement('td');
            intData.setAttribute('id', 'int');
            let intValue = document.createElement('span');
            intValue.textContent = `${abilityScores.int}(${calculateModifier(abilityScores.int)})`;
            intData.appendChild(intValue);
            let wisData = document.createElement('td');
            wisData.setAttribute('id', 'wis');
            let wisValue = document.createElement('span');
            wisValue.textContent = `${abilityScores.wis}(${calculateModifier(abilityScores.wis)})`;
            wisData.appendChild(wisValue);
            let chaData = document.createElement('td');
            chaData.setAttribute('id', 'cha');
            let chaValue = document.createElement('span');
            chaValue.textContent = `${abilityScores.cha}(${calculateModifier(abilityScores.cha)})`;
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

            /**
             * Nested function to calculate modifier.
             * @param statTotal
             * @returns {*}
             */
            function calculateModifier(statTotal){
                if (typeof(statTotal)!=='number') statTotal = parseInt(statTotal);
                let statMod = Math.floor((statTotal - 10) / 2);
                if(statMod > 0 ){
                    return `+${statMod}`;
                } else {
                    return statMod;
                }
            }
        }
    }
}