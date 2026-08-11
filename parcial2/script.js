const formulariPedido = document.querySelector("#form-helados");
const avisoPedido = document.querySelector("#aviso-helados");
function revisarPedido(event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;   
if (nombre === "") {
    event.preventDefault();
    avisoPedido.textContent = "Falta tu nombre o tu correo - sin eso no podemos anotar el pedido.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
} else if (correo.includes("@") === false) {
    event.preventDefault();
    avisoPedido.textContent = "Ese correo no tiene arroba - revísalo por favor.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
} else {
    avisoPedido.textContent = "Pedido anotado - te atiende Juan Erasmo Joffre Perez";
    avisoPedido.classList.add("exito");
    avisoPedido.classList.remove("error");
}
}
formulariPedido.addEventListener("submit", revisarPedido);
