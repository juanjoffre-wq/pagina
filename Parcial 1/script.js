function confirmarPedido() {
    let mensaje = document.querySelector("#mensaje");
    mensaje.textContent = "Pedido recibido - te atiende Juan Erasmo Joffre Perez";
    mensaje.classList.remove("oculto");
}
let boton = document.querySelector("#btn-confirmar");
boton.addEventListener("click", confirmarPedido);