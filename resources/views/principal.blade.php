@section('contenido')
@extends('plantilla')

<hr size="1px" style="color: rgb(77, 64, 54)" />
<div class="container">
  <div class="row justify-content-center">
    <div class="col-5">
      <div id="carouselinfo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://img.freepik.com/fotos-premium/pila-libros-escritorio-biblioteca_23-2147845946.jpg?w=1380
            " class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://img.freepik.com/foto-gratis/vista-superior-libro-abierto-gafas-portatil-azul_141793-9617.jpg?w=1380&t=st=1666808377~exp=1666808977~hmac=68d3b588ab3811f5b3a8b173a0e097ce08bc51c2e7ad98ac52d5db1b9ade2627" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselinfo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselinfo" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
</div>
 <hr size="1px" style="color: rgb(77, 64, 54)" />
<div class="container">
  <div class="row">
    <div class="row justify-content-center">
      <div class="col">
        <h2 class="secondary"><strong> Noche Literaria</strong></h2>
        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
        <p>ut perspiciatis unde omnis iste natus error si </p>
      </div>
    </div>
    <div class="row"> <hr size="1 px" style="color: rgb(77, 64, 54)" /></div>
    <div class="row">
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="https://recasens.com/wp-content/uploads/2017/02/r_095_pvc_1.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center">Parte 1</h5>
              <p class="card-text text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
              <p class="text-center"> <a href="{{route('p')}}" class="btn btn-primary">Ir</a> </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="https://recasens.com/wp-content/uploads/2017/02/r_095_pvc_1.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center">Parte 2</h5>
              <p class="card-text text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
              <p class="text-center"> <a href="{{route('p')}}" class="btn btn-primary">Ir</a> </p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="https://recasens.com/wp-content/uploads/2017/02/r_095_pvc_1.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title text-center">Parte 3</h5>
              <p class="card-text text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
              <p class="text-center"> <a href="{{route('p')}}" class="btn btn-primary">Ir</a> </p>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
    
  @stop




  