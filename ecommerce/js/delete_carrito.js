document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".delete").forEach((btndelete) => {
        btndelete.addEventListener("click", () => {
            deleteProducto(btndelete);
        });
    });

});

function deleteProducto(btndelete) {
    const producto = btndelete.closest("#mi-carrito");
    // const productoDel = producto.querySelector(".delete");
    // const productoButton = producto.querySelector(".input-enviar");

    // productoButton.disabled = "false";
    // productoButton.style.opacity = "1";
    // productoButton.textContent = "Añadir";

    document.getElementById("mi-carrito").removeChild(producto.querySelector("#mi-carrito"));
}