document.addEventListener("DOMContentLoaded", () => {
    document.querySelector("#formulario").addEventListener("submit", function (e) {
        e.preventDefault();
        
        const datos = new FormData(this);

        fetch("php/embajadoras.php", {
            method: "POST",
            body: datos
        })
        .then(res => res.text())
        .then(respuesta => {
            alert("¡Datos enviados, gracias! Pronto te contactamos para ser parte de Q’ero Chela.");

            document.querySelector("#nombre").value = "";
            document.querySelector("#apellido").value = "";
            document.querySelector("#email").value = "";
        })
    });
});