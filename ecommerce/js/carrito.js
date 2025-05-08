let sum = 0;

document.addEventListener("DOMContentLoaded", function() {
    
    messageCarrito();
    
    document.querySelectorAll(".input-enviar").forEach((btnEnviar) => {
        btnEnviar.addEventListener("click", () => {
            enlistarCarrito(btnEnviar);
            //console.log(document.querySelector("#mi-carrito").childElementCount);
        });
    });
});

function messageCarrito() {
    const carrito = document.getElementById("mi-carrito");
    let messageCarrito = document.createElement("li");
    
    if(carrito.children.length == 0) {
        messageCarrito.setAttribute("class", "message-carrito center");
        messageCarrito.innerHTML = 
        `<div class="flex flex-column center gap-message">
            <div>
                <div class="center mess-text-1">
                    <p>Tu carrito está vacío...</p>
                </div>
                <div class="center mess-text-2">
                    <p>¡pero no por mucho tiempo!</p>
                </div>
            </div>
            <div class="center-align mess-text-3">
                <p>Explora nuestras mejores ofertas y encuentra lo que necesitas.</p>
            </div>
        </div>`;
        carrito.appendChild(messageCarrito);
    }
}

function alerta() {
    const carrito = document.getElementById("mi-carrito");
    const contenido = carrito.innerText || carrito.textContent;


    const mensaje = encodeURIComponent(contenido);
    const numero = 51955369597;
    const url = `https://wa.me/${numero}?text=${mensaje}`;
    
    window.open(url, "_blank");
    console.log(contenido[3]);
}


function enlistarCarrito(btnEnviar) {
    const producto = btnEnviar.closest(".item-producto");
    const productoName = producto.querySelector(".producto-name").textContent.trim();
    const productoImg = producto.querySelector(".img-producto").src;
    const productoPrecio = producto.querySelector(".precio").textContent;
    const productoFormato = producto.querySelector(".button-opacity").textContent;
    const productoCantidad = producto.querySelector(".producto-cantidad").textContent;
    const productoButton = producto.querySelector(".input-enviar");

    productoButton.disabled = true;
    producto.style.opacity = "0.5";
    productoButton.textContent = "✔";

    let item = document.createElement("li");
    item.setAttribute("class","item-carrito");
    item.innerHTML= `
    <div class="flex mi-carrito-gap flex-column-producto-3">
        <div class="carrito-img center">
            <img src="${productoImg}" alt="${productoName}" id="mi-carrito-img">
        </div>
        <div class="flex flex-column center mi-carrito-gap2">
            <div class="carrito-title">
                <p>${productoName}</p>
            </div>
            <div class="flex flex-column center mi-carrito-gap3">
                <div class="carrito-formato">
                    <p>Formato: <span id="carrito-for">${productoFormato}</span></p>
                </div>
                <div class="carrito-cantidad">
                    <p>Cantidad: <span id="carrito-cant">${productoCantidad}</span></p>
                </div>
                <div class="carrito-subtotal">
                    <p>SubTotal: S/. <span id="carrito-sub">${parseFloat(productoPrecio*productoCantidad).toFixed(2)}</span></p>
                </div>
            </div>
        </div>
    </div>
     <button class="center item-delete">
        <i class="fa-solid fa-xmark"></i>
    </button>`;

    //Borra el Mensaje Carrito
    document.querySelector(".message-carrito").classList.add("display-none");
    
    //Se enlista en el Carrito
    document.getElementById("mi-carrito").appendChild(item);

    //Aumentar Cantidad
    sum+=1;
    totalProducto(sum);

    //Mensaje Emergente
    emergeMessage();

    //Evento de Button Eliminar
    const deleteItemButton = document.querySelectorAll(".item-delete");

    deleteItemButton.forEach((itemDel) => {
        itemDel.addEventListener("click", () => {
            deleteItem(itemDel, producto);
        });
    });
}

function deleteItem(itemDel, producto) {
    const productoItem = itemDel.closest(".item-carrito");
    const productoButton = producto.querySelector(".input-enviar");

    //Eliminar Producto en Carrito
    document.getElementById("mi-carrito").removeChild(productoItem);
    
    productoButton.disabled = false;
    producto.style.opacity = "1";
    productoButton.textContent = "Añadir";

    //Mensage Emergente
    emergeMessageDel();

    //Dismuir en Carrito
    sum-=1;
    totalProducto(sum);

    addMessage();
    // console.log(document.querySelector("#mi-carrito").childElementCount);
}   

function addMessage() {
    if(document.querySelector("#mi-carrito").children.length <= 1) {
        document.querySelector(".message-carrito").classList.remove("display-none");
    }
}

function emergeMessage() {
    let msgList = document.querySelector("#list-msg");
    let msgList_item = document.createElement("li");
    
    msgList_item.setAttribute("class", "center slide-in-right list-dl");
    msgList_item.textContent = "Producto Añadido";

    msgList.appendChild(msgList_item);

    setTimeout(() => {
        msgList.removeChild(msgList_item);
    }, 7000);
}

function emergeMessageDel() {
    let msgList = document.querySelector("#list-msg");
    let msgList_item = document.createElement("li");
    
    msgList_item.setAttribute("class", "center slide-in-right list-dl-2");
    msgList_item.textContent = "Producto Eliminado";

    msgList.appendChild(msgList_item);

    setTimeout(() => {
        msgList.removeChild(msgList_item);
    }, 7000);
}

function totalProducto(sum) {
    document.querySelector(".n-items").textContent = sum;
}