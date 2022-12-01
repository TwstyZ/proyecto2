@section('contenido')
@extends('plantilla')
@include('modalEliminarCliente')
@include('modalEditarCliente')

<div class="container">
       
    <div class="d-flex justify-content-center m-3 flex-wrap">
        @foreach ($resultRec as $consulta)
        <div class="card text-center" style="width: 18rem; margin:10px;">
            <div class="card-body ">
              <h5 class="card-title text-center">Nombre del Cliente: <h5 style="color:rgba(39, 38, 38, 0.637);">{{$consulta->nombre}}</h5></h5>
              <h6 class="card-subtitle mb-2 text-muted text-center">Email: {{$consulta->email_cliente}}</h6>
              <p class="card-text text-center">INE: {{$consulta->ine}} 
                
                <div class="row">
                        <!-- Button trigger modal -->
                        <div class="col">
                            <button type="button" class="btn btn-warning item-center" data-bs-toggle="modal" data-bs-target="#modalEditarCliente{{$consulta->idCliente}}">
                                Editar 
                            </button>   
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary item-center" data-bs-toggle="modal" data-bs-target="#modalEliminarCliente{{$consulta->idCliente}}">
                            Eliminar <i class="bi bi-file-earmark-x"></i>
                            </button>
                        </div> 

                </div>

            </div>
          </div>
          @endforeach
</div>


</div>
@stop