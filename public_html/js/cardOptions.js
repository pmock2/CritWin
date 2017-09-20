/**
 *  Javascript for CardOptions page.
 *
 *  Created by by Danny on 9/19/2017.
 */

/** CSS Selectors **/
const SUBMIT_BUTTON = '#card-submit-btn';
const CARD_TITLE = '#title';
const CARD_SUBTITLE  = '#subtitle';
const CARD_SKILLS = '#skills';
const CARD_SENSES = '#senses';
const CARD_LANGUAGES = '#languages';
const CARD_CHALLENGERATING = '#cr';


(function (){
    // Initialize elements
    let submitButton = document.querySelector(SUBMIT_BUTTON);

    /**
     * Adds Event Listener to submitButton.
     * For now, only being used to help test query selectors and model JSON object to be exported.
     */
    submitButton.addEventListener('click', (evt)=>{
        evt.preventDefault();
        let cardTitle = document.querySelector(CARD_TITLE).value;
        let cardSubtitle = document.querySelector(CARD_SUBTITLE).value;
        let cardSkills = document.querySelector(CARD_SKILLS).value;
        let cardSenses = document.querySelector(CARD_SENSES).value;
        let cardLanguages = document.querySelector(CARD_LANGUAGES).value;
        let cardChallengeRating = document.querySelector(CARD_CHALLENGERATING).value;

        let _card = new Card(cardTitle, cardSubtitle, cardSkills, cardSenses, cardLanguages, cardChallengeRating);
        _card.logContent();
        console.log(_card.toJSON());
    });


})();

/**
 * Class representing Card created by user.
 */
class Card{
    constructor(title, subtitle, skills, senses, languages, challengeRating){
        this.title = title;
        this.subtitle = subtitle;
        this.skills = skills;
        this.senses = senses;
        this.languages = languages;
        this.challengeRating = challengeRating;
    }

    //Only for dev purposes.
    logContent(){
        console.log(`Title: ${this.title}`);
        console.log(`Subtitle: ${this.subtitle}`);
        console.log(`Skills: ${this.skills}`);
        console.log(`Senses: ${this.senses}`);
        console.log(`Languages: ${this.languages}`);
        console.log(`Challenge Rating ${this.challengeRating}`);

    }


    // This may not be needed, a predefined function likely exist to handle this.
    toJSON(){
        return {
            title: this.title,
            subtitle: this.subtitle,
            skills: this.skills,
            senses: this.senses,
            languages: this.languages,
            challengeRating: this.challengeRating,
        }
    }
}


