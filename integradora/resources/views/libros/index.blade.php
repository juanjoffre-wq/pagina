@extends('layouts.app')
@section('title', 'Libreria El Lapiz')
@section('content')
<h1>Libreria El Lapiz</h1>
<p>
En Libreria El Lapiz encontraras libros para estudiar, aprender y disfrutar.
</p>
<p>
Hay {{ count($libros) }} libros en el catalogo.
</p>
@foreach ($libros as $libro)
<p>
{{ $libro->titulo }} - Bs {{ $libro->precio }}
</p>
@endforeach
<p>
Catalogo atendido por Juan Erasmo Joffre Perez
</p>
<a href="/libros/nuevo">Registrar un nuevo libro</a>
@endsection