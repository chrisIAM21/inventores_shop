<x-admin-layout>
    <x-slot name="title">Categoría: {{ $categoria->nombre }}</x-slot>
    <x-slot name="breadcrumbs">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Inicio</a></li>';
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/categorias">Categorias</a></li>';
        echo '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</li>';
        ?>
    </x-slot>
    <div class="card-body px-5 pt-2 pb-2">

        @if (session('categoria') == 'editada')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Categoría editada correctamente',
                showConfirmButton: false,
                timer: 3000
            })
        </script>
        @endif

        <form method="POST" action="{{ route('categorias.agregarProductos', $categoria) }}">
            @csrf
            <label for="producto_id">Agregar producto a la categoría</label>
            <select name="producto_id" class="form-select w-40">
                @foreach ($productos as $producto)
                    @if (!$categoria->productos->contains($producto))
                        <option value="{{ $producto->id }}">
                            {{ $producto->id }} | {{ $producto->marca }} {{ $producto->modelo }}
                        </option>
                    @endif
                @endforeach
            </select>
            <br>
            <button class="btn btn-outline-secondary btn-sm w-10 mb-0" type="submit">Agregar</button>
        </form>

        <!-- Mostrar los productos que pertenecen a la categoría -->
        <h6>Productos que pertenecen a la categoría '{{ $categoria->nombre }}':</h6>
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Marca</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Modelo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categoria->productos as $producto)
                    <tr>
                        <td>
                            <span class="text-secondary text-xs font-weight-bold ps-3">{{ $producto->id }}</span>
                        </td>
                        <td>
                            <span class="text-secondary text-xs font-weight-bold">{{ $producto->marca }}</span>
                        </td>
                        <td>
                            <span class="text-secondary text-xs font-weight-bold">{{ $producto->modelo }}</span>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('categorias.quitarProductos', $categoria) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                <button class="btn btn-outline-secondary btn-sm w-50 mb-0" style="color: red;" type="submit">Quitar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <a class="btn btn-white btn-sm w-20 mb-0" href="\categorias\{{ $categoria->id }}\edit">Editar categoria</a>
        <br><br>
        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-white btn-sm w-20 mb-0" type="submit" style="color: red;">ELIMINAR CATEGORÍA</button>
        </form>

    </div>
</x-admin-layout>
