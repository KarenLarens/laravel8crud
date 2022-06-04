<?php

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

Route::resource('articulos','App\Http\Controllers\ArticuloController');

Route::resource('Categoria','App\Http\Controllers\CategoriaController');
Route::resource('empleados','App\Http\Controllers\EmpleadoController');
Route::resource('usuarios','App\Http\Controllers\UsuarioController');
Route::resource('ventas','App\Http\Controllers\VentaController');
Route::resource('detalles','App\Http\Controllers\DetalleController');
Route::resource('tickets','App\Http\Controllers\TicketController');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
