import { playCodes } from "./playCodes.js";

function buildCharList(playCode) {
    charSelector.innerHTML = "";
    if (!playCode) {
        return;
    }
    console.log("Did the thing");

    //Set default hidden value
    const defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.textContent = "Select a Character";
    defaultOption.disabled = true;
    defaultOption.hidden = true;
    defaultOption.selected = true;
    charSelector.appendChild(defaultOption);

    //TODO: Finish creating character dropdown

    charSelector.disabled = false;
    charSelector.classList.remove("opacity-50");
}

const playSelector = document.querySelector("#playSelect");
const charSelector = document.querySelector("#characterSelect");
const submitButton = document.querySelector("#submit");
playSelector.addEventListener("change", (e) => buildCharList(e.target.value));

//TODO: Enable submit button once a character is selected