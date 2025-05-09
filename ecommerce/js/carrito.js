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
    const items = document.querySelectorAll("#mi-carrito .item-carrito"); 

    let mensaje = '*Mi Carrito:*\n\n';

    items.forEach(item => {
        const lineas = item.querySelectorAll("p");
        mensaje += `*${lineas[0].innerText.trim()}*\n`;

        for(let i = 1; i < lineas.length; i++) {
            mensaje += lineas[i].innerText.trim() + '\n';
        }

        mensaje += '----------------------\n';
    })


    const mensajeCodificado = encodeURIComponent(mensaje);
    const numero = 51955369597;
    const url = `https://wa.me/${numero}?text=${mensajeCodificado}`;
    
    window.open(url, "_blank");
    console.log(items);
}


function enlistarCarrito(btnEnviar) {
    const producto = btnEnviar.closest(".item-producto");
    const productoName = producto.querySelector(".productos-name").textContent.trim();
    const productoImg = producto.querySelector(".img-producto").src;
    const productoPrecio = producto.querySelector(".precio").textContent;
    const productoFormato = producto.querySelector(".formato-selected").textContent;
    const productoCantidad = producto.querySelector(".producto-cantidad").textContent;
    const productoButton = producto.querySelector(".input-enviar");

    /*TOTAL*/
    let totalProducto = parseFloat(productoPrecio * productoCantidad).toFixed(2);

    productoButton.disabled = true;
    producto.style.opacity = "0.5";
    productoButton.textContent = "✔";

    let item = document.createElement("li");
    item.setAttribute("class","item-carrito");
    item.innerHTML= 
    `<div class="flex item-carrito-gap">
        <div class="flex flex-direction-item item-carrito-gap">
            <div class="center item-carrito-img">
                <img src=" ${productoImg}" alt="${productoName}">
            </div>
            <div class="flex flex-column center item-carrito-gap-2">
                <div class="item-carrito-producto">
                    <p>${productoName}</p>
                </div>
                <div class="flex flex-column item-carrito-gap-3">
                    <div class="item-carrito-formato">
                        <p>Formato: <span id="carrito-for">${productoFormato}</span></p>
                    </div>
                    <div class="item-carrito-cantidad">
                        <p>Cantidad: <span id="carrito-cant">${productoCantidad}</span></p>
                    </div>
                    <div class="item-carrito-subtotal">
                        <p>SubTotal: S/. <span id="carrito-sub">${totalProducto}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="item-delete center">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>`;

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
    //emergeMessageDel();

    //Dismuir en Carrito
    sum-=1;
    totalProducto(sum);

    //addMessage();
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