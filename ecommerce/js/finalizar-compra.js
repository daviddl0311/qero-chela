document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("#finalCompra").addEventListener("click", () => {
        finalizarCompra();
    });

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
            document.querySelector(".message").classList.add("display-none");
            document.querySelector(".message2").classList.remove("display-none");
            
            enviarWhatsApp();
        })
        
    });

    document.querySelector("#distrito").addEventListener("change", () => {
        deliveryFunction();
        pedido();
    });

    document.querySelector(".message2").classList.add("display-none");

    document.querySelector(".btn-msg2").addEventListener("click", () => {
        document.querySelector(".message").classList.remove("display-none");
        document.querySelector(".alert").classList.add("display-none");
    });
});

function finalizarCompra() {
    if(document.querySelector("#mi-carrito").children.length > 1) {
        
        //Habilitar Boton de Finalizar Compra
        
        //Mensaje Emergente
        document.querySelector(".alert").classList.remove("display-none");
        
        document.querySelector(".message2").classList.add("display-none");

        //Añadir Subtotal
        document.querySelector("#pay").textContent = document.querySelector(".subtotal").innerText;

        //Añadir Total
        document.querySelector("#pay-total").textContent = (parseFloat(document.querySelector("#pay").textContent) + parseFloat(document.querySelector("#pay-delivery").textContent)).toFixed(2);
    } else {
        alert("¡Tu carrito está vacío...¡pero no por mucho tiempo! Explora nuestras mejores ofertas y encuentra lo que necesitas!");
    }
}

function deliveryFunction() {
    let distrito = document.querySelector("#distrito").value;

    switch(distrito) {
        case "Villa El Salvador":
        case "Chorrillos":
        case "La Victoria":
        case "Breña":
        case "Ate - Salamanca":
        case "Ate Vitarte - Puruchuco":
        case "El Agustino":
        case "Callao":
        case "Rímac":
        case "Independencia":
        case "Los Olivos":
        case "Cercado de Lima":
        case "Carmen de la Legua":
        case "San Juan de Miraflores":
        case "Villa María del Triunfo":
        case "San Juan de Lurigancho":
        case "San Martín de Porres":
        case "Bellavista":
        case "San Isidro":
        case "La Molina":
        case "Lince":
        case "San Luis":
        case "San Miguel":
        case "San Borja":
        case "Barranco":
        case "Surco":
        case "Miraflores":
        case "Surquillo":
        case "Jesús María":
        case "Pueblo Libre":
        case "Magdalena":
        case "Comas":
        case "La Perla":
        case "Santa Anita":
            document.querySelector("#pay-delivery").textContent = "10.00";
            break;

        case "S.J.L - Montenegro":
        case "S.J.L - Mariscal":
        case "Callao - La Punta":
        case "Callao - Oquendo":
            document.querySelector("#pay-delivery").textContent = "12.00";
            break;

        case "Ate - Huachipa":
        case "Ate - Santa Clara":
        case "Ate - Huaycan":
        case "S.J.L - Jicamarca":
        case "Callao - Márquez":
        case "V.M.T - José Gálvez":
        case "Molina - Musa":
            document.querySelector("#pay-delivery").textContent = "15.00";
            break;
        
        case "Ventanilla":
        case "Puente Piedra":
        case "Carabayllo":
        case "Chosica":
        case "Chaclacayo":
        case "Ñaña":
        case "Pachacamac":
        case "Lurín":
            document.querySelector("#pay-delivery").textContent = "18.00";
            break;
    }

    //Añadir Total + Delivery
    document.querySelector("#pay-total").textContent = (parseFloat(document.querySelector("#pay").textContent) + parseFloat(document.querySelector("#pay-delivery").textContent)).toFixed(2);

}

function enviarWhatsApp() {
    const items = document.querySelectorAll("#mi-carrito .item-carrito"); 
    const delivery = document.querySelector("#pay-delivery").textContent;
    const total = document.querySelector("#pay-total").textContent;
    let distrito = document.querySelector("#distrito").value;
    let ubicación = document.querySelector("#ubicacion").value;

    //Mensaje y redirección al WhatsApp
    let mensaje = '*Hola, envío mi carrito de compras para su recepción. Quedo atento(a) a la confirmación. ¡Gracias!*\n\n';

    mensaje += `*Distrito*: ${distrito}\n`;
    mensaje += `*Dirección*: ${ubicación}\n\n`;

    mensaje += `*Mi Carrito:*\n\n`;

    let subtotal = document.querySelector(".subtotal").innerText;

    items.forEach(item => {
        const lineas = item.querySelectorAll("p");
        mensaje += `*${lineas[0].innerText.trim()}*\n`;

        for(let i = 1; i < lineas.length; i++) {
            mensaje += lineas[i].innerText.trim() + '\n';
        }

        mensaje += '----------------------\n';
    })
    

    mensaje += `*SUBTOTAL: S/. ${subtotal}*\n`;
    mensaje += `*DELIVERY: S/. ${delivery}*\n`;
    mensaje += `*TOTAL: S/. ${total}*\n`;

    const mensajeCodificado = encodeURIComponent(mensaje);
    
    //Colocar Numero
    const numero = 51935287218;
    const url = `https://wa.me/${numero}?text=${mensajeCodificado}`;

    setTimeout(() => {
        window.open(url, "_blank");
    }, 3000);
}

function pedido() {
    const items = document.querySelectorAll("#mi-carrito .item-carrito");
    const subtotal = document.querySelector(".subtotal").innerText;
    const delivery = document.querySelector("#pay-delivery").textContent;
    const total = document.querySelector("#pay-total").textContent;

    let mensaje = "";
            
    items.forEach(item => {
        const lineas = item.querySelectorAll("p");
        const myImg = item.querySelector(".img-pedido").src;

        mensaje += `${lineas[0].innerText.trim()}\n`;

        for(let i = 1; i < lineas.length; i++) {
            mensaje += lineas[i].innerText.trim() + '\n';
        }

        mensaje += `Imagen Producto: ${myImg}\n`;

        mensaje += '----------------------\n';
    })
    
    mensaje += `SUBTOTAL: S/. ${subtotal}\n`;
    mensaje += `DELIVERY: S/. ${delivery}\n`;
    mensaje += `TOTAL: S/. ${total}\n`;

    document.querySelector("#pedido").value = mensaje;
}
