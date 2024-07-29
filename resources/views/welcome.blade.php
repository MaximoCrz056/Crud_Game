<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('imagenes/logo2.png')}}">
  <title>Game Zone</title>
  <link rel="stylesheet" href="vista/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vista/css/estilos.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/lumen/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://kit.fontawesome.com/919e73493b.js" crossorigin="anonymous"></script>

  @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])
</head>

<body>
  <!-- Barra de navegacion -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="background-color: black;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img src="{{asset('imagenes/logo2.png')}}" alt="logo" style="width: 100px;" style="background-color: black;" &nbsp;&nbsp;>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{url('/')}}" style="color: white;">&nbsp;&nbsp;&nbsp;Game Zone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}" style="color: white;"><i class="fa-solid fa-house">&nbsp;</i>Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/consol')}}" style="color: white;"><i class="fa-solid fa-gamepad">&nbsp;</i>Consolas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/videoj')}}" style="color: white;"><i class="fa-solid fa-gamepad">&nbsp;</i>Videojuegos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/servicios')}}" style="color: white;"><i class="fa-solid fa-ghost">&nbsp;</i>Servicios</a>
          </li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          @if (Route::has('login'))
          <nav class="-mx-3 flex flex-1">
            @auth
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Dashboard
            </a>
            @else

            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Iniciar Sesion
            </a>

            @if (Route::has('register'))

            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Registrarse
            </a>
            @endif
            @endauth
        </ul>
      </div>
    </div>
  </nav>
  @endif
  <!--Fin de Barra de navegacion -->
  <br>
  <div class="container">
    <!--Banner -->
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('imagenes/banner.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
    <!--Fin de Banner -->
    <br>
    <br>
    <!-- Galeria De servicios-->
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card h-100" style="background-color: gray; color: white;">
          <img src="{{asset('imagenes/arcade1.jpg')}}" class="card-img-top" alt="arcade">
          <div class="card-body">
            <h5 class="card-title">Maquinas Arcade</h5>
            <p class="card-text">Precio $1.00 (por 5 vidas)</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="background-color: gray; color: white;">
          <img src="{{asset('imagenes/consola2.jpg')}}" class="card-img-top" alt="PS5">
          <div class="card-body">
            <h5 class="card-title">Consola PlayStation 5</h5>
            <p class="card-text">Precio $20.00 (por hora)</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="background-color: gray; color: white;">
          <img src="{{asset('imagenes/consola3.jpg')}}" class="card-img-top" alt="Xbox S">
          <div class="card-body">
            <h5 class="card-title">Xbox Series S</h5>
            <p class="card-text">Precio $20.00 (por hora)</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="background-color: gray; color: white;">
          <img src="{{asset('imagenes/consola4.jpg')}}" class="card-img-top" alt="Nintendo ">
          <div class="card-body">
            <h5 class="card-title">Nintendo Switch</h5>
            <p class="card-text">Precio $20.00 (por 1 hora)</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100" style="background-color: gray; color: white;">
          <img src="{{asset('imagenes/papa.jpg')}}" class="card-img-top" alt="papas">
          <div class="card-body">
            <h5 class="card-title">Papas</h5>
            <p class="card-text">Precio $10.00(por bolsa)</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="background-color: gray; color: white;">
          <img src="{{asset('imagenes/pizzas.jpg')}}" class="card-img-top" alt="pizzas">
          <div class="card-body">
            <h5 class="card-title">Rebanada de Pizza</h5>
            <p class="card-text">Precio $13.00 (por rebanada)</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="background-color: gray; color: white;">
          <img src="{{asset('imagenes/futbolito.jpg')}}" class="card-img-top" alt="futbolito">
          <div class="card-body">
            <h5 class="card-title">Futbolito</h5>
            <p class="card-text">Precio $1.00 (por partido con 7 pelotas)</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="background-color: gray; color: white;">
          <img src="{{asset('imagenes/futbolito2.jpg')}}" class="card-img-top" alt="futbolito">
          <div class="card-body">
            <h5 class="card-title">Futbolito</h5>
            <p class="card-text">Precio $1.00 (por partido con 7 pelotas)</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de Galeria de servicios -->
    <br>
    <br>
    <br>
  </div>
  <!-- Pie de pagina -->
  <footer class="text-center bg-body-tertiary " style="background-color: black;">
    <div class="text-center p-3" style="background-color: #000000; color: white;">
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f" style="color: white;"></i></a>

      <!-- Twitter -->
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter" style="color: white;"></i></a>

      <!-- Google -->
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://maps.app.goo.gl/efjWXr6hbU77zRLQ6" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google" style="color: white;"></i></a>

      <!-- Instagram -->
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://wa.me/5525670039/?text=hola%20desde%20GameTime%20" role="button" data-mdb-ripple-color="dark"><i class="fab fa-whatsapp" style="color: white;"></i></a>
      <br>
      © 2024 Eager Developers
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>