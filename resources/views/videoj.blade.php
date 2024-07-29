<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('imagenes/logo2.png')}}">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="vista/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://kit.fontawesome.com/919e73493b.js" crossorigin="anonymous"></script>
    @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
            color: #ffffff;
            transition: 0.5s;
        }

        html, body {
    /* Elimina overflow: hidden; */
    height: auto;
    /* overflow: hidden; */ /* Elimina esta línea */
}


        #titulo {
            color: #2997dc;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            margin-top: 20px;
        }

        body {
    align-items: center;
    justify-content: center;
    position: relative;
    background-size: cover; /* Cambia a cover */
    background-position: center;
    background-repeat: no-repeat;
    transition: background-image 0.5s;
    overflow-y: auto;
}



.container {
    position: relative;
    z-index: 2;
    min-height: 100vh; /* Asegura que .container tenga al menos la altura de la ventana del navegador */
}


        .card {
            cursor: pointer;
            overflow: hidden;
            position: relative;
            transition: transform 0.5s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card .image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card .layer {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        }

        .card .card-body {
            opacity: 0;
            transition: opacity 0.5s;
        }

        .card:hover .card-body {
            opacity: 1;
        }

        .card-title, .card-text {
            color: #000000;
            background-color: #ffffff9d;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
   <!-- Barra de navegacion -->  
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="background-color: black;">
            <span class="navbar-toggler-icon"></span>
          </button>
          <img src="{{asset('imagenes/logo2.png')}}" alt="logo" style="width: 100px;" style="background-color: black;"&nbsp;&nbsp;>
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
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else  
                                
                                     <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Iniciar Sesion
                                    </a>

                                    @if (Route::has('register'))
                                    
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
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
      <div class="container">
        <h1 id="titulo">Nuestros juegos más populares</h1>
        <div class="row">
            <div class="col-md-4 col-lg-3 mb-5">
                <div class="card" data-bg="{{asset('imagenes/TKF.jpg')}}">
                    <img src="{{asset('imagenes/TKF.jpg')}}" class="image card-img-top" alt="The King of Fighters">
                    <div class="card-body layer">
                        <h5 class="card-title">The King of Fighters</h5>
                        <p class="card-text">Disfruta de The King of Fighters disponible en Arcade, solo aquí en Game Zone</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-5">
                <div class="card" data-bg="{{asset('imagenes/ss.png')}}">
                    <img src="{{asset('imagenes/ss.png')}}" class="image card-img-top" alt="Super Smash Bros">
                    <div class="card-body layer">
                        <h5 class="card-title">Super Smash Bros</h5>
                        <p class="card-text">Disfruta del nuevo Super Smash Bros disponible para Nintendo, solo aquí en Game Zone</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-5">
                <div class="card" data-bg="{{asset('imagenes/mk1.jpeg')}}">
                    <img src="{{asset('imagenes/mk1.jpeg')}}" class="image card-img-top" alt="Mortal Kombat 1">
                    <div class="card-body layer">
                        <h5 class="card-title">Mortal Kombat 1</h5>
                        <p class="card-text">Disfruta de la nueva entrega de Mortal Kombat disponible para PS5, solo aquí en Game Zone</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-5">
                <div class="card" data-bg="{{asset('imagenes/mk11.png')}}">
                    <img src="{{asset('imagenes/mk11.png')}}" class="image card-img-top" alt="Mortal Kombat 11">
                    <div class="card-body layer">
                        <h5 class="card-title">Mortal Kombat 11</h5>
                        <p class="card-text">Disfruta de Mortal Kombat 11 disponible para Xbox y Nintendo, solo aquí en Game Zone</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-5">
                <div class="card" data-bg="{{asset('imagenes/FC24.jpg')}}">
                    <img src="{{asset('imagenes/FC24.jpg')}}" class="image card-img-top" alt="FC24">
                    <div class="card-body layer">
                        <h5 class="card-title">FC24</h5>
                        <p class="card-text">Disfruta del nuevo FC24 y anota como los grandes disponible para Xbox, solo aquí en Game Zone</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-5">
              <div class="card" data-bg="{{asset('imagenes/beasts.jpg')}}">
                  <img src="{{asset('imagenes/beasts.jpg')}}" class="image card-img-top" alt="Super Smash Bros">
                  <div class="card-body layer">
                      <h5 class="card-title">Gang Beasts</h5>
                      <p class="card-text">Disfruta de Gang Beasts  disponible para Xbox, solo aquí en Game Zone</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-5">
            <div class="card" data-bg="{{asset('imagenes/gears.webp')}}">
                <img src="{{asset('imagenes/gears.webp')}}" class="image card-img-top" alt="Super Smash Bros">
                <div class="card-body layer">
                    <h5 class="card-title">Gears of war</h5>
                    <p class="card-text">Disfruta de Geras of War y tira a todos tus amigos disponible para Xbox, solo aquí en Game Zone</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-5">
          <div class="card" data-bg="{{asset('imagenes/partyAnimals.jpg')}}">
              <img src="{{asset('imagenes/partyAnimals.jpg')}}" class="image card-img-top" alt="Super Smash Bros">
              <div class="card-body layer">
                  <h5 class="card-title">Party Animals</h5>
                  <p class="card-text">Disfruta de Party Animals y divierte con tus amigos disponible para Xbox y Play5, solo aquí en Game Zone</p>
              </div>
          </div>
      </div>
        </div>
    </div>
     
    <!-- Pie de pagina -->  
    <footer class="text-center bg-body-tertiary" style="background-color: black;">    
        <div class="text-center p-3" style="background-color: #000000; color: white;">
            <a
              data-mdb-ripple-init
              class="btn btn-link btn-floating btn-lg text-body m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f" style="color: white;"></i
            ></a>
      
            <!-- Twitter -->
            <a
              data-mdb-ripple-init
              class="btn btn-link btn-floating btn-lg text-body m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-twitter" style="color: white;"></i
            ></a>
      
            <!-- Google -->
            <a
              data-mdb-ripple-init
              class="btn btn-link btn-floating btn-lg text-body m-1"
              href="https://maps.app.goo.gl/efjWXr6hbU77zRLQ6"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-google" style="color: white;"></i
            ></a>
      
            <!-- Instagram -->
            <a
              data-mdb-ripple-init
              class="btn btn-link btn-floating btn-lg text-body m-1"
              href="https://wa.me/5525670039/?text=hola%20desde%20GameTime%20"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-whatsapp" style="color: white;"></i
            ></a>
            <br>
          © 2024 Eager Developers
        </div>
        <!-- Copyright -->
      </footer>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');

            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const bgImage = this.getAttribute('data-bg');
                    document.body.style.backgroundImage = `url(${bgImage})`;
                });

                card.addEventListener('mouseleave', function() {
                    document.body.style.backgroundImage = 'none';
                });
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="vista/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
