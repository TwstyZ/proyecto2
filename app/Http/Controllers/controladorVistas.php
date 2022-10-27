<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;


class controladorVistas extends Controller
{
    public function vistaHome(){

    return view('principal');
    }    
    public function vistaRegistro(){

    return view('registro');
}
    public function Libro(validadorLibro $req){
    return redirect('registro')->with('confirmacion','Libro registrado');
}
}
