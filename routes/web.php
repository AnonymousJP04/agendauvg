<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ContactoController::class, 'index']);
    