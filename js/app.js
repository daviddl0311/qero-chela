let price = document.getElementById("precio");
let buttons = Array.from(document.getElementsByClassName("button"));
let img = document.querySelector("#img-change");
let title = document.querySelector("#h2-t");
console.log(title.textContent.trim());

buttons.forEach(button => {
    button.addEventListener("click", () => {
        switch(button.id) {
            case "bt1": 
                price.textContent = "pen 7.50";
                if(title.textContent.trim() == "aborigen") {
                    img.src = "../img/inicio-img/QeroChela_Aborigen.png";
                } else {
                    img.src = "../img/inicio-img/QeroChela_LunaMiel.png";
                }
                img.classList.remove("producto-img-2")
                img.classList.add("producto-img")
                break;
            case "bt2": 
                price.textContent = "pen 45.00";
                if(title.textContent.trim() == "aborigen") {
                    img.src = "../img/inicio-img/QeroChela_Aborigen.png";
                } else {
                    img.src = "../img/inicio-img/QeroChela_LunaMiel.png";
                }
                img.classList.remove("producto-img-2")
                img.classList.add("producto-img")
                break;
            case "bt3": 
                price.textContent = "pen 175.00";
                if(title.textContent.trim() == "aborigen") {
                    img.src = "../img/inicio-img/QeroChela_Aborigen.png";
                } else {
                    img.src = "../img/inicio-img/QeroChela_LunaMiel.png";
                }
                img.classList.remove("producto-img-2")
                img.classList.add("producto-img")
                break;
            case "bt4": 
                price.textContent = "pen 465.00";
                img.src = "img-Barril/barril-30.png"
                img.classList.add("producto-img-2")
                img.classList.remove("producto-img")
                break;
            case "bt5": 
                price.textContent = "pen 749.00";
                img.src = "img-Barril/barril-50.png"
                img.classList.add("producto-img-2")
                img.classList.remove("producto-img")
                break; 
        }

        buttons.forEach(btn => btn.classList.remove("producto-opacity"));

        button.classList.add("producto-opacity");
    });
});