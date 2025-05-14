document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("#btn-an").forEach(btn => {
        btn.addEventListener("mouseover", () => {
            Rotate(btn);
        });

        btn.addEventListener("mouseout", () => {
            noRotate(btn);
        });
    })

});


function Rotate(btn) {
    let bottle = btn.closest(".item-flex");
    const button = bottle.querySelector(".item-img");

    button.classList.add("rotate");
}

function noRotate(btn) {
      let bottle = btn.closest(".item-flex");
    const button = bottle.querySelector(".item-img");

    button.classList.remove("rotate");
}
