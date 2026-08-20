@extends('layouts.app')
@section('titulo', 'Libros - Librería Agrupa')
@section('contenido')
<section class="hero">
    <div class="contenidotodo">
        <div class="contenido">
            <h1>Librería Agrupa</h1>
            <p>
                Todo en papelería, útiles escolares y más
            </p>
            <a href="#productos" class="btn">
                Ver productos
            </a>
        </div>
    </div>
</section>
<section class="seccion productos" id="productos">
    <h2>Nuestros productos</h2>
    <p>
        Ofrecemos cuadernos, lapiceros, libros, material de oficina y más.
    </p>
</section>
<section class="seccion ubicacion">
    <h2>Ubicación</h2>
    <p>
        Estamos en Potosí, Bolivia.
    </p>
    <p>
        AV/ Argentina
    </p>
</section>
<section class="seccion contacto" id="contacto">
    <h2>Contáctanos</h2>
    <form id="form-pedido" novalidate method="post">
        @csrf
        <div class="campo">
            <label for="nombre">
                Nombre:
            </label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre y apellido" required>
        </div>
        <div class="campo">
            <label for="correo">
                Correo:
            </label>
            <input type="email" id="correo" name="correo" placeholder="Tu nombre@correo.com" required>
        </div>
        <div class="campo">
            <label for="mensaje">
                Mensaje:
            </label>
            <textarea id="mensaje" name="mensaje" rows="5" placeholder="Cuéntanos qué necesitas"></textarea>
        </div>
        <button type="submit">
            Enviar pedidooo
        </button>
        <p id="error-pedido" class="aviso">
        </p>
    </form>
</section>
@endsection