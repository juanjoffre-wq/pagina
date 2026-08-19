<?php

use Illuminate\Support\Facades\Route;
use App\Models\Libro;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', function () {
    $libros = Libro::all();
    return view('libros.index', [
        'libros' => $libros
    ]);

});
Route::get('/libros/nuevo', function () {
    return view('libros.nuevo');
});

Route::post('/libros/nuevo', function () {
    $datos = request()->validate([
        'titulo' => 'required',
        'precio' => 'required|integer'
    ], [
        'titulo.required' => 'Falta el titulo del libro',
        'precio.required' => 'Falta el precio del libro',
        'precio.integer' => 'Ese precio no es un numero entero'
    ]);
Libro::create($datos);
return redirect('/libros');
});