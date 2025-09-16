<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Routes personnalisées pour Randianoelison
Route::view('/randianoelison-completez-votre-reservation', 'completez-votre-reservation');
Route::view('/randianoelison-paiement', 'paiement');
