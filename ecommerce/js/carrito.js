document.getElementById("DOMContentLoaded", () => {
    document.querySelector(".input-enviar").forEach((btn) => {
        btn.addEventListener("click", () => {
            enlistarCarrito(btn);
        });
    });
});

function enlistarCarrito(btn) {
    const producto = btn.closest(".item-producto");
    const productoName = producto.querySelector(".producto-Name").textContent.trim();
    const productoPrecio = producto.querySelector(".precio").textContent;
    const productoFormato = producto.querySelector(".button-opacity").textContent;
    const productoCantidad = producto.querySelector(".producto-cantidad").textContent;

    console.log("Mi producto");
    // let item = document.createElement("li");
    // console.log(`<p>Mi producto ${productoName}, precio ${productoPrecio}, formato ${productoFormato}, cantidad ${productoCantidad}</p>`);

    // document.getElementById("mi-carrito").appendChild(item);
}