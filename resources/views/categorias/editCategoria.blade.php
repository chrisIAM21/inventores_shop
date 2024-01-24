<x-admin-layout>
    <x-slot name="title">Editar Categoria '{{ $categoria->nombre }}'</x-slot>
    <x-slot name="breadcrumbs">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Inicio</a></li>';
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/categorias">Categorias</a></li>';
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/categorias/' . $categoria->id . '">' . $categoria->id . '</a></li>';
        echo '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</li>';
        ?>
    </x-slot>
    <div class="card-body px-5 pt-2 pb-2">


        <form action="{{ route('categorias.update', $categoria) }}" method="POST">
            @csrf
            @method('PATCH')
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $categoria->nombre) }}"><br>
            @error('nombre')
                <h4>*{{$message}}</h4>
            @enderror
            <br>
            <button class="btn btn-outline-secondary btn-sm w-20 m-0">Guardar cambios</button>
        </form>

        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-white btn-sm w-20 mt-5" type="submit" style="color: red;">ELIMINAR CATEGORIA</button>
        </form>
    </div>
</x-admin-layout>