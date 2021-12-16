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


// carga de vistas
Route::get('Catalogo',[VentasController::class, 'Catalogo'])->name('catalogo');
Route::get('TerminarPedido',[VentasController::class, 'TerminarPedido'])->name('terminarPedido');
Route::get('Citas/Agregar',[VentasController::class, 'AgregarCita'])->name('agregarCita');
Route::get('Citas/Listar',[VentasController::class, 'ListarCitas'])->name('ListarCitas');
Route::put('Citas/Editar',[VentasController::class, 'EditarCita'])->name('editarCita');
Route::get('Servicios/Agregar',[VentasController::class, 'AgregarServicio'])->name('agregarServicio');
Route::get('Servicios/Listar',[VentasController::class, 'ListarServicios'])->name('listarServicios');
Route::get('Servicios/Editar/',[VentasController::class, 'EditarServicio'])->name('editarServicio');



//funcinalidades
Route::get('TerminarPedidoV',[VentasController::class, 'TerminarPedidoV'])->name('terminarPedidoV');
Route::get('Citas/AgregarV',[VentasController::class, 'AgregarCitaV'])->name('agregarCitaV');
Route::get('Citas/ListarV',[VentasController::class, 'ListarCitasV'])->name('ListarCitasV');
Route::get('Citas/EditarV',[VentasController::class, 'EditarCitaV'])->name('editarCitaV');
Route::post('Servicios/AgregarV',[VentasController::class, 'AgregarServicioV'])->name('agregarServicioV');
Route::post('Servicios/ListarV',[VentasController::class, 'ListarServiciosV'])->name('listarServiciosV');
Route::put('Servicios/EditarV/{servicio}',[VentasController::class, 'EditarServicioV'])->name('editarServicioV');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('Ventas/Catalogo');
})->name('dashboard');
