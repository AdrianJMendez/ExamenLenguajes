<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;
use App\Http\Controllers\contactoController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio', [contactoController::class, 'directorioMostrar'])->name('directorio.mostrar');

Route::get('/directorio/contacto', [contactoController::class, 'verContacto'])->name('contacto.ver');

Route::get('/buscar/contacto', [contactoController::class, 'buscarContacto'])->name('contacto.buscar');
//Route::get('/buscar/contacto', [contactoController::class, 'Contacto'])->name('contacto.buscar');

Route::get('/agregar/contacto', [contactoController::class, 'agregarContacto'])->name('contacto.agregar');

Route::post('/guardar/contacto', [contactoController::class, 'guardarContacto'])->name('contacto.guardar');

Route::get('/eliminar/contacto/{codigoEntrada}', [contactoController::class, 'eliminarContacto'])->name('contacto.eliminar');
