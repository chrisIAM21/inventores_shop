<x-admin-layout>
    <x-slot name="title">Agregar productos</x-slot>
    <x-slot name="breadcrumbs">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Inicio</a></li>';
        echo '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</li>';
        ?>
    </x-slot>
    <div class="card-body px-5 pt-2 pb-2">
        <form action="\productos" method="POST">
            @csrf
            <label for="nombre">Nombre: </label>
            <input class="form-control w-30" type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                required maxlength="255"><br>
            @error('nombre')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
            <br>

            <label for="color">Color: </label>
            <input class="form-control w-30" type="text" name="color" id="color" value="{{ old('color') }}"
                required maxlength="40"><br>
            @error('color')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
            <br>

            <label for="stock">Stock disponible: </label>
            <input class="form-control w-30" type="number" name="stock" id="stock" value="{{ old('stock') }}"
                required min="0"><br>
            @error('stock')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
            <br>
            <!-- Mensaje de éxito con sweetalert2 -->
            @if (session('producto')=='creado')
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Producto creado correctamente',
                        showConfirmButton: false,
                        timer: 3000
                    })
                </script>
            @endif

            <button class="btn btn-outline-secondary btn-sm w-20 m-4">Guardar</button>
        </form>
    </div>
</x-admin-layout>
