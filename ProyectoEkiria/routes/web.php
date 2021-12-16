<?php

use App\Http\Controllers\Proveedorescontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Modcompras\proveedores;

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


Route::get('/', function() {
    return view('layout');
});

Route::get('prove', [Proveedorescontroller::class, 'proveedor'])->name('proveedor');
Route::get('prod', [Proveedorescontroller::class, 'producto'])->name('producto');
Route::get('comp', [Proveedorescontroller::class, 'compra'])->name('compra');
Route::post('prove', [Proveedorescontroller::class, 'guardarprov'])->name('guardarprov');
Route::put('prove/{proveedores}', [Proveedorescontroller::class, 'actualizarprov'])->name('actualizarprov');
Route::delete('prove/{proveedores}', [Proveedorescontroller::class, 'borrarprov'])->name('borrarprov');







