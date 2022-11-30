<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\ControladorBD;
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

//Create (redirecciona al formulario)
Route::get('libro/create',[ControladorBD::class,'create'])->name('libro.create');
//Store (ingreso de datos al formulario)
Route::post('libro/store',[ControladorBD::class,'store'])->name('libro.store');
//Index (ingreso de datos al formulario)
Route::get('libro/index',[ControladorBD::class,'index'])->name('libro.index');
//Destroy (eliminar de datos al formulario)
Route::delete('libro/{id}/destroy',[ControladorBD::class,'destroy'])->name('libro.destroy');

Route:: controller(controladorVistas::class)->group(
    function(){
Route:: get ('principal','vistaHome')->name('p');
// Route:: get ('registro','vistaRegistro')->name('r');
Route:: get ('clientes','vistaCliente')->name('cl');
});

Route::post('procesarLibro',[controladorVistas::class,'Libro'])->name('L');
Route::post('procesarCliente',[controladorVistas::class,'Cliente'])->name('c');
