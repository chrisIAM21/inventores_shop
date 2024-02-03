<x-layout_inicio>
  <x-slot name="title">
      Iniciar sesión
  </x-slot>
  <x-slot name="header">
  </x-slot>
  <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                  <h4 class="font-weight-bolder">Iniciar Sesión</h4>
                  <p class="mb-0">Introduce tu correo y contraseña para iniciar sesión</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <x-validation-errors class="mb-4" />

                      @if (session('status'))
                          <div class="mb-4 font-medium text-sm text-green-600">
                              {{ session('status') }}
                          </div>
                      @endif

                      <div class="mb-3">
                          <x-label for="email" value="{{ __('Correo') }}" />
                          <x-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                      </div>

                      <div class="mb-3">
                          <x-label for="password" value="{{ __('Contraseña') }}" />
                          <x-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
                      </div>

                      <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                          <label class="form-check-label" for="rememberMe">{{ __('Recuérdame') }}</label>
                      </div>

                      <div class="text-center">
                          <x-button class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">{{ __('Iniciar sesión') }}</x-button>
                      </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    {{ __('Aún no tienes una cuenta?') }}
                    <a href="/registro" class="text-primary text-gradient font-weight-bold">{{ __('Regístrate') }}</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                <img src="layout-inicio/assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
                <div class="position-relative">
                  <img class="max-width-500 w-100 position-relative z-index-2" src="my-layout/assets/img/Logo_inventores_shop_2.png">
                </div>
                <h4 class="mt-5 text-white font-weight-bolder">Descubre Inventores Shop!</h4>
                <p class="text-white">Vive la mejor experiencia de compra en Inventores Shop</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</x-layout_inicio>