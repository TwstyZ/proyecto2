@section('contenido')
@extends('plantilla')
<?php
   
?>
@if(session()->has('confirmacion'))
{!! "<script>
Swal.fire({
  title: 'Listo!',
  text: 'Libro guardado',
  imageUrl: 'https://png.pngtree.com/element_our/20190530/ourlarge/pngtree-simply-like-a-smiley-face-illustration-image_1245615.jpg',
  imageWidth: 400,
  imageHeight: 300,
  imageAlt: 'Custom image',
})
</script>"!!}

@endif

<hr size="2px" style="color: rgb(77, 64, 54)"/>
<div class="container col-11">
    <h1 class="text center mb-5">Ingresar Datos del Libro</h1>
    <div class="container">
        <form method="POST" action="{{route('libro.store')}}">
            @csrf
            <div class="row">
                <div class="col-3">
                <label class="form-label">ISBN:</label>
                <input type="number" name="txtISBN" class="form-control">
                <strong> {{$errors->first('txtISBN')}}</strong>
                </div>
                <div class="col">
                <label class="form-label">Titulo:</label>
                <input type="text" name="txtTitulo" class="form-control">
                <strong> {{$errors->first('txtTitulo')}}</strong>
                </div>
                <div class="col-5">
                <label class="form-label">Autor:</label>
                <input type="text" name="txtAutor" class="form-control">
                <strong> {{$errors->first('txtAutor')}}</strong>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                <label class="form-label">Paginas:</label>
                <input type="number" name="txtPaginas" class="form-control">
                <strong> {{$errors->first('txtPaginas')}}</strong>
                </div>
                <div class="col-6">
                <label class="form-label">Editorial:</label>
                <input type="text" name="txtEditorial" class="form-control">
                <strong> {{$errors->first('txtEditorial')}}</strong>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                <label class="form-label">Email de Editorial:</label>
                <input type="email" name="txtEmail" class="form-control">
                <strong> {{$errors->first('txtEmail')}}</strong>
                </div>
            </div>
            <div class="row justify-content-center card-action">
                <hr size="2px" style="color: rgb(77, 64, 54)"/>
                <button class="btn btn-primary" type="submit">Guardar Libro</button>
            </div>
        </form>
    </div>
    <hr size="2px" style="color: rgb(77, 64, 54)"/>
</div>


@stop