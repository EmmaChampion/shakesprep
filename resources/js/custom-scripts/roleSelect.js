import { playCodes } from "./playCodes.js";

function buildCharList(playCode) {
    charSelector.innerHTML = "";
    if (!playCode) {
        return;
    }
    const charList = playCodes[playCode]
    submitButton.disabled = true;

    //Set default hidden value
    const defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.textContent = "Select a Character";
    defaultOption.disabled = true;
    defaultOption.hidden = true;
    defaultOption.selected = true;
    charSelector.appendChild(defaultOption);

    //Make an option for each character in the chosen play
    for (const character in charList) {
        const charOption = document.createElement("option");
        charOption.value = character;
        charOption.textContent = charList[character];
        charSelector.appendChild(charOption);
    }

    charSelector.disabled = false;
    charSelector.classList.remove("opacity-50");
}

const playSelector = document.querySelector("#playSelect");
const charSelector = document.querySelector("#characterSelect");
const submitButton = document.querySelector("#submit");
playSelector.addEventListener("change", (e) => buildCharList(e.target.value));
charSelector.addEventListener("change", () => submitButton.disabled = false);