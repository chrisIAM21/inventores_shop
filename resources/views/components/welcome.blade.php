<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bienvenido!
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        En el menú superior podrás dirigirte a la lista de productos
        @auth
            @can('admin')
            , así como editarlos, agregar más, entre otras opciones...
            @endcan
        @endauth
         <br>También podrás ver tu perfil, y editar tu información personal.
    </p>
</div>

