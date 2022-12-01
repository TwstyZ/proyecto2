<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <link rel="stylesheet" href="{{asset('css/extra.css')}}">
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(77, 64, 54);">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('p')}}">Principal</a>  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav"> 
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: rgb(77, 64, 54);margin-color:rgb(77, 64, 54)" >
              Libros
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{route('libro.create')}}">Registro de Libros</a></li>
              <li><a class="dropdown-item" href="{{route('libro.index')}}">Libreria</a></li>
            </ul>
          </div> 
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: rgb(77, 64, 54);" >
            Clientes
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{route('clientes.create')}}">Registro de Clientes</a></li>
            <li><a class="dropdown-item" href="{{route('clientes.index')}}">Clientes</a></li>
          </ul>
        </div> 
      </div>
      </div>
    </div>
  </nav>
<!--contenido-->
  @yield('contenido')
<!--pie de pagina-->
<div class="alert alert-info text-center pt-2 pb-2 container mw-100" role="alert">
    <div class="row">
        <div class="col">
            Biblioteca 
        </div>
        <div class="col">
            Copyright ©
        </div>
        <div class="col">
            <?php
            echo date ("l F Y")
            ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>