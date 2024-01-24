<x-admin-layout>
    <x-slot name="title">Listado de Categorías</x-slot>
    <x-slot name="breadcrumbs">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Inicio</a></li>';
        echo '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</li>';
        ?>
    </x-slot>
    <!-- Mensaje de éxito al elimnar categoría con sweetalert2 -->
    @if (session('categoria') == 'eliminada')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Categoría eliminada correctamente',
                showConfirmButton: true,
                timer: 3000
            })
        </script>
        @elseif (session('categoria') == 'creada')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Categoría creada correctamente',
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
                        <th class="text-secondary opacity-7"></th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold ps-3">{{ $categoria->id }}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">{{ $categoria->nombre }}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold"><a
                                        href="\categorias\{{ $categoria->id }}">Ver</a></span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold"><a
                                        href="\categorias\{{ $categoria->id }}/edit">Editar</a></span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href={{ route('categorias.create')}} class="btn btn-outline-secondary btn-sm w-20 m-4">Agregar Categoría Nueva</a>
        </div>
        
    </div>
</x-admin-layout>
