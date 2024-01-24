<x-admin-layout>
    <x-slot name="title">Detalles de productos: {{ $producto->modelo }}</x-slot>
    <x-slot name="breadcrumbs">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Inicio</a></li>';
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/productos">Productos</a></li>';
        echo '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</li>';
        ?>
    </x-slot>
    <div class="card-body px-5 pt-2 pb-2">
        <h5>Marca: </h5>
        <h6>{{ $producto->marca }}</h6>
        <h5>Modelo: </h5>
        <h6>{{ $producto->modelo }}</h6>
        <h5>Color: </h5>
        <h6>{{ $producto->color }}</h6>
        <h5>En stock: </h5>
        <h6>{{ $producto->stock }}</h6>
        <hr>
        <h5>Categoría: </h5>
        @foreach($producto->categorias as $categoria)
            <h6>{{ $categoria->nombre }}</h6>
        @endforeach
        <a class="btn btn-white btn-sm w-20 mb-0" href="\productos\{{ $producto->id }}\edit">Editar producto</a>
        <br><br>
        <form action="{{ route('productos.destroy', $producto) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-white btn-sm w-20 mb-0" type="submit" style="color: red;">ELIMINAR
                PRODUCTO</button>
        </form>
</x-admin-layout>
