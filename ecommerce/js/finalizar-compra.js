document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("#finalCompra").addEventListener("click", () => {
        finalizarCompra();
    });

    document.querySelector("#finalCompra").style.opacity = ".5";

});

function finalizarCompra() {
    const items = document.querySelectorAll("#mi-carrito .item-carrito"); 
    
    if(document.querySelector("#mi-carrito").children.length > 1) {
        
        //Mensaje de Productos Agregados
        document.querySelector(".alert").classList.remove("display-none");
        
        let btnAlert = document.querySelector(".btn-alert");
    
        btnAlert.addEventListener("click", () => {
            document.querySelector(".alert").classList.add("display-none");
        });
        
        //Habilitar Boton de Finalizar Compra
        document.querySelector("#finalCompra").style.opacity = 1;
        
        //Mensaje y redirección al WhatsApp
        let mensaje = '*Hola, envío mi carrito de compras para su recepción. Quedo atento(a) a la confirmación. ¡Gracias!*\n\n*Mi Carrito:*\n\n';
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
        mensaje += `*TOTAL: S/. ${total}*\n`;
    
        const mensajeCodificado = encodeURIComponent(mensaje);
        
        //Colocar Numero
        const numero = 51935287218;
        const url = `https://wa.me/${numero}?text=${mensajeCodificado}`;

        setTimeout(() => {
            window.open(url, "_blank");
        }, 2500);
    } else {
        alert("¡Tu carrito está vacío...¡pero no por mucho tiempo! Explora nuestras mejores ofertas y encuentra lo que necesitas.!");
    }
}