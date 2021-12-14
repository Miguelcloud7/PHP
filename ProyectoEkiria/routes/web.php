<?php

use App\Http\Controllers\VentasController;
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

Route::get('x', function () {
    return view('layout');
});

Route::get('Catalogo',[VentasController::class, 'Catalogo'])->name('catalogo');
Route::get('TerminarPedido',[VentasController::class, 'TerminarPedido'])->name('terminarPedido');
Route::get('Citas/Agregar',[VentasController::class, 'AgregarCita'])->name('agregarCita');
Route::get('Citas/Listar',[VentasController::class, 'ListarCitas'])->name('ListarCitas');
Route::get('Citas/Editar',[VentasController::class, 'EditarCita'])->name('editarCita');
Route::get('Servicios/Agregar',[VentasController::class, 'AgregarServicio'])->name('agregarServicio');
Route::get('Servicios/Listar',[VentasController::class, 'ListarServicios'])->name('listarServicios');
Route::get('Servicios/Editar',[VentasController::class, 'EditarServicio'])->name('editarServicio');
