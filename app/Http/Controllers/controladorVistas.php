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
        $titulo=$req->input('txtTitulo');
    return redirect()->route('r')->with('confirmacion',compact('titulo'));
}
}
