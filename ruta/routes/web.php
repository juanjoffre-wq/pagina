<?php

use Illuminate\Support\Facades\Route;
use App\Models\Libro;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', function () {
    return view('libros.inicio');
});

Route::get('/libros/productos', function () {
    $libros = Libro::all();

    return view('libros.productos', [
        'libros' => $libros
    ]);
});

Route::get('/libros/nuevo', function () {
    return view('libros.nuevo');
})->middleware('auth');

Route::post('/libros/nuevo', function () {

    $datos = request()->validate([
    'titulo' => 'required',
    'precio' => 'required|integer',
    'stock' => 'required|integer'
     ], [
    'titulo.required' => 'Falta el titulo del libro',
    'precio.required' => 'Falta el precio del libro',
    'precio.integer' => 'Ese precio no es un numero entero',
    'stock.required' => 'Falta el stock del libro',
    'stock.integer' => 'El stock debe ser un numero entero'
     ]);

    Libro::create($datos);

    return redirect('/libros/productos');
})->middleware('auth'); 

Route::get('/libros/login', function () {
    return view('libros.login');
});

Route::post('/libros/login', function () {
    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        // Sesión nueva apenas entra: si alguien espiaba la anterior, ya no le sirve.
        request()->session()->regenerate();

        return redirect('/libros/panel');
    }

    // back() = "volvé a la página de donde veníamos", con un mensaje en el bolsillo.
    return back()->with('error', 'Correo o contraseña incorrectos.');
});


Route::post('/libros/logout', function () {
    Auth::logout();

    return redirect('/libros');
});


Route::get('libros/panel', function () {
    $libros = Libro::all();

    return view('libros.panel', ['libros' => $libros]);
})->middleware('auth');
