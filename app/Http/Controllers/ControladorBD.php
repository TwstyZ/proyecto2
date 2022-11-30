<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;
use DB;
use Carbon\Carbon;

class ControladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec=DB::table('tb_libreria')->get();
        return view('indexLibro',compact('resultRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorLibro $request)
    {
        DB::table('tb_libreria')->insert([
            "ISBN"=>$request->input('txtISBN'),
            "titulo"=>$request->input('txtTitulo'),
            "autor"=>$request->input('txtAutor'),
            "paginas"=>$request->input('txtPaginas'),
            "editorial"=>$request->input('txtEditorial'),
            "email de editorial"=>$request->input('txtEmail'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('libro/create')->with('confirmacion',"tu libro se guardo");
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_libreria')->where('idLibro',$id)->delete();
        return redirect('libro/index')->with('Eliminado',"tu libro se eliminó");
    }
}
