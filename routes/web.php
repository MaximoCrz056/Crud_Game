<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ConsolaController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\RentaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AccesorioController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/consol', function () {
    return view('consol');
});
Route::get('/videoj', function () {
    return view('videoj');
});
Route::get('/servicios', function () {
    return view('servicios');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('consolas', ConsolaController::class);
Route::resource('rentas', RentaController::class);
Route::resource('juegos', JuegoController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('accesorios', AccesorioController::class);
