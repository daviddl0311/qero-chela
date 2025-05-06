document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".button").forEach((btn) => {
        btn.addEventListener("click", () => {
            changeFormato(btn);
        });
    });

    document.querySelectorAll(".btn-plus").forEach((btn) => {
        btn.addEventListener("click", () => {
            cantidadUpdate(btn, 1);
        })
    });
    document.querySelectorAll(".btn-minus").forEach((btn) => {
        btn.addEventListener("click", () => {
            cantidadUpdate(btn, -1);
        })
    });
});

function changeFormato(btn) {
    const producto = btn.closest(".item-producto");
    const precioPro = producto.querySelector(".precio");

    switch(btn.id) {
        case "btn1":
            precioPro.textContent = "7.50";
            console.log(precioPro.textContent.trim());
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

function cantidadUpdate(btn, cambio) {
    const producto = btn.closest(".item-producto");
    const cantidadP = producto.querySelector(".producto-cantidad");

    let newCantidad = parseInt(cantidadP.textContent) + cambio;

    if(newCantidad <= 1) {
        newCantidad = 1;
    }

    cantidadP.textContent = newCantidad;
}