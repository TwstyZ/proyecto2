
  
  <!-- Modal -->
  @foreach ($resultRec as $consulta)
  
  <div class="modal fade" id="modalEditarlibro{{$consulta->idLibro}}" tabindex="-1" aria-labelledby="modalEditarLibro{{$consulta->idLibro}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
          <form method="POST" action="{{route('libro.update',$consulta->idLibro)}}">
            @csrf
            {{-- Permite la actualizacion, simplemente es una llave para que entre --}}
            @method('put') 

              <div class="container">
                <div class="modal-body">
                <div class="row align-items-center">
                  <div class="col .me-auto"></div>

                  <div class="col-auto">
                    <label class="form-label">ISBN:</label>
                    <input class="text-left" type="text" name="txtISBN" value="{{$consulta->ISBN}}">
                    {{$errors->first('txtISBN')}}
                  </div>
                  <div class="col .me-auto">

                  </div>

                </div>
                <div class="row">
                  <div class="col align-self-center">
                    <label class="form-label">Titulo:</label>
                    <input class="text-left" type="text" name="txtTitulo" value="{{$consulta->titulo}}">
                    {{$errors->first('txtTitulo')}}
                  </div>
  
                  <div class="col align-self-center">
                    <label class="form-label">Autor:</label>
                    <input class="text-left" type="text" name="txtAutor" value="{{$consulta->autor}}">
                    {{$errors->first('txtAutor')}}
                  </div>
  
                </div>
                <div class="row">
                  <div class="col align-self-center">
                    <label class="form-label">Paginas:</label>
                    <input class="text-left" type="text" name="txtPaginas" value="{{$consulta->paginas}}">
                    {{$errors->first('txtPaginas')}}
                  </div>

                  <div class="col align-self-center">
                    <label class="form-label">Editorial:</label>
                    <input class="text-left" type="text" name="txtEditorial" value="{{$consulta->editorial}}">
                    {{$errors->first('txtEditorial')}}
                  </div>

                </div>

                <div class="row">
                    
                  <div class="col .me-auto"></div>

                  <div class="col align-self-center">
                    <label class="form-label">Email:</label>
                    <input class="text-left" type="text" name="txtEmail" value="{{$consulta->email_de_editorial}}">
                    {{$errors->first('txtEmail')}}
                </div>

                <div class="col .me-auto"></div>
                
                </div>

              </div>
              </div>
        
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
          <button type="submit" class="btn btn-primary">Realizar Cambios</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
  @endforeach

