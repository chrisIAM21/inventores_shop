<x-admin-layout>
    <x-slot name="title">Archivos</x-slot>
    <x-slot name="breadcrumbs">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        echo '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Inicio</a></li>';
        echo '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</li>';
        ?>
    </x-slot>
    <!-- Mensaje de éxito al subir un archivo -->
    @if (session('archivo') == 'subido')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Archivo(s) subido(s) correctamente',
                showConfirmButton: false,
                timer: 3000
            })
        </script>
        @elseif (session('archivo') == 'eliminado')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Archivo eliminado',
                showConfirmButton: false,
                timer: 3000
            })
        </script>
    @endif

    <div class="card-body px-5 pt-2 pb-2">
        <div class="table-responsive">

            <!-- Tabla para mostrar los archivos -->
            <table>
                <thead>
                    <tr>
                        <th class="w-10">Imagen</th>
                        <th class="w-15">Nombre</th>
                        <th class="w-7">Extensión</th>
                        <th class="w-10">Producto</th>
                        <th class="w-20">Enlazar</th>
                        <th class="w-10"></th>
                        <th class="w-20"></th>
                        <th class="w-8"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($archivos as $archivo)
                        <tr>
                            <td>
                                <img src="{{ Storage::url($archivo->hash) }}" alt="Imagen del archivo" height="70">
                            </td>
                            <td>{{ $archivo->nombre }}</td>
                            <td class="text-center">{{ $archivo->extension }}</td>
                            <td>
                                @if ($archivo->producto)
                                    {{ $archivo->producto->id }} | {{ $archivo->producto->modelo }}
                                @else
                                    Sin enlace
                                @endif
                            </td>
                            <td>
                                
                                    @if ($archivo->producto)
                                        <form action="{{ route('archivos.desenlazar', $archivo->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Desenlazar</button>
                                        </form>
                                    @else
                                        <form action="{{ route('archivos.relacionar', $archivo->id) }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <select name="producto_id" class="form-select w-90">
                                                    <option value="">Seleccionar producto</option>
                                                    @foreach ($productos as $producto)
                                                        <option value="{{ $producto->id }}">
                                                            {{ $producto->id }} | {{ $producto->modelo }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">Enlazar
                                                producto</button>
                                        </form>
                                    @endif
                                
                            <td>
                                <div class="form-group">
                                    <a href="{{ route('archivos.descargar', $archivo->id) }}"
                                        class="btn btn-success btn-sm">Descargar</a>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <form action="{{ route('archivos.reemplazar', $archivo->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input type="file" name="archivo" class="form-control w-80">
                                        </div>
                                        <button type="submit" class="btn btn-warning btn-sm">Reemplazar</button>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('archivos.destroy', $archivo->id) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <hr class="mt-3 mb-3">

        <!-- Botón para seleccionar archivo -->
        <form action="{{ route('archivos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="file" name="archivos[]" class="form-control w-50" multiple required>
                <span class="text-muted">Solo se pueden subir archivos con extensión .jpg, jpeg, .png y .pdf</span>
            </div>
            <button type="submit" class="btn btn-primary">Subir Archivos</button>
        </form>

    </div>

</x-admin-layout>
