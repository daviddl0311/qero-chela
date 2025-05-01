let button = document.getElementById("btn");
let button2 = document.getElementById("btn2");

if(localStorage.getItem("verificado") === "true") {
    window.location.replace("https://qerochela.com/");
} else {
    localStorage.setItem("verificado", "false");
}

button.addEventListener("click", () => {
    localStorage.setItem("verificado", "true");
    window.location.replace("https://qerochela.com/");
});

console.log(localStorage.getItem("verificado"));

button2.addEventListener("click", () => {
    window.location.replace("https://www.google.com/");
});
