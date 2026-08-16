import { playCodes } from "./playCodes.js";

const charName = playCodes[window.playCode][window.characterCode];
document.title = charName + " Script";
const content = document.querySelector("#script-container");

const speakers = Array.from(document.querySelectorAll(".speaker"))
    .filter(speaker => speaker.textContent === charName.toUpperCase());

let charLines = [];
for (const speaker of speakers) {
    let line = speaker.nextSibling;
    //Loop through lines after current character's speaker tag until reaching the next speaker tag
    while (line) {
        //Only highlight character's spoken lines
        if (line.nodeType === Node.TEXT_NODE) {
            //Ignore blank lines
            if (line.textContent.trim() !== "") {
                charLines.push(line);
            }
        }
        else {
            //When encountering a line that isn't the character's, skip to their next line
            if (line.nodeName === "SPAN" && line.classList.contains("speaker")) {
                break;
            }
        }
        line = line.nextSibling;
    }
}

for (const line of charLines) {
    const spanWrapper = document.createElement("span");
    spanWrapper.style.backgroundColor= "LightPink";
    content.replaceChild(spanWrapper, line);
    spanWrapper.appendChild(line);
}

//TODO: Add dropdown to change highlight color
//TODO: Add spoiler tag and single letter modes
//TODO: Add jump to scene or only display chosen scene