<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$sabores = $_POST["sabores"];
echo "<h2>Pedido recibido en Heladería Doña Nieve</h2>";
echo "<p><strong>Nombre:</strong> $nombre</p>";
echo "<p><strong>Correo:</strong> $correo</p>";
echo "<p><strong>Sabores:</strong> $sabores</p>";
$menu = ["Cono simple - Bs 8",
         "Copa doble - Bs 15",
         "Litro para llevar - Bs 35"];
echo "<h3>Menu de la heladería</h3>";
foreach ($menu as $producto) {
    echo "<p>$producto</p>";
}
echo "<p>Te atiende Juan Erasmo Joffre Perez.</p>";
?>