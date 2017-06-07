/**
 * Created by Payton on 6/4/2017.
 */
var wis = 0;
var str = 0;
var cha = 0;
var dex = 0;
var int = 0;
var highest = 0;
var bestClass = -1;
var secondHighest = -1;
/**
 0. Barbarian
 1. Bard
 2. Cleric
 3. Druid
 4. Fighter
 5. Monk
 6. Paladin
 7. Rogue
 8. Ranger
 9. Sorcerer
 10. Warlock
 11. Wizard
 * @type {Array}
 */
var classArr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var rawAlignment = 0;
var alignmentMod = 0;
var fightingStyle = "";


function finalClick() {
    if (wis == 3 || int == 3 || dex == 3 || str == 3 || cha == 3) {
        if (wis == 3) {
            document.getElementById('prefabs').innerHTML += "Strongly prefer Wisdom<br>";
        }
        if (int == 3) {
            //print strongly prefer int
            document.getElementById('prefabs').innerHTML += "Strongly prefer Intelligence<br>";
        }
        if (dex == 3) {
            //print strongly prefer dex
            document.getElementById('prefabs').innerHTML += "Strongly prefer Dexterity<br>";
        }
        if (str == 3) {
            //print strongly prefer str
            document.getElementById('prefabs').innerHTML += "Strongly prefer Strength<br>";
        }
        if (cha == 3) {
            //print strongly prefer cha
            document.getElementById('prefabs').innerHTML += "Strongly prefer Charisma<br>";
        }
    }
    if (wis == 2) {
        //print prefer wisdom
        document.getElementById('prefabs').innerHTML += " moderately prefers Wisdom<br>";
    }
    if (int == 2) {
        //print prefer int
        document.getElementById('prefabs').innerHTML += " moderately prefers Intelligence<br>";
    }
    if (dex == 2) {
        //print prefer dex
        document.getElementById('prefabs').innerHTML += " moderately prefers Dexterity<br>";
    }
    if (str == 2) {
        //print prefer str
        document.getElementById('prefabs').innerHTML += " moderately prefers Strength<br>";
    }
    if (cha == 2) {
        //print prefer cha
        document.getElementById('prefabs').innerHTML += " moderately prefers Charisma<br>";
    }

    if (wis == 1) {
        //print slight prefer wisdom
        document.getElementById('prefabs').innerHTML += " slightly prefers Wisdom<br>";
    }
    if (int == 1) {
        //print slight prefer int
        document.getElementById('prefabs').innerHTML += " slightly prefers Intelligence<br>";
    }
    if (dex == 1) {
        //print slight prefer dex
        document.getElementById('prefabs').innerHTML += " slightly prefers Dexterity<br>";
    }
    if (str == 1) {
        //print slight prefer str
        document.getElementById('prefabs').innerHTML += " slightly prefers Strength<br>";
    }
    if (cha == 1) {
        //print slight prefer cha
        document.getElementById('prefabs').innerHTML += " slightly prefers Charisma<br>";
    }

    for (i = 0; i < classArr.length; i++)
    {
        if (classArr[i] > highest)
        {
            highest = classArr[i];
            bestClass = i;

        }
        else if (classArr[i] == (highest-1) && highest != 0)
        {
            secondHighest = i;
            if (bestClass == secondHighest)
            {
                secondHighest = -1;
            }
        }
    }
    switch (bestClass)
    {
        case -1:
            document.getElementById('class').innerHTML = "Error";
            break;
        case 0:
            document.getElementById('class').innerHTML = "Barbarian";
            break;
        case 1:
            document.getElementById('class').innerHTML = "Bard";
            break;
        case 2:
            document.getElementById('class').innerHTML = "Cleric";
            break;
        case 3:
            document.getElementById('class').innerHTML = "Druid";
            break;
        case 4:
            document.getElementById('class').innerHTML = "Fighter";
            break;
        case 5:
            document.getElementById('class').innerHTML = "Monk";
            break;
        case 6:
            document.getElementById('class').innerHTML = "Paladin";
            break;
        case 7:
            document.getElementById('class').innerHTML = "Rogue";
            break;
        case 8:
            document.getElementById('class').innerHTML = "Ranger";
            break;
        case 9:
            document.getElementById('class').innerHTML = "Sorcerer";
            break;
        case 10:
            document.getElementById('class').innerHTML = "Warlock";
            break;
        case 11:
            document.getElementById('class').innerHTML = "Wizard";
            break;
    }
    switch (secondHighest)
    {
        case -1:
            document.getElementById('class2').innerHTML = "None";
            break;
        case 0:
            document.getElementById('class2').innerHTML = "Barbarian";
            break;
        case 1:
            document.getElementById('class2').innerHTML = "Bard";
            break;
        case 2:
            document.getElementById('class2').innerHTML = "Cleric";
            break;
        case 3:
            document.getElementById('class2').innerHTML = "Druid";
            break;
        case 4:
            document.getElementById('class2').innerHTML = "Fighter";
            break;
        case 5:
            document.getElementById('class2').innerHTML = "Monk";
            break;
        case 6:
            document.getElementById('class2').innerHTML = "Paladin";
            break;
        case 7:
            document.getElementById('class2').innerHTML = "Rogue";
            break;
        case 8:
            document.getElementById('class2').innerHTML = "Ranger";
            break;
        case 9:
            document.getElementById('class2').innerHTML = "Sorcerer";
            break;
        case 10:
            document.getElementById('class2').innerHTML = "Warlock";
            break;
        case 11:
            document.getElementById('class2').innerHTML = "Wizard";
            break;
    }
    if (rawAlignment < 0) {
        document.getElementById('rawalign').innerHTML = "Evil";
    }
    if (rawAlignment > 0) {
        document.getElementById('rawalign').innerHTML = "Good";
    }
    if (rawAlignment == 0) {
        document.getElementById('rawalign').innerHTML = "Neutral";
    }

    if (alignmentMod > 0) {
        document.getElementById('alignmod').innerHTML = "Lawful";
    }
    if (alignmentMod < 0) {
        document.getElementById('alignmod').innerHTML = "Chaotic";
    }
    if (alignmentMod == 0) {
        document.getElementById('alignmod').innerHTML = "Neutral";
    }
    // document.getElementById('str').innerHTML = "" + str;
    // document.getElementById('dex').innerHTML = "" + dex;
    // document.getElementById('wis').innerHTML = "" + wis;
    // document.getElementById('intell').innerHTML = "" + int;
    // document.getElementById('cha').innerHTML = "" + cha;
}
function whenClicked() {
    if (document.getElementById('1a').checked || document.getElementById('9a').checked || document.getElementById('10b').checked) {
        str += 1;
    }
    if (document.getElementById('1b').checked || document.getElementById('9c').checked || document.getElementById('10a').checked) {
        dex += 1;
    }
    if (document.getElementById('1c').checked || document.getElementById('9b').checked || document.getElementById('10a').checked) {
        int += 1;
    }
    if (document.getElementById('1d').checked || document.getElementById('9c').checked || document.getElementById('10b').checked) {
        cha += 1;
    }
    if (document.getElementById('1e').checked || document.getElementById('9b').checked || document.getElementById('10a').checked) {
        wis += 1;
    }
    if (document.getElementById('2b').checked || document.getElementById('2c').checked || document.getElementById('2d').checked
        || document.getElementById('8c').checked || document.getElementById('11b').checked) {
        rawAlignment += 1;
    }

    if (document.getElementById('2e').checked || document.getElementById('2f').checked || document.getElementById('2g').checked
        || document.getElementById('8a').checked || document.getElementById('11c').checked) {
        rawAlignment -= 1;
    }
    if (document.getElementById('2d').checked || document.getElementById('8d').checked || document.getElementById('11d').checked || document.getElementById('2g').checked){
        alignmentMod -= 1;
    }
    if (document.getElementById('2b').checked || document.getElementById('8e').checked || document.getElementById('11e').checked || document.getElementById('2e').checked){
        alignmentMod += 1;
    }

    if (document.getElementById('3a').checked)
    {
        classArr[0] += 1;
        // classArr[1] += 1;
        classArr[4] += 1;
        classArr[6] += 1;
        classArr[7] += 1;
    }
    if (document.getElementById('3b').checked)
    {
        classArr[1] += 1;
        classArr[2] += 1;
        classArr[3] += 1;
        classArr[9] += 1;
        classArr[10] += 1;
        classArr[11] += 1;
    }
    if (document.getElementById('3c').checked)
    {
        classArr[7] += 1;
        classArr[8] += 1;

    }
    if (document.getElementById('4a').checked)
    {
        classArr[0] += 1;
        classArr[4] += 1;
        classArr[5] += 1;
    }
    if (document.getElementById('4b').checked)
    {
        classArr[3] += 1;
        classArr[9] += 1;
        classArr[10] += 1;
        classArr[11] += 1;
    }
    if (document.getElementById('4c').checked)
    {
        classArr[7] += 1;
    }

    if (document.getElementById('4d').checked)
    {
        classArr[8] += 1;
    }

    if (document.getElementById('4e').checked)
    {
        classArr[1] += 1;
        classArr[2] += 1;
        classArr[6] += 1;
    }
    if (document.getElementById('4f').checked)
    {
        classArr[2] += 1;
        classArr[6] += 1;
    }
    if (document.getElementById('5a').checked)
    {
        classArr[0] += 1;
    }

    if (document.getElementById('5b').checked)
    {
        classArr[4] += 1;
    }
    if (document.getElementById('5c').checked)
    {
        classArr[5] += 1;
    }

    if (document.getElementById('6c').checked)
    {
        classArr[10] += 1;
    }

    if (document.getElementById('6a').checked)
    {
        classArr[11] += 1;
    }

    if (document.getElementById('6b').checked)
    {
        classArr[9] += 1;
    }
    if (document.getElementById('6d').checked)
    {
        classArr[3] += 1;
    }

    if (document.getElementById('7a').checked)
    {
        classArr[1] += 1;
    }

    if (document.getElementById('7b').checked)
    {
        classArr[6] += 1;
    }
    if (document.getElementById('7c').checked)
    {
        classArr[2] += 1;
    }

    var radios = document.getElementsByName("radios");
    // document.getElementById('classDebug').innerHTML = "";
    // for (i = 0; i < classArr.length; i++)
    // {
    //     document.getElementById('classDebug').innerHTML += (classArr[i] + " ");
    // }

    // for (var i = 0; i < radios.length; i++)
    //     radios[i].checked = false;

}