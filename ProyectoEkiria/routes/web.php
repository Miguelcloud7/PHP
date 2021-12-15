<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('f', function () {
    return view('Vistasx/x');
});


Route::get('holiss', [PruebaController::class,'prueba'])->name('lista');

Route::post('guardar', [PruebaController::class,'Guardar'])->name('guardar');

Route::put('actualizar/{empleado}',[PruebaController::class,'Actualizar'])->name('actualizar');

Route::delete('borrar/{empleado}',[PruebaController::class,'Borrar'])->name('borrar');
