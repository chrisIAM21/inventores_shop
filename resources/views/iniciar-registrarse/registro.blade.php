<x-layout_inicio>
  <x-slot name="title">
      Registro
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
                  <h4 class="font-weight-bolder">Registro</h4>
                  <p class="mb-0">Completa el siguiente formulario para crear una cuenta</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                      @csrf

                      <x-validation-errors class="mb-4" />

                      <div class="mb-3">
                          <x-label for="name" value="{{ __('Nombre') }}" />
                          <x-input id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                      </div>

                      <div class="mb-3">
                          <x-label for="email" value="{{ __('Correo') }}" />
                          <x-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username" />
                      </div>

                      <div class="mb-3">
                          <x-label for="password" value="{{ __('Contraseña') }}" />
                          <x-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password" />
                      </div>

                      <div class="mb-3">
                          <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                          <x-input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password" />
                      </div>

                      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                          <div class="mb-3">
                              <x-label for="terms">
                                  <div class="flex items-center">
                                      <x-checkbox name="terms" id="terms" required />

                                      <div class="ml-2">
                                          {!! __('Acepto los :terms_of_service y :privacy_policy', [
                                                  'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Términos de Servicio').'</a>',
                                                  'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Política de Privacidad').'</a>',
                                          ]) !!}
                                      </div>
                                  </div>
                              </x-label>
                          </div>
                      @endif

                      <div class="flex items-center justify-end mt-4">
                          <x-button class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                              {{ __('Registrar') }}
                          </x-button>
                      </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Ya tienes una cuenta?
                    <a href="/iniciar-sesion" class="text-primary text-gradient font-weight-bold">Inicia sesión</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                <img src="layout-inicio/assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
                <div class="position-relative">
                  <img class="max-width-500 w-100 position-relative z-index-2" src="my-layout/assets/img/Logo_inventores_shop_1.png">
                </div>
                <h4 class="mt-5 text-white font-weight-bolder">Descubre Inventores Shop!</h4>
                <p class="text-white">Vive la mejor experiencia de compra en Inventores Shop.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</x-layout_inicio>
