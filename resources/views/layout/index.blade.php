<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="{{route('index')}}">
            <span class="d-block d-lg-none">Gestion de Riesgo</span>
            <span class="d-none d-lg-block"><img class="w-30 rounded-circle" src="{{asset('img/logo-sena.png')}}" alt="logo-sena" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <hr class="text-black m-0">

                <!-- Login -->
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle fs-5"></i>
                        <span class="h6">{{$user->first_name}}</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item py-0" href="{{ route('register') }}">Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <!-- Logout -->
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <li><a class="dropdown-item py-0" href="#" onclick="this.closest('form').submit()">Cerrar sesión</a></li>
                        </form>
                    </ul>
                </li>
                @endauth

                <hr class="text-black mt-0">
                <h4>Definir contexto</h4>
                <li class="nav-item"><a class="nav-link js-scroll-trigger py-0" href="{{route('contexto-empresa')}}">Empresa</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger py-0" href="{{route('sistema-general')}}">Sistema general</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger py-0" href="{{route('sgc')}}">SGC</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger py-0" href="{{route('sga')}}">SGA</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger py-0" href="{{route('sgsst')}}">SST</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger py-0" href="{{route('result-sg')}}">RESUlTADOS SG</a></li>
                <hr class="text-black">
                <h4>Identificar riesgo</h4>
                <li class="nav-item"><a class="nav-link js-scroll-trigger py-0" href="{{route('identificacion-riesgo')}}">Identificar riesgo</a></li>
                <hr class="text-black">
                <h4>Gestionar riesgo</h4>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('analisis-riesgo')}}">Análisis y valoracion</a></li>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger py-0" href="#interests">Plan de acción</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">      
        <h1 class="m-4 text-center">
            Gestión del
            <span class="text-primary">Riesgo</span>
        </h1>

        @yield('content')

    </div>
    <!-- Bootstrap core JS-->
    <!-- <script src="js/jquery.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js/scripts.js')}}"></script>

    @yield('script')

    {{-- <script src="js/magic.js"></script> --}}
</body>

</html>