@section('contenido')
@extends('plantilla')
<?php
   
?>
@if(session()->has('confirmacion'))
<div class="alert alert-dark" role="alert">
    Cliente Guardado
    <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
  </div>

@endif

 
<hr size="2px" style="color: rgb(77, 64, 54)"/>
<div class="container col-11">
    <h1 class="text center mb-5">Ingresar Datos del Cliente</h1>
    <div class="container">
        <form method="POST" action="{{route('c')}}">
            @csrf
            <div class="row">
                <div class="col-3">
                <label class="form-label">Nombre Completo:</label>
                <input type="text" name="txtNombre" class="form-control" value={{old('txtNombre')}}>
                {{$errors->first('txtNombre')}}
                </div>
                <div class="col">
                <label class="form-label">Email</label>
                <input type="email" name="txtEmail" class="form-control" value={{old('txtEmail')}}>
                {{$errors->first('txtEmail')}}
                </div>
                <div class="col-5">
                <label class="form-label">No.INE</label>
                <input type="number" name="txtIne" class="form-control" value={{old('txtIne')}}>
                {{$errors->first('txtIne')}}
                </div>
            </div>
            <div class="row justify-content-center card-action">
                <hr size="2px" style="color: rgb(77, 64, 54)"/>
                <button class="btn btn-primary" type="submit">Guardar Cliente</button>
            </div>
        </form>
    </div>
    <hr size="2px" style="color: rgb(77, 64, 54)"/>
</div>

@stop 