
  
  <!-- Modal -->
  @foreach ($resultRec as $consulta)
  
  <div class="modal fade" id="modalEliminarCliente{{$consulta->idCliente}}" tabindex="-1" aria-labelledby="modalEliminarCliente{{$consulta->idCliente}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <h6 class="text-left">{{$consulta->nombre}}</h6>
                {{$errors->first('txtNombre')}}
            </div>
        </div>
        <div class="modal-footer">
            <form method="POST" action="{{route('clientes.destroy',$consulta->idCliente)}}">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach