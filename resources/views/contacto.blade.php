<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>
    <form action="contacto" method="post">
        @csrf <!-- Es un token para decir que el usuario es seguro -->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required><br>
        @error('nombre')
            <h5>{{ $message }}</h5>
        @enderror
        <br>
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo">
        @error('codigo')
            <h5>{{ $message }}</h5>
        @enderror

        <input type="submit" value="Enviar">
    </form>
</body>
</html>