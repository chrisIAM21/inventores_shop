<div>
    <!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="/my-layout/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="/my-layout/assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{ $title }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- CSS Files -->
        <link href="/my-layout/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/my-layout/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="/my-layout/assets/demo/demo.css" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="orange">
                <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
                <div class="logo">
                    <a href="/productos"><img src="/my-layout/assets/img/Logo_inventores_shop_1.png" alt="Inventores Shop" width="245px">
                    </a>
                </div>
                <div class="sidebar-wrapper" id="sidebar-wrapper">
                    <ul class="nav">
                        <!--<li class="active ">-->
                        <!-- Si la ruta actual es 'productos.index', la clase de la lista pasará al estado 'active' -->
                        <li class="{{ Route::currentRouteName() == 'productos.index' ? 'active' : '' }}">
                            <a href="/productos">
                                <i class="now-ui-icons design_bullet-list-67"></i>
                                <p>Lista de productos</p>
                            </a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'productos.create' ? 'active' : '' }}">
                            <a href="/productos/create">
                                <i class="now-ui-icons ui-1_simple-add"></i>
                                <p>Agregar</p>
                            </a>
                        </li>
                        <!--    
                        <li>
                            <a href="/productos">
                                <i class="now-ui-icons design_bullet-list-67"></i>
                                <p>Lista de productos</p>
                            </a>
                        </li>
                        <li>
                            <a href="/productos/create">
                                <i class="now-ui-icons ui-1_simple-add"></i>
                                <p>Agregar</p>
                            </a>
                        </li>
                    -->
                    </ul>
                </div>
            </div>
            <div class="main-panel" id="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <p class="navbar-brand">Administrador de productos</p>
                            <!--<a class="navbar-brand" href="#">Administrador de productos</a>-->
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <!-- Si el usuario está autenticado, se mostrará el nombre del usuario en el menú de navegación -->
                                    @if (Route::has('login'))
                                        @auth
                                            <a class="nav-link" href="/user/profile">
                                                <i class="now-ui-icons users_single-02"></i>
                                                <p>{{ Auth::user()->name }}</p>
                                            </a>
                                        @else
                                            <a class="nav-link" href="/login">
                                                <i class="now-ui-icons users_single-02"></i>
                                                <p>Iniciar sesión</p>
                                            </a>
                                        @endauth
                                    @endif
                                </li>
                                <!--<li class="nav-item">
                                    @auth
                                        <a class="nav-link" href="/dashboard">
                                            <i class="now-ui-icons users_single-02"></i>
                                            <p>{{ Auth::user()->name }}</p>
                                        </a>
                                    @endauth

                                    <a class="nav-link" href="/login">
                                        <i class="now-ui-icons users_single-02"></i>
                                        <p>Iniciar sesión</p>
                                    </a>
                                </li>-->
                                <li class="nav-item">
                                    <!-- Si el usuario ya está autenticado, se mostrará la opción de cerrar sesión, sino, se muestra la opción de Registrarse -->
                                    @if (Route::has('login'))
                                        @auth
                                            <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                                <p>Cerrar sesión</p>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        @else
                                            <a class="nav-link" href="/register">
                                                <i class="now-ui-icons"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 16 21" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" height="16" width="21">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"></path>
                                                </svg></i>
                                                <p>Registrarse</p>
                                            </a>
                                        @endauth
                                    @endif
                                </li>
<!--
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">
                                        <i class="now-ui-icons"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"></path>
                                        </svg></i>
                                        
                                        <p>Registrarse</p>
                                    </a>
                                </li>-->
                                <!-- Método para cerrar sesión -->
                                <!--
                                <li>
                                    <a class="nav-link">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                                            <x-dropdown-link href="{{ route('logout') }}"
                                                        @click.prevent="$root.submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </a>
                                </li>
                            -->
                            <!--
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                        <p>Cerrar sesión</p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <!-- <div class="panel-header panel-header-lg">-->
                <div class="panel-header panel-header-sm">
                    <canvas id="bigDashboardChart"></canvas>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header ">
                                    <h1 class="card-title">{{ $title }}</h1>
                                </div>
                                <div class="card-body ">
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    <!--</div>-->
                </div>
                <footer class="footer">
                    <div class=" container-fluid ">
                        <div class="copyright" id="copyright">
                            &copy; <!--<script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.-->
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>, Diseñado por Christopher Andrade.
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="/my-layout/assets/js/core/jquery.min.js"></script>
        <script src="/my-layout/assets/js/core/popper.min.js"></script>
        <script src="/my-layout/assets/js/core/bootstrap.min.js"></script>
        <script src="/my-layout/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="/my-layout/assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="/my-layout/assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="/my-layout/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
        <script src="/my-layout/assets/demo/demo.js"></script>
        <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                demo.initDashboardPageCharts();

            });
        </script>
    </body>

    </html>
</div>