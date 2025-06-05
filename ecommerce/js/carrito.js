let sum = 0;

document.addEventListener("DOMContentLoaded", function() {
    
    messageCarrito();
    
    document.querySelectorAll(".input-enviar").forEach((btnEnviar) => {
        btnEnviar.addEventListener("click", () => {
            let value = mysabor(btnEnviar);
            
            if(value) {
                enlistarCarrito(btnEnviar);
            } else {
                alert("😅 ¡Oops! Tienes que elegir una Q'ero Chela y/o Tántrica antes de continuar.");
            }
        });
    });
});

function mysabor(btnEnviar) {
    const producto = btnEnviar.closest(".item-producto");
    const productoName = producto.querySelector(".productos-name").textContent.trim();
    
    if (productoName === "Unidad" || productoName === "Four Pack" || productoName === "Six Pack") {
        const sabor = producto.querySelector("#sabor");
        const selectedSabor = sabor.value;
        
        return selectedSabor === "Luna de Miel" || selectedSabor === "Tántrica";
    } 
    
    if (productoName === "Box Brindis" || productoName === "Box Standard" || productoName === "Box Premium") {
        const option1 = producto.querySelector(".op1");
        const option2 = producto.querySelector(".op2");
        
        const selectedSabor1 = option1.value;
        const selectedSabor2 = option2.value

        return (selectedSabor1 === "Luna de Miel" || selectedSabor1 === "Tántrica") && (selectedSabor2 === "Luna de Miel" || selectedSabor2 === "Tántrica");
    } 

    return true;
}

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
            <label for="burgercheck" class="center-align mess-btn">
                Seguir Comprando
            </label>
        </div>`;

        carrito.appendChild(messageCarrito);
    }
}

function enlistarCarrito(btnEnviar) {
    const producto = btnEnviar.closest(".item-producto");
    const productoName = producto.querySelector(".productos-name").textContent.trim();
    const productoImg = producto.querySelector(".img-producto").src;
    const productoPrecio = producto.querySelector(".precio").textContent;
    const productoCantidad = producto.querySelector(".producto-cantidad").textContent;

    //Obtenemos la categoria del producto
    const productoCat = producto.getAttribute("id");

    /*SUB-TOTAL*/
    let totalProducto = parseFloat(productoPrecio * productoCantidad).toFixed(2);

    let item = document.createElement("li");
    item.setAttribute("class","item-carrito");

    switch(productoCat) {
        case "bebida": 
            const productoFormato = producto.querySelector(".formato-selected").textContent;
        
            item.innerHTML= 
            `<div class="flex item-carrito-gap">
                <div class="flex flex-direction-item item-carrito-gap">
                    <div class="center item-carrito-img">
                        <img src="${productoImg}" alt="${productoName}" class='img-pedido'>
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
                                <p>Precio: S/ <span id="carrito-sub">${totalProducto}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-delete">
                <button class="item-delete center">
                    <i class="center fa-solid fa-xmark"></i>
                </button>
            </div>`;
            break;
        
        case "promo":
            if(productoName == "Unidad" || productoName == "Four Pack" || productoName == "Six Pack" ) {
                const productoSabor = producto.querySelector(".sabor").value;
                
                item.innerHTML= 
                `<div class="flex item-carrito-gap">
                    <div class="flex flex-direction-item item-carrito-gap">
                        <div class="center item-carrito-img">
                            <img src="${productoImg}" alt="${productoName}" class='img-pedido'>
                        </div>
                        <div class="flex flex-column center item-carrito-gap-2">
                            <div class="item-carrito-producto">
                                <p>${productoName}</p>
                            </div>
                            <div class="flex flex-column item-carrito-gap-3">
                                <div class="item-carrito-cantidad">
                                    <p>Sabor: <span id="carrito-sabor">${productoSabor}</span></p>
                                </div>
                                <div class="item-carrito-cantidad">
                                    <p>Cantidad: <span id="carrito-cant">${productoCantidad}</span></p>
                                </div>
                                <div class="item-carrito-subtotal">
                                    <p>Precio: S/ <span id="carrito-sub">${totalProducto}</span></p>
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
            } else if(productoName == "Box Brindis" || productoName == "Box Standard" || productoName == "Box Premium") {
                const productoDuo1 = producto.querySelector(".op1").value;
                const productoDuo2 = producto.querySelector(".op2").value;
                
                item.innerHTML= 
                `<div class="flex item-carrito-gap">
                    <div class="flex flex-direction-item item-carrito-gap">
                        <div class="center item-carrito-img">
                            <img src="${productoImg}" alt="${productoName}" class='img-pedido'>
                        </div>
                        <div class="flex flex-column center item-carrito-gap-2">
                            <div class="item-carrito-producto">
                                <p>${productoName}</p>
                            </div>
                            <div class="flex flex-column item-carrito-gap-3">
                                <div class="item-carrito-cantidad">
                                    <p>Duo: <span id="carrito-duo">${productoDuo1}</span> & <span id="carrito-duo">${productoDuo2}</span></p>
                                </div>
                                <div class="item-carrito-cantidad">
                                    <p>Cantidad: <span id="carrito-cant">${productoCantidad}</span></p>
                                </div>
                                <div class="item-carrito-subtotal">
                                    <p>Precio: S/ <span id="carrito-sub">${totalProducto}</span></p>
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
            } 
            break;

        default: 
            item.innerHTML= 
            `<div class="flex item-carrito-gap">
                <div class="flex flex-direction-item item-carrito-gap">
                    <div class="center item-carrito-img">
                        <img src="${productoImg}" alt="${productoName}" class='img-pedido'>
                    </div>
                    <div class="flex flex-column center item-carrito-gap-2">
                        <div class="item-carrito-producto">
                            <p>${productoName}</p>
                        </div>
                        <div class="flex flex-column item-carrito-gap-3">
                            <div class="item-carrito-cantidad">
                                <p>Cantidad: <span id="carrito-cant">${productoCantidad}</span></p>
                            </div>
                            <div class="item-carrito-subtotal">
                                <p>Precio: S/ <span id="carrito-sub">${totalProducto}</span></p>
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
            break;
    }

    //Aumentar Cantidad
    sum+=1;
    addItem(sum);

    //Mensaje Emergente de Producto Añadido
    emergeMessage();
    
    //Borra el Mensaje Carrito
    document.querySelector(".message-carrito").classList.add("display-none");

    //Se enlista en el Carrito
    document.getElementById("mi-carrito").appendChild(item);

    //Evento de Button Eliminar Producto
    const deleteItemButton = document.querySelectorAll(".item-delete");

    deleteItemButton.forEach((itemDel) => {
        itemDel.addEventListener("click", () => {
            deleteItem(itemDel, producto);
            //RESTAR TOTAL
            resTotal(itemDel);
        });
    });

    //TOTAL
    addTotal();
}

function addItem(sum) {
    let products = document.querySelector("#n-items");
    products.textContent = sum;
}

function deleteItem(itemDel, producto) {
    const productoItem = itemDel.closest(".item-carrito");
    
    //Eliminar Producto en Carrito
    document.getElementById("mi-carrito").removeChild(productoItem);
    
    //Mensage Emergente
    emergeMessageDel();
    
    //Dismuir en Carrito
    sum-=1;
    addItem(sum);
    
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

function addTotal() {
    let a = document.querySelector(".subtotal");
    let b = document.querySelectorAll("#carrito-sub");
    let total = 0;

    b.forEach(item => {
        total += parseFloat(item.textContent);
    });

    a.textContent = parseFloat(total).toFixed(2);
}

function resTotal(itemDel) {
    const productoItem = itemDel.closest(".item-carrito");
    let a = document.querySelector(".subtotal");
    let b = productoItem.querySelector("#carrito-sub");

    let newTotal = parseFloat(a.textContent) - parseFloat(b.textContent);

    a.textContent = newTotal.toFixed(2);
}



