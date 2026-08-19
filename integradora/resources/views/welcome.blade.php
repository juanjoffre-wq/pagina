<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Juan Joffre - Librería Agrupa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<body>

<header>
    <div class="header-contenido">
        <img src="img/logo1.jpg" alt="Logo" class="logo">
        <h2>Librería Agrupa</h2>
        <!-- Misión 1: este botón enciende y apaga el día. -->
        <button type="button" id="btn-tema" class="boton-modo">☀️ Modo día</button>
    </div>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Productos</a>
        <a href="#contacto">Contacto</a>
    </nav>
</header>

<main>
   
    <section class="hero">
        <div class="contenidotodo">
            <div class="contenido">
                <h1>Librería Agrupa</h1>
                <p>Todo en papelería, útiles escolares y más</p>
                <a href="#" class="btn">Ver productos</a>
            </div>
        </div>
    </section>

    <section class="seccion productos">
        <h2>Nuestros productos</h2>
        <p>Ofrecemos cuadernos, lapiceros, libros, material de oficina y más.</p>
    </section>
 
    <section class="seccion ubicacion">
        <h2>Ubicación</h2>
        <p>Estamos en Potosí, Bolivia.</p>
        <p>AV/ Argentina</p>
    </section>

    <section class="seccion contacto" id="contacto">
        <h2>Contáctanos</h2>

        <form id="form-pedido" novalidate method="post" action="procesar.php">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre y apellido" required>
            </div>

            <div class="campo">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" placeholder="Tu nombre@correo.com" required>
            </div>

            <div class="campo">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="5" placeholder="Cuentanos que necesitas"></textarea>
            </div>

            <button type="submit">Enviar pedido</button>
            <p id="error-pedido" class="aviso"></p>
        </form>
    </section>

</main>

<footer>
    <p>&copy; 2026 Librería Agrupa - Todos los derechos reservados</p>
</footer>
  <!-- El script va al FINAL, justo antes de cerrar el body:
       así el navegador ya leyó todo el HTML y querySelector
       sí encuentra los botones. Si lo pones arriba, no los halla. -->
  <script src="script.js"></script>
</body>
</html>