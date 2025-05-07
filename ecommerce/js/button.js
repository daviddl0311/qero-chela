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
    const imgPro = producto.querySelector(".img-producto");

    switch(btn.id) {
        case "btn1":
            precioPro.textContent = "7.50";
            imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png";
            console.log(precioPro.textContent.trim());
            break;
        case "btn2":
            precioPro.textContent = "45.00";
            imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png";
            break;
        case "btn3":
            precioPro.textContent = "175.00";
            imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png";
            break;
        case "btn4":
            precioPro.textContent = "465.00";
            imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/681a91af4810a725ec4834f1_barril-30.png";
            break;
        case "btn5":
            precioPro.textContent = "749.00";
            imgPro.src ="https://cdn.prod.website-files.com/680f81021936b0d565d34173/681a91afc94d33a3106045f6_barril-50.png";
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
