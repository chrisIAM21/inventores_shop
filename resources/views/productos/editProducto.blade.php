<x-admin-layout>
    <x-slot name="title">Editar producto: {{ $producto->modelo }}</x-slot>
    <x-slot name="breadcrumbs">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Inicio</a></li>';
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/productos">Productos</a></li>';
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/productos/' . $producto->id . '">' . $producto->id . '</a></li>';
        echo '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</li>';
        ?>
    </x-slot>
    <div class="card-body px-5 pt-2 pb-2">
        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PATCH')
            <label for="marca">Marca: </label>
            <input class="form-control w-30" type="text" name="marca" id="marca"
                value="{{ old('marca') ?? $producto->marca }}"><br>
            @error('marca')
                <h4>*{{ $message }}</h4>
            @enderror
            <br>
            <label for="modelo">Modelo: </label>
            <input class="form-control w-30" type="text" name="modelo" id="modelo"
                value="{{ old('modelo') ?? $producto->modelo }}"><br>
            @error('modelo')
                <h4>*{{ $message }}</h4>
            @enderror
            <br>
            <label for="color">Color: </label>
            <input class="form-control w-30" type="text" name="color" id="color"
                value="{{ old('color') ?? $producto->color }}"><br>
            @error('color')
                <h4>*{{ $message }}</h4>
            @enderror
            <br>
            <label for="stock">Stock disponible: </label>
            <input class="form-control w-30" type="number" name="stock" id="stock"
                value="{{ old('stock') ?? $producto->stock }}"><br>
            @error('stock')
                <h4>*{{ $message }}</h4>
            @enderror
            <br>

            <label for="categorias">Categorías:</label>
            @foreach ($categorias as $categoria)
                <div>
                    <input type="checkbox" name="categorias[]" value="{{ $categoria->id }}"
                        {{ $producto->categorias->contains($categoria->id) ? 'checked' : '' }}>
                    <label>{{ $categoria->nombre }}</label>
                </div>
            @endforeach



            <!-- Mensaje de éxito con sweetalert2 -->
            @if (session('producto') == 'editado')
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Producto editado correctamente',
                        showConfirmButton: false,
                        timer: 3000
                    })
                </script>
            @endif
            <button class="btn btn-white btn-sm w-20 mb-0">Guardar cambios</button>

        </form>
        <br><br>
        <form action="{{ route('productos.destroy', $producto) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-white btn-sm w-20 mb-0" type="submit" style="color: red;">ELIMINAR PRODUCTO</button>
        </form>
    </div>
</x-admin-layout>
