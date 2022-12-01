@section('contenido')
@extends('plantilla')
@include('modalEditarLibro')
@include('modalEliminarLibro')


<div class="container">
       
            <div class="d-flex justify-content-center m-3 flex-wrap">
                @foreach ($resultRec as $consulta)
                <div class="card text-center" style="width: 18rem; margin:10px;">
                    <div class="card-body ">
                      <h5 class="card-title text-center">Nombre del libro: <h5 style="color:rgba(39, 38, 38, 0.637);">{{$consulta->titulo}}</h5></h5>
                      <h6 class="card-subtitle mb-2 text-muted text-center">Autor: {{$consulta->autor}}</h6>
                      <p class="card-text text-center">ISBN: {{$consulta->ISBN}} 
                        <br> Número de páginas: {{$consulta->paginas}} 
                        <br> Editorial: {{$consulta->editorial}}</p>
                                    <!-- Button trigger modal -->
                          <button type="button" class="btn btn-warning item-center" data-bs-toggle="modal" data-bs-target="#modalEditarLibro{{$consulta->idLibro}}">
                            Editar <i class="bi bi-file-earmark-x"></i>
                  </button>                                    
                        <button type="button" class="btn btn-primary item-center" data-bs-toggle="modal" data-bs-target="#modalEliminarLibro{{$consulta->idLibro}}">
                        Eliminar <i class="bi bi-file-earmark-x"></i>
              </button>
                    </div>
                  </div>
                  @endforeach
        </div>


</div>


@stop