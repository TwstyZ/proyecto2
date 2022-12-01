
  
  <!-- Modal -->
  @foreach ($resultRec as $consulta)
  
  <div class="modal fade" id="modalEliminarLibro{{$consulta->idLibro}}" tabindex="-1" aria-labelledby="modalEliminarLibro{{$consulta->idLibro}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Titulo:</label>
                <h6 class="text-left">{{$consulta->titulo}}</h6>
                {{$errors->first('txtxTitulo')}}
            </div>
            <div class="mb-3">
                <label class="form-label">Autor:</label>
                <h6 class="text-left">{{$consulta->autor}}</h6>
                {{$errors->first('txtAutor')}}
            </div>
        </div>
        <div class="modal-footer">
            <form method="POST" action="{{route('libro.destroy',$consulta->idLibro)}}">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach