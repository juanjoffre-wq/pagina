@extends('layouts.app')
@section('title', 'Librería Agrupa')
@section('contenido')

<h1>Librería Agrupa</h1>

<p>
    En Librería Agrupa encontrarás libros para estudiar, aprender y disfrutar.
</p>

<p>
    Hay {{ count($libros) }} libros en el catálogo.
</p>

@foreach ($libros as $libro)

    <div>
        <strong>{{ $libro->titulo }}</strong>
        - Bs {{ $libro->precio }} 
        tiene {{ $libro->stock }} unidades en el stock
    </div>

@endforeach
<a href="/libros/nuevo">Registrar un nuevo libro</a>
@endsection