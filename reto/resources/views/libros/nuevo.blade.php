@extends('layouts.app')
@section('title', 'Registrar libro')
@section('contenido')
<h1>Registrar un libro</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/libros/nuevo" method="POST">
    @csrf
    <div>
        <label for="titulo">Título del libro</label>
        <input type="text" id="titulo" name="titulo">
    </div>
    <div>
        <label for="precio">Precio en Bs</label>
        <input type="number" id="precio" name="precio">
    </div>
    <div>
        <label for="stock">Stock </label>
        <input type="number" id="stock" name="stock">
    </div>
    <button type="submit">Registrar libro</button>
</form>
@endsection