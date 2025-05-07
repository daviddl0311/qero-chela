document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".input-enviar").forEach((btnEnviar) => {
        btnEnviar.addEventListener("click", () => {
            enlistarCarrito(btnEnviar);
        });
    });
});

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
    <div class="flex mi-carrito-gap">
        <div class="carrito-img center">
            <img src="${productoImg}" alt="${productoName}">
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

    document.getElementById("mi-carrito").appendChild(item);

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

    document.getElementById("mi-carrito").removeChild(productoItem);

    productoButton.disabled = false;
    producto.style.opacity = "1";
    productoButton.textContent = "Añadir";

}   
