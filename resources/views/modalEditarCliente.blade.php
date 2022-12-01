
  
  <!-- Modal -->
  @foreach ($resultRec as $consulta)
  
  <div class="modal fade" id="modalEditarCliente{{$consulta->idCliente}}" tabindex="-1" aria-labelledby="modalEditarCliente{{$consulta->idCliente}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
          <form method="POST" action="{{route('clientes.update',$consulta->idCliente)}}">
            @csrf
            {{-- Permite la actualizacion, simplemente es una llave para que entre --}}
            @method('put') 

              <div class="container">
                <div class="modal-body">
                <div class="row align-items-center">
                  <div class="col .me-auto"></div>

                  <div class="col-auto">
                    <label class="form-label">Nombre:</label>
                    <input class="text-left" type="text" name="txtNombre" value="{{$consulta->nombre}}">
                    {{$errors->first('txtNombre')}}
                  </div>
                  <div class="col .me-auto">

                  </div>

                </div>
                <div class="row">
                  <div class="col align-self-center">
                    <label class="form-label">Email:</label>
                    <input class="text-left" type="text" name="txtEmail" value="{{$consulta->email_cliente}}">
                    {{$errors->first('txtEmail')}}
                  </div>
  
                  <div class="col align-self-center">
                    <label class="form-label">INE:</label>
                    <input class="text-left" type="number" name="txtIne" value="{{$consulta->ine}}">
                    {{$errors->first('txtIne')}}
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

