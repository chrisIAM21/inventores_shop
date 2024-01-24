<x-admin-layout>
    <x-slot name="title">Agregar Categoría</x-slot>
    <x-slot name="breadcrumbs">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Inicio</a></li>';
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/categorias">Categorias</a></li>';
        echo '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</li>';
        ?>
    </x-slot>
    <div class="card-body px-5 pt-2 pb-2">

        <form action="\categorias" method="POST" class="form-group">
            @csrf
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control w-30"><br>
            @error('nombre')
                <h4>*{{ $message }}</h4>
            @enderror
            <br>
            <button class="btn btn-outline-secondary btn-sm w-20 m-4">Guardar</button>
        </form>
    </div>
</x-admin-layout>
