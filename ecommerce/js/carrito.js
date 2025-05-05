document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".btn-plus").forEach((btn) => {
        btn.addEventListener("click", () => actualizarCantidad(btn, 1));
    });
    
    document.querySelectorAll(".btn-minus").forEach((btn) => {
        btn.addEventListener("click", () => actualizarCantidad(btn, -1));
    });
});

function actualizarCantidad(btn, cambio) {
    const producto = btn.closest(".producto-item");

    const cantidadDiv = producto.querySelector(".cantidad"); 

    let cantidadAct = parseInt(cantidadDiv.textContent);

    cantidadAct += cambio;
    
    if(cantidadAct < 0) {
        cantidadAct= 0;
    }

    cantidadDiv.textContent = cantidadAct;
}
