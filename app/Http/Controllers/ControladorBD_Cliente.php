<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use DB;
use Carbon\Carbon;

class ControladorBD_Cliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec=DB::table('tb_clientes')->get();
        return view('indexClientes',compact('resultRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorCliente $request)
    {
        DB::table('tb_clientes')->insert([
            "nombre"=>$request->input('txtNombre'),
            "email_cliente"=>$request->input('txtEmail'),
            "ine"=>$request->input('txtIne'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('clientes/create')->with('confirmacion',"tu libro se guardo");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorCliente $request, $id)
    {
        DB::table('tb_clientes')->where('idCliente',$id)->update([
            "nombre"=>$request->input('txtNombre'),
            "email_cliente"=>$request->input('txtEmail'),
            "ine"=>$request->input('txtIne'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('clientes/index')->with('confirmacion',"tu cliente se editó");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_clientes')->where('idCliente',$id)->delete();
        return redirect('clientes/index')->with('Eliminado',"tu cliente se eliminó");
    }
}
