<x-admin-layout>
    <x-slot name="title">Listado de productos</x-slot>
    <x-slot name="breadcrumbs">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Inicio</a></li>';
        echo '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</li>';
        ?>
    </x-slot>
    <!-- Mensaje de éxito al elimnar producto con sweetalert2 -->
    @if (session('producto') == 'eliminado')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Producto eliminado correctamente',
                showConfirmButton: false,
                timer: 3000
            })
        </script>
    @endif

    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Nombre</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Color</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Stock</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Categorías</th>
                        <th class="text-secondary opacity-7"></th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold ps-3">{{ $producto->id }}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">{{ $producto->nombre }}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">{{ $producto->color }}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">{{ $producto->stock }}</span>
                            </td>
                            <td>
                                @if ($producto->categorias->count() > 0)
                                    <!-- "Si el producto tiene categorías" el count se refiere a la cantidad de categorías que tiene el producto -->
                                    @foreach ($producto->categorias as $categoria)
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ $categoria->nombre }},</span>
                                    @endforeach
                                @else
                                    <span class="text-secondary text-xs font-weight-bold">N/A</span>
                                @endif
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold"><a
                                        href="\productos\{{ $producto->id }}">Ver</a></span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold"><a
                                        href="\productos\{{ $producto->id }}/edit">Editar</a></span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href={{ route('productos.create') }} class="btn bg-gradient-dark w-20 my-4 m-5">Agregar Producto
            Nuevo</a>
            <!-- consulta JSON -->
        <a href={{ route('productos.consulta') }} class="btn btn-outline-secondary btn-sm w-20 m-4">Consultar Productos JSON</a>
    </div>

</x-admin-layout>
