document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("button").forEach((btn) => {
        btn.addEventListener("click", () => {
            changeFormato(btn);
        });
    });

    /*document.querySelectorAll(".input-cantidad").forEach((cantidad) => {
        cantidad.addEventListener("input", () => {

        });
    });*/
});

function changeFormato(btn) {
    const producto = btn.closest(".item-producto");
    const precioPro = producto.querySelector(".precio");

    switch(btn.id) {
        case "btn1":
            precioPro.textContent = "7.50";
            break;
        case "btn2":
            precioPro.textContent = "45.00";
            break;
        case "btn3":
            precioPro.textContent = "175.00";
            break;
        case "btn4":
            precioPro.textContent = "465.00";
            break;
        case "btn5":
            precioPro.textContent = "749.00";
            break;
    }

    producto.querySelectorAll("button").forEach(button => button.classList.remove("button-opacity"));
    btn.classList.add("button-opacity");
}
