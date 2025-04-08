let price = document.getElementById("precio");
let buttons = Array.from(document.getElementsByClassName("button"));

buttons.forEach(button => {
    button.addEventListener("click", () => {
        switch(button.id) {
            case "bt1": 
                price.textContent = "pen 7.50";
                break;
            case "bt2": 
                price.textContent = "pen 45.00";
                break;
            case "bt3": 
                price.textContent = "pen 175.00";
                break;
            case "bt4": 
                price.textContent = "pen 465.00";
                break;
            case "bt5": 
                price.textContent = "pen 749.00";
                break; 
        }

        buttons.forEach(btn => btn.classList.remove("producto-opacity"));

        button.classList.add("producto-opacity");
    });
});