<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ContactoController::class, 'index']);
Route::resource('contactos', ContactoController::class); // Definir las rutas de recursos para el controlador ContactoController