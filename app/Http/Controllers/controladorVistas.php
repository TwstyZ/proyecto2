<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;
use App\Http\Requests\validadorCliente;


class controladorVistas extends Controller
{
    public function vistaHome(){

    return view('principal');
    }    

public function vistaCliente(){

    return view('clientes');
}
    public function Libro(validadorLibro $req){
        $titulo=$req->input('txtTitulo');
    return redirect()->route('r')->with('confirmacion',compact('titulo'));
}
public function Cliente(validadorCliente $req){
    $nombre=$req->input('txtNombre');
return redirect()->route('cl')->with('confirmacion',compact('nombre'));
}
}
