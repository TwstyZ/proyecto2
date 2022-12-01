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


}
