<x-layout_inicio>
    <x-slot name="title">
        Catálogo de productos
    </x-slot>
    <x-slot name="header">
        <!-- Imagen de fondo -->
        <div class="page-header min-vh-50 relative"
            style="background-image: url('layout-inicio/assets/img/inicio/Slide_01.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);"> Siente la calidad de nuestros productos </h1>
                    </div>
                </div>
            </div>

            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
                    </g>
                </svg>
            </div>
        </div>
        <!-- Fin de la imagen de fondo -->
    </x-slot>

    <x-slot name="slot">
        <section class="my-5 py-5">
            <div class="container">
                <div class="row">

                    @foreach ($productos as $producto)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <!-- Mostrar archivo (imágenes) ligados al producto -->
                                <div id="carouselExampleControls{{ $producto->id }}" class="carousel slide"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($producto->archivos as $archivo)
                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                <img src="{{ Storage::url($archivo->hash) }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls{{ $producto->id }}"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Anterior</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls{{ $producto->id }}"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Siguiente</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <!-- Aquí puedes mostrar el nombre del productos y las categorías -->
                                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                                    <p class="card-text">
                                        @foreach ($producto->categorias as $categoria)
                                            <span class="badge bg-secondary">{{ $categoria->nombre }}</span>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 mx-auto">
                        {{-- Marcas de productos con logos --}}
                        {{-- <div class="text-center">
                            <h3 class="mt-5 mb-4">Contamos con las mejores marcas</h3>
                            <div class="row justify-content-center">
                                <div class="col-lg-2 col-4">
                                    <img src="layout-inicio/assets/img/inicio/Adidas-logo.png" class="img-fluid"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Adidas">
                                </div>
                                <div class="col-lg-2 col-4">
                                    <img src="layout-inicio/assets/img/inicio/nike_logo.png" class="img-fluid"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nike">
                                </div>
                                <div class="col-lg-2 col-4">
                                    <img src="layout-inicio/assets/img/inicio/Puma-Logo.png" class="img-fluid"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Puma">
                                </div>
                                <div class="col-lg-2 col-4">
                                    <img src="layout-inicio/assets/img/inicio/under_armour_logo.png" class="img-fluid"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Under Armour">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout_inicio>
