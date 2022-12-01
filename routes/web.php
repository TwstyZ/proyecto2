<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\ControladorBD;
use App\Http\Controllers\ControladorBD_Cliente;
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
    return view('principal');
});
//Libro
//Create (redirecciona al formulario)
Route::get('libro/create',[ControladorBD::class,'create'])->name('libro.create');
//Store (ingreso de datos al formulario)
Route::post('libro/store',[ControladorBD::class,'store'])->name('libro.store');
//Index (ingreso de datos al formulario)
Route::get('libro/index',[ControladorBD::class,'index'])->name('libro.index');
//Destroy (eliminar de datos al formulario)
Route::delete('libro/{id}/destroy',[ControladorBD::class,'destroy'])->name('libro.destroy');
//Update (eliminar de datos al formulario)
Route::put('libro/{id}/update',[ControladorBD::class,'update'])->name('libro.update');

//Clientes
//Create(redirecciona al formulario)
Route::get('clientes/create',[ControladorBD_Cliente::class,'create'])->name('clientes.create');
//Store (ingreso de datos al formulario)
Route::post('clientes/store',[ControladorBD_Cliente::class,'store'])->name('clientes.store');
//Index (ingreso de datos al formulario)
Route::get('clientes/index',[ControladorBD_Cliente::class,'index'])->name('clientes.index');
//Destroy (eliminar de datos al formulario)
Route::delete('clientes/{id}/destroy',[ControladorBD_Cliente::class,'destroy'])->name('clientes.destroy');
//Update (eliminar de datos al formulario)
Route::put('clientes/{id}/update',[ControladorBD_Cliente::class,'update'])->name('clientes.update');

Route:: controller(controladorVistas::class)->group(
    function(){
Route:: get ('principal','vistaHome')->name('p');
// Route:: get ('registro','vistaRegistro')->name('r');
//Route:: get ('clientes','vistaCliente')->name('cl');
});

