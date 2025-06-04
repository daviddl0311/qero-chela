let state = document.querySelector("#state");

if(state.textContent === "En Stock") {
    state.style.color = "green";
} else {
    state.style.color = "red";
}
