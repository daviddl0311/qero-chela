let sum = 0;

document.addEventListener("DOMContentLoaded", function() {
    
    messageCarrito();
    
    document.querySelectorAll(".input-enviar").forEach((btnEnviar) => {
        btnEnviar.addEventListener("click", () => {
            enlistarCarrito(btnEnviar);
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

function enlistarCarrito(btnEnviar) {
    const producto = btnEnviar.closest(".item-producto");
    const productoName = producto.querySelector(".productos-name").textContent.trim();
    const productoImg = producto.querySelector(".img-producto").src;
    const productoPrecio = producto.querySelector(".precio").textContent;
    const productoFormato = producto.querySelector(".formato-selected").textContent;
    const productoCantidad = producto.querySelector(".producto-cantidad").textContent;
    const productoButton = producto.querySelector(".input-enviar");
    
    //Botones de Formato
    const productoButtons = producto.querySelectorAll(".formato");
    //Boton de Aumentar
    const productoAddbtn = producto.querySelector(".btn-plus");
    //Boton de Disminuir
    const productoMinusbtn = producto.querySelector(".btn-minus");

    /*SUB-TOTAL*/
    let totalProducto = parseFloat(productoPrecio * productoCantidad).toFixed(2);

    //Deshabilitar Botones
    productoButton.disabled = true;
    producto.style.opacity = "0.5";
    productoButton.textContent = "✔";
    productoButtons.forEach(btn => {
        btn.disabled = true;
    });
    productoAddbtn.disabled = true;
    productoMinusbtn.disabled = true;

    let item = document.createElement("li");
    item.setAttribute("class","item-carrito");
    item.innerHTML= 
    `<div class="flex item-carrito-gap">
        <div class="flex flex-direction-item item-carrito-gap">
            <div class="center item-carrito-img">
                <img src="${productoImg}" alt="${productoName}">
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
    </div>
    <div class="btn-delete">
        <button class="item-delete center">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>`;

    //Activar Boton de Finalizar Compra
    activarBtnFin();

    //Aumentar Cantidad
    sum+=1;
    addItem(sum);

    //Mensaje Emergente de Producto Añadido
    emergeMessage();
    
    //Borra el Mensaje Carrito
    document.querySelector(".message-carrito").classList.add("display-none");

    //Se enlista en el Carrito
    document.getElementById("mi-carrito").appendChild(item);

    //Evento de Button Eliminar
    const deleteItemButton = document.querySelectorAll(".item-delete");

    deleteItemButton.forEach((itemDel) => {
        itemDel.addEventListener("click", () => {
            deleteItem(itemDel, producto);
        });
    });
}

function activarBtnFin() {
    let fin = document.querySelector("#finalCompra");
    let miCar = document.querySelector("#mi-carrito");

    if(miCar.children.length >= 0) {
        fin.style.opacity = "1";
    }
}

function desactivarBtnFin() {
    let fin = document.querySelector("#finalCompra");
    let miCar = document.querySelector("#mi-carrito");

    if(miCar.children.length <= 1) {
        fin.style.opacity = ".5";
    }

    console.log(miCar.children.length);
}

function addItem(sum) {
    let products = document.querySelector("#n-items");
    products.textContent = sum;
}

function deleteItem(itemDel, producto) {
    const productoItem = itemDel.closest(".item-carrito");
    const productoButton = producto.querySelector(".input-enviar");
    const productoButtons = producto.querySelectorAll(".formato");
    
    //Boton de Aumentar
    const productoAddbtn = producto.querySelector(".btn-plus");
    //Boton de Disminuir
    const productoMinusbtn = producto.querySelector(".btn-minus");

    //Eliminar Producto en Carrito
    document.getElementById("mi-carrito").removeChild(productoItem);
    
    //Habilitar Botones
    productoButton.disabled = false;
    producto.style.opacity = "1";
    productoButton.textContent = "Añadir";
    productoButtons.forEach(btn => {
        btn.disabled = false;
    });
    productoAddbtn.disabled = false;
    productoMinusbtn.disabled = false;

    //Mensage Emergente
    emergeMessageDel();

    //Dismuir en Carrito
    sum-=1;
    addItem(sum);

    //Desactivar Boton Finalizar
    desactivarBtnFin();

    //Añadir Mensaje
    addMessage();
}   

function emergeMessage() {
    let msgList = document.querySelector(".emerge-msg");
    let msgList_item = document.createElement("li");
    
    msgList_item.setAttribute("class", "add scale-in-center center");
    msgList_item.textContent = "Producto Añadido";

    msgList.appendChild(msgList_item);

    setTimeout(() => {
        msgList.removeChild(msgList_item);
    }, 3000);

}

function emergeMessageDel() {
    let msgList = document.querySelector(".emerge-msg");
    let msgList_item = document.createElement("li");
    
    msgList_item.setAttribute("class", "delete scale-in-center center");
    msgList_item.textContent = "Producto Eliminado";

    msgList.appendChild(msgList_item);

    setTimeout(() => {
        msgList.removeChild(msgList_item);
    }, 7000);
}

function addMessage() {
    if(document.querySelector("#mi-carrito").children.length <= 1) {
        document.querySelector(".message-carrito").classList.remove("display-none");
    }
}


