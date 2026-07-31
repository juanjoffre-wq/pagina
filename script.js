const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

let esDeDia = false;

function cambiarModo() {
    cuerpo.classList.toggle("claro");
    esDeDia = !esDeDia;
    if (esDeDia) {
        botonModo.textContent = "🌙 Modo Noche";
    } else {
        botonModo.textContent = "☀️ Modo Día";
    }
}

botonModo.addEventListener("click", cambiarModo);