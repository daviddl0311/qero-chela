console.log(localStorage.getItem("verificado"));

if(localStorage.getItem("verificado") == "false" || localStorage.getItem("verificado") == null) {
    window.location.replace("https://qerochela.com/verificador.html");
}
