<div>
    <!--
=========================================================
* Soft UI Design System - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

    <!-- Botón gradiente
<div class="github-buttons">
  <a href="https://www.creative-tim.com/product/soft-ui-design-system-pro" target="_blank" rel="nofollow" class="btn bg-gradient-primary mb-5 mb-sm-0">Upgrade to Pro</a>
  <div class="github-button">
  -->

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope itemtype="http://schema.org/WebPage">

    <head>

        <script type="module">
            // Import the functions you need from the SDKs you need
            import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
            // TODO: Add SDKs for Firebase products that you want to use
            // https://firebase.google.com/docs/web/setup#available-libraries
          
            // Your web app's Firebase configuration
            const firebaseConfig = {
                apiKey: "AIzaSyANXz_2uGETfUDNm989EGTXGTl3yrzhPbc",
                authDomain: "chatbot-laravel-48503.firebaseapp.com",
                projectId: "chatbot-laravel-48503",
                storageBucket: "chatbot-laravel-48503.appspot.com",
                messagingSenderId: "140916884125",
                appId: "1:140916884125:web:c65a6f4cf4c6d98be30a74"
            };
          
            // Initialize Firebase
            const app = initializeApp(firebaseConfig);
        </script>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="apple-touch-icon" sizes="76x76" href="layout-inicio/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="layout-inicio/assets/img/favicon.png">

        <title>{{ $title }}</title>

        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

        <!-- Nucleo Icons -->
        <link href="layout-inicio/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="layout-inicio/assets/css/nucleo-svg.css" rel="stylesheet" />

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="layout-inicio/assets/css/nucleo-svg.css" rel="stylesheet" />

        <!-- CSS Files -->
        <link id="pagestyle" href="layout-inicio/assets/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />

        <!-- Nepcha Analytics (nepcha.com) -->
        <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
        <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    </head>

    <body class="index-page">

        <!-- Navbar -->
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    <nav
                        class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                        <div class="container-fluid px-0">
                            <a class="navbar-brand font-weight-bolder ms-sm-3" href="#" rel="tooltip"
                                title="Inventores Shop" data-placement="bottom" target="_blank">

                                <img src="my-layout/assets/img/Logo_inventores_shop_1.png"
                                    style="max-width: 160px; max-height: 70px;">
                            </a>
                            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon mt-2">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                                <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">

                                    <li class="nav-item dropdown dropdown-hover mx-2">
                                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                            href="javascript:;" id="dropdownMenuBlocks" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Categorías
                                            <img src="layout-inicio/assets/img/down-arrow-dark.svg" alt="down-arrow"
                                                class="arrow ms-1" />
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                                            aria-labelledby="dropdownMenuBlocks">
                                            <div class="d-none d-lg-block">
                                                <!-- Botón para mostrar todo el catálogo -->
                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{route('catalogo')}}">
                                                        <!-- Enlace -->
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                            </div>
                                                            <div
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Mostrar todo el catálogo</h6>
                                                                    <span class="text-sm">Encuentra lo que buscas</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>


                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{route('catalogo')}}">
                                                        <!-- Enlace -->
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                            </div>
                                                            <div
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Deportes</h6>
                                                                    <span class="text-sm">Encuentra lo que buscas</span>
                                                                </div>

                                                                <img src="layout-inicio/assets/img/down-arrow.svg"
                                                                    alt="down-arrow" class="arrow">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{route('catalogo')}}">
                                                            Futbol
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{route('catalogo')}}">
                                                            Basketball
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{route('catalogo')}}">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                            </div>
                                                            <div
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Deportes</h6>
                                                                    <span class="text-sm">Encuentra lo que buscas</span>
                                                                </div>

                                                                <img src="layout-inicio/assets/img/down-arrow.svg"
                                                                    alt="down-arrow" class="arrow">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{route('catalogo')}}">
                                                            Futbol
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{route('catalogo')}}">
                                                            Basketball
                                                        </a>
                                                    </div>
                                                </li>

                                            </div>

                                            <!-- Menu mobile -->

                                            <div class="row d-lg-none">
                                                <div class="col-md-12">
                                                    <div class="d-flex mb-2">

                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                                href="{{route('catalogo')}}">
                                                                    <!-- Enlace -->
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Mostrar todo el catálogo</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-2">

                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                                href="{{route('catalogo')}}">
                                                                    <!-- Enlace -->
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Deportes</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{route('catalogo')}}">
                                                        Futbol
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{route('catalogo')}}">
                                                        Basketball
                                                    </a>

                                                    <div class="d-flex mb-2 mt-3">
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                                    href="{{route('catalogo')}}">
                                                                    <!-- Enlace -->
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Género</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{route('catalogo')}}">
                                                        Hombre
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{route('catalogo')}}">
                                                        Mujer
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{route('catalogo')}}">
                                                        Niño
                                                    </a>

                                                </div>
                                            </div>
                                            <!-- Fin menu mobile -->
                                        </ul>
                                    </li>

                                    <!-- si el usuario está autenticado, se mostrará el carrito de compras -->
                                    @auth
                                        <li class="nav-item mx-2">
                                            <a class="nav-link nav-link-icon me-2" href="#">
                                                <p class="d-inline text-sm z-index-1" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom">Carrito</p>
                                            </a>
                                        </li>
                                    @endauth

                                    <!-- si el usuario está autenticado y tiene rol de admin, se mostrará el botón para administrar productos -->
                                    @auth
                                        @can('admin')
                                            <li class="nav-item mx-2">
                                                <a class="nav-link nav-link-icon me-2" href="{{ route('productos.index') }}">
                                                    <p class="d-inline text-sm z-index-1" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom">Aministrar productos</p>
                                                </a>
                                            </li>
                                        @endcan
                                    @endauth

                                    <li class="nav-item my-auto ms-3 ms-lg-auto">
                                        <!-- si no se ha iniciado sesión, se mostrará el botón para registrarse -->
                                        @if (Route::has('register'))
                                            @guest
                                                <a class="btn btn-sm btn-outline-primary btn-round mb-0 me-1 mt-2 mt-md-0"
                                                    href="/registro">
                                                    <i class="now-ui-icons">
                                                        <svg fill="none" stroke="currentColor" stroke-width="1.5"
                                                            viewBox="0 0 16 21" xmlns="http://www.w3.org/2000/svg"
                                                            aria-hidden="true" height="16" width="21">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z">
                                                            </path>
                                                        </svg>
                                                    </i>
                                                    Regístrate
                                                </a>
                                            @endguest
                                        @endif
                                    </li>

                                    {{-- <li class="nav-item my-auto ms-3 ms-lg-0">
                                        <!-- Si el usuario está autenticado, se mostrará el nombre del usuario en el menú de navegación -->
                                        @if (Route::has('login'))
                                            @auth
                                                <a class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0"
                                                    href="/user/profile">
                                                    {{ Auth::user()->name }}
                                                </a>
                                            @else
                                                <a class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0"
                                                    href="/login">
                                                    Iniciar sesión
                                                </a>
                                            @endauth
                                        @endif
                                    </li> --}}

                                    <li class="nav-item my-auto ms-3 ms-lg-0">
                                        <!-- Si el usuario está autenticado, se mostrará el nombre del usuario en el menú de navegación -->
                                        @if (Route::has('login'))
                                            @auth
                                                <div class="dropdown">
                                                    <a href="javascript:;"
                                                        class="btn btn-sm bg-gradient-primary btn-round mb-0 me-1 mt-2 mt-md-0"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fa fa-user me-sm-1"></i>
                                                        <span>{{ Auth::user()->name }}</span>
                                                        <img src="layout-inicio/assets/img/down-arrow-dark.svg"
                                                            alt="down-arrow" class="arrow ms-1" />
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                                href="/user/profile">
                                                                <div class="d-flex py-1">
                                                                    <div class="my-auto">
                                                                        <img src="/admin-layout/assets/img/team-2.jpg"
                                                                            class="avatar avatar-sm me-3">
                                                                    </div>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <h6 class="text-sm font-weight-normal mb-1">
                                                                            <span class="font-weight-bold">Perfil</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <a class="dropdown-item border-radius-md"
                                                                href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                                <div class="d-flex py-1">
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <h6 class="text-sm font-weight-normal mb-1">
                                                                            <span class="font-weight-bold">Cerrar
                                                                                sesión</span>
                                                                        </h6>
                                                                        <form id="logout-form"
                                                                            action="{{ route('logout') }}" method="POST"
                                                                            class="d-none">
                                                                            @csrf
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            @else
                                                <a class="btn btn-sm bg-gradient-primary btn-round mb-0 me-1 mt-2 mt-md-0"
                                                    href="/iniciar-sesion">
                                                    <i class="fa fa-user me-sm-1"></i>
                                                    <span>Iniciar sesión</span>
                                                </a>
                                            @endauth
                                        @endif
                                    </li>





                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>







        <header class="header-2">
            {{ $header }}
        </header>

        {{ $slot }}

        <footer class="footer pt-5 mt-5">
            <hr class="horizontal dark mb-5">
            <div class="container">
                <div class=" row">
                    <div class="col-md-3 mb-4 ms-auto">
                        <div>
                            <h6 class="text-gradient text-primary font-weight-bolder">Inventores Shop</h6>
                        </div>
                        <div>
                            <h6 class="mt-3 mb-2 opacity-8">Búscanos en nuestras redes sociales</h6>
                            <ul class="d-flex flex-row ms-n3 nav">
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.facebook.com/" target="_blank">
                                        <i class="fab fa-facebook text-lg opacity-8"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://twitter.com/" target="_blank">
                                        <i class="fab fa-twitter text-lg opacity-8"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.youtube.com/" target="_blank">
                                        <i class="fab fa-youtube text-lg opacity-8"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text-center">
                            <p class="my-4 text-sm">
                                Todos los derechos reservados. Copyright ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Inventores Shop Que nada te detenga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!--   Core JS Files   -->
        <script src="layout-inicio/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="layout-inicio/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <script src="layout-inicio/assets/js/plugins/perfect-scrollbar.min.js"></script>


        <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
        <script src="layout-inicio/assets/js/plugins/countup.min.js"></script>


        <script src="layout-inicio/assets/js/plugins/choices.min.js"></script>


        <script src="layout-inicio/assets/js/plugins/prism.min.js"></script>
        <script src="layout-inicio/assets/js/plugins/highlight.min.js"></script>


        <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
        <script src="layout-inicio/assets/js/plugins/rellax.min.js"></script>
        <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
        <script src="layout-inicio/assets/js/plugins/tilt.min.js"></script>
        <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
        <script src="layout-inicio/assets/js/plugins/choices.min.js"></script>

        <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
        <script src="layout-inicio/assets/js/plugins/parallax.min.js"></script>


        <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
        <!--  Google Maps Plugin    -->

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
        <script src="layout-inicio/assets/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script>


        <script type="text/javascript">
            if (document.getElementById('state1')) {
                const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
                if (!countUp.error) {
                    countUp.start();
                } else {
                    console.error(countUp.error);
                }
            }
            if (document.getElementById('state2')) {
                const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
                if (!countUp1.error) {
                    countUp1.start();
                } else {
                    console.error(countUp1.error);
                }
            }
            if (document.getElementById('state3')) {
                const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
                if (!countUp2.error) {
                    countUp2.start();
                } else {
                    console.error(countUp2.error);
                };
            }
        </script>

    </body>

    </html>

</div>
