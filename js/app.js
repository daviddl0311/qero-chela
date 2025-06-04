let price = document.getElementById("precio");
let buttons = Array.from(document.getElementsByClassName("button"));
let img = document.querySelector("#img-change");
let title = document.querySelector("#h2-t");
// console.log(title.textContent.trim());

//Se incluye IGV (18%) a los productos

buttons.forEach(button => {
    button.addEventListener("click", () => {
        switch(button.id) {
            case "bt1": 
                price.textContent = "pen 8.85";
                if(title.textContent.trim() == "aborigen") {
                    img.src = "https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da043f98fb67f81903884_QeroChela_Aborigen.png";
                } else {
                    img.src = "https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da04352c03b07f7dcf05b_QeroChela_LunaMiel.png";
                }
                img.classList.remove("producto-img-2")
                img.classList.add("producto-img")
                break;
            case "bt2": 
                price.textContent = "pen 34.46";
                if(title.textContent.trim() == "aborigen") {
                    img.src = "https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da043f98fb67f81903884_QeroChela_Aborigen.png";
                } else {
                    img.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/683e24c9dfe5d2b188287064_4pack-Photoroom.png";
                }
                img.classList.remove("producto-img-2")
                img.classList.add("producto-img")
                break;
            case "bt3": 
                price.textContent = "pen 53.10";
                if(title.textContent.trim() == "aborigen") {
                    img.src = "https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da043f98fb67f81903884_QeroChela_Aborigen.png";
                } else {
                    img.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/683e24c9d0b2679dd06645cc_6pack-Photoroom.png";
                }
                img.classList.remove("producto-img-2")
                img.classList.add("producto-img")
                break;
            case "bt4": 
                price.textContent = "pen 206.50";
                if(title.textContent.trim() == "aborigen") {
                    img.src = "https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da043f98fb67f81903884_QeroChela_Aborigen.png";
                } else {
                    img.src = "https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da04352c03b07f7dcf05b_QeroChela_LunaMiel.png";
                }
                img.classList.remove("producto-img-2")
                img.classList.add("producto-img")
                break;
            case "bt5": 
                price.textContent = "pen 548.70";
                img.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/681a91af4810a725ec4834f1_barril-30.png"
                img.classList.add("producto-img-2")
                img.classList.remove("producto-img")
                break;
            case "bt6": 
                price.textContent = "pen 883.82";
                img.src = "https://cdn.prod.website-files.com/680f81021936b0d565d34173/681a91afc94d33a3106045f6_barril-50.png"
                img.classList.add("producto-img-2")
                img.classList.remove("producto-img")
                break; 
        }

        buttons.forEach(btn => btn.classList.remove("producto-opacity"));

        button.classList.add("producto-opacity");
    });
});