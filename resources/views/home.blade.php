@extends('layouts.app')

@section('content')
<script src="https://kit.fontawesome.com/919e73493b.js" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(45deg,#FFFFFF,#2997dc);
        }
        .navbar {
            background-color: black;
        }
        .navbar-brand, .nav-link, .navbar-toggler-icon {
            color: white !important;
        }
        .container-flex {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            margin-top: 5%;
            position: relative;
            width: 100%;
            max-width: 350px;
            background: #FFFFFF;
            border-radius: 20px;
            box-shadow: 0 35px 80px #00000026;
            transition: 0.5s;
        }
        .card:hover {
            height: 450px;
        }
        .imgBx {
            position: absolute;
            left: 50%;
            top: -50px;
            transform: translateX(-50%);
            width: 150px;
            height: 150px;
            background: #FFFFFF;
            border-radius: 20px;
            box-shadow: 0 15px 50px #00000026;
            overflow: hidden;
            transition: 0.5s;
        }
        .card:hover .imgBx {
            width: 250px;
            height: 250px;
        }
        .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .content {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            overflow: hidden;
        }
        .details {
            padding: 40px;
            text-align: center;
            width: 100%;
            transition: 0.5s;
            transform: translateY(150px);
        }
        .card:hover .details {
            transform: translateY(0px);
        }
        .details h2 {
            font-size: 1.25em;
            font-weight: 600;
            color: #555555;
            line-height: 1.2em;
        }
        .details h2 span {
            font-size: 0.75em;
            font-weight: 500;
            opacity: 0.5;
        }
        .data {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }
        .data h3 {
            font-size: 1em;
            color: #555555;
            line-height: 1.2em;
            font-weight: 600;
        }
        footer {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Contenido principal -->
    <div class="container-flex">
        <div class="card">
            <div class="imgBx">
                <img src="{{asset('imagenes/jonh.jpg')}}" alt="Gerente">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Hola bienvenido Jonh <br><span>Gerente</span></h2>
                    <div class="data">
                        <h3>Tu perfil tiene acceso a todas las opciones del sistema</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del contenido principal -->
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <!-- Pie de página -->  
    <footer class="text-center">
        <div class="text-center p-3">
            <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"><i class="fab fa-facebook-f" style="color: white;"></i></a>
            <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"><i class="fab fa-twitter" style="color: white;"></i></a>
            <a class="btn btn-link btn-floating btn-lg text-body m-1" href="https://maps.app.goo.gl/efjWXr6hbU77zRLQ6" role="button"><i class="fab fa-google" style="color: white;"></i></a>
            <a class="btn btn-link btn-floating btn-lg text-body m-1" href="https://wa.me/5525670039/?text=hola%20desde%20GameTime" role="button"><i class="fab fa-whatsapp" style="color: white;"></i></a>
            <br>© 2024 Eager Developers
        </div>
    </footer>
    <!-- Fin del pie de página -->

    <script src="vista/Bootstrap/js/bootstrap.min.js"></script>
@endsection
