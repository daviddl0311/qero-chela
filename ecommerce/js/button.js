document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".formato").forEach((btn) => {
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

    document.querySelectorAll(".stock").forEach(myStock => {
        statusStock(myStock);
    });
});

function changeFormato(btn) {
    const producto = btn.closest(".item-producto");
    const precioPro = producto.querySelector(".precio");
    const imgPro = producto.querySelector(".img-producto");
    const nombrePro = producto.querySelector(".productos-name");

    switch(btn.id) {
        case "btn1":
            precioPro.textContent = "8.85";
            if(nombrePro.textContent.trim() == "aborigen") {
                imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png";
            } else {
                imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f8153dbb31f989894afc0_QeroChela_LunaMiel.png";
            }
            break;
        case "btn2":
            precioPro.textContent = "34.46";
            if(nombrePro.textContent.trim() == "aborigen") {
                imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png";
            } else {
                imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/68389758ac5956e135583045_11.png";
            }
            break;
        case "btn3":
            precioPro.textContent = "53.10";
            if(nombrePro.textContent.trim() == "aborigen") {
                imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png";
            } else {
                imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/683897589fb2a38753873b64_12.png";
            }
            break;
        case "btn4":
            precioPro.textContent = "206.50";
             if(nombrePro.textContent.trim() == "aborigen") {
                imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png";
            } else {
                imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f8153dbb31f989894afc0_QeroChela_LunaMiel.png";
            }
            break;
        case "btn5":
            precioPro.textContent = "548.70";
            imgPro.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/681a91af4810a725ec4834f1_barril-30.png";
            break;
        case "btn6":
            precioPro.textContent = "883.82";
            imgPro.src ="https://cdn.prod.website-files.com/680f81021936b0d565d34173/681a91afc94d33a3106045f6_barril-50.png";
            break;
    }

    //Remover clase formato-selected
    producto.querySelectorAll(".formato").forEach(button => button.classList.remove("formato-selected"));
    //Añadir clase formato-selected
    btn.classList.add("formato-selected");
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

function statusStock (myStock) {
    const producto = myStock.closest(".item-producto");
    const btnEnviar = producto.querySelector(".input-enviar");
    const productoImg = producto.querySelector(".img-producto");
    const productoNombre = producto.querySelector(".productos-name");
    const productoPrecio = producto.querySelector(".productos-precio");
    const productoIGV = producto.querySelector(".productos-igv");
    const productoCantidad = producto.querySelector(".producto-cantidad");
    const btnFormato = producto.querySelectorAll(".formato");
    const btnPlus = producto.querySelector(".btn-plus");
    const btnMinus = producto.querySelector(".btn-minus");
    const stock = producto.querySelector(".stock");
    
    
    if(stock.textContent.trim("") == "Agotado") {
        productoImg.style.opacity = ".5";
        productoNombre.style.opacity = ".5";
        productoPrecio.style.opacity = ".5";
        productoIGV.style.opacity = ".5";
        productoCantidad.style.opacity = ".5";
        btnPlus.disabled = true;
        btnMinus.disabled = true;
        btnFormato.forEach(formato => formato.disabled = true);
        btnEnviar.disabled = true;
        btnEnviar.textContent = "agotado";
    }
}
