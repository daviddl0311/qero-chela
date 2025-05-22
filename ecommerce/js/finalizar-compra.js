document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("#finalCompra").addEventListener("click", () => {
        finalizarCompra();
    });

    document.querySelector("#finalCompra").style.opacity = ".5";

    document.querySelector(".btn-volver").addEventListener("click", () => {
        document.querySelector(".alert").classList.add("display-none");
    });

    document.querySelector("#formulario").addEventListener("submit", function (e) {
        e.preventDefault();

        const datos = new FormData(this);

        fetch("php/guardar.php", {
            method: "POST",
            body: datos
        })
        .then(res => res.text())
        .then(respuesta => {
            alert("✅ Dirección guardada con éxito. Se procederá a enviar tu pedido por WhatsApp.");
            document.querySelector(".alert").classList.add("display-none");
            enviarWhatsApp();
        })
        
    });
});

function finalizarCompra() {
    if(document.querySelector("#mi-carrito").children.length > 1) {
        
        //Habilitar Boton de Finalizar Compra
        document.querySelector("#finalCompra").style.opacity = 1;
        
        //Mensaje Emergente
        document.querySelector(".alert").classList.remove("display-none");
    } else {
        alert("¡Tu carrito está vacío...¡pero no por mucho tiempo! Explora nuestras mejores ofertas y encuentra lo que necesitas!");
    }
}


function enviarWhatsApp() {
    const items = document.querySelectorAll("#mi-carrito .item-carrito"); 
    let departamento = document.querySelector("#depa").value;
    let ubicación = document.querySelector("#ubicacion").value;

    //Mensaje y redirección al WhatsApp
    let mensaje = '*Hola, envío mi carrito de compras para su recepción. Quedo atento(a) a la confirmación. ¡Gracias!*\n\n';

    mensaje += `*Departamento*: ${departamento}\n`;
    mensaje += `*Dirección*: ${ubicación}\n\n`;

    mensaje += `*Mi Carrito:*\n\n`;

    let subtotal = document.querySelector(".subtotal").innerText;
    let igv = document.querySelector(".igv").innerText;
    let total = document.querySelector(".total").innerText;

    items.forEach(item => {
        const lineas = item.querySelectorAll("p");
        mensaje += `*${lineas[0].innerText.trim()}*\n`;

        for(let i = 1; i < lineas.length; i++) {
            mensaje += lineas[i].innerText.trim() + '\n';
        }

        mensaje += '----------------------\n';
    })
    

    mensaje += `*SUBTOTAL: S/. ${subtotal}*\n`;
    mensaje += `*IGV (18%): S/. ${igv}*\n`;
    mensaje += `*ENVÍO: S/. 15.00*\n`;
    mensaje += `*TOTAL: S/. ${parseFloat(total) + 15}*\n`;

    const mensajeCodificado = encodeURIComponent(mensaje);
    
    //Colocar Numero
    const numero = 51935287218;
    const url = `https://wa.me/${numero}?text=${mensajeCodificado}`;

    setTimeout(() => {
        window.open(url, "_blank");
    }, 500);
}
