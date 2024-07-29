<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('imagenes/logo2.png')}}">
  <title>Consolas</title>
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
            <a class="nav-link active" aria-current="page" href="{{url('/')}}" style="color: white;"><i class="fa-solid fa-house">&nbsp;</i>Inicio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/consol')}}" style="color: white;"><i class="fa-solid fa-gamepad">&nbsp;</i>Consolas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/videoj')}}" style="color: white;"><i class="fa-solid fa-gamepad">&nbsp;</i>Videojuegos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
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
    <!--Cartas de Consolas-->
    <div class="card mb-3" style="max-width:none; background-color: grey; color: white; ">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('imagenes/xboxS.jpg')}}" class="img-fluid rounded-start" alt="Xbox Series S">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Xbox Series S</h5>
            <p class="card-text"> Disfruta de la poderosa xbox series S, esta belleza fue diseñada para brindarte un increíble rendimiento,<br> pues cuenta con un almacenamiento sólido de 512 GB, por lo que tendrás un acceso veloz a tus juegos. <br>Esta chulada cuenta con un chip SOC, el cual te permite visualizar imágenes hasta a 120 FPS.<br><br> </p>
            <p class="card-text"><small class="text-body-secondary">Disfruta de ella en Game Zone</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width:none; background-color: grey; color: white;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('imagenes/ps5.png')}}" class="img-fluid rounded-start" alt="PS5">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">PlayStation 5</h5>
            <p class="card-text">CPU x86-64-AMD Ryzen™ Zen 2 8 nucleos/16 hilosfrecuencia variable, hasta 3.5GHz GPU Motor de gráficos basado en AMD Radeon ™ RDNA 2
              <br> SSD 825GB ancho de banda 5.5GB/s
              <br> Salida de videoSoporte TVs 4K 120H, Tvs 8Kç, VRR (Específicamente para HDMI versión 2.1)<br><br>
            </p>
            <p class="card-text"><small class="text-body-secondary">Disfruta de ella en Game Zone</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width:none; background-color: grey; color: white;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('imagenes/switch.jpg')}}" class="img-fluid rounded-start" alt="nintendo">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Nintendo Switch</h5>
            <p class="card-text">El largo desde la punta de las palancas hasta la punta de los botones ZL y ZR es de 1.12 pulgadas (2.84 cm). Peso Aproximadamente 0.71 libras (322 g)
              <br> CPU/GPU Procesador NVIDIA Custom Tegra <br>Salida de vide Up to 1080p via HDMI in TV mode Up to 720p via built-in screen in Tabletop mode and Handheld modes Salida de audio Hasta 1080p a través de HDMI en el modo TV Hasta 720p en modo portátil y modo semiportátil a través de la pantalla integrada
              <br><br>
            </p>
            <p class="card-text"><small class="text-body-secondary">Disfruta de ella en Game Zone</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width:none; background-color: grey; color: white;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('imagenes/tablero.jpg')}}" class="img-fluid rounded-start" alt="Arcade">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Tablero Arcada</h5>
            <p class="card-text">¿te imaginas volver a jugar Las sagas de Los 80’s y 90’s? Con esta Consola Arcade Retro Pandora revive una vez más todas esos títulos que tanto disfrutaste.<br>Audio: 3.5 mm. Software: pandora.Puertos: HDMI , VGA. Resolución: hasta 1280 x 720p. Dimensiones 64x23x 6 cm. 2 puertos USB 2.0 (1 conexión PC, 1 conexión gamepad).</p>
            <p class="card-text"><small class="text-body-secondary">Disfruta de ella en Game Zone</small></p>
          </div>
        </div>
      </div>
    </div>
    <!--Fin de Cartas de Consolas-->



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






  <script src="vista/Bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>