<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Editar Película</h1>
    <form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $pelicula->nombre }}" />

        @error('nombre')
        <div class="error">{{ $message }}</div>
        @enderror

        <br /><br />


        <label>Genero</label>
        <input type="text" name="genero" value="{{ $pelicula->genero }}" />
        @error('genero')
        <div class="error">{{ $message }}</div>
        @enderror


        <label>Precio</label>
        <input type="text" name="precio" value="{{ $pelicula->precio }}" />
        @error('precio')
        <div class="error">{{ $message }}</div>
        @enderror

        <br /><br />

        <button type="submit">Enviar</button>

        <br /><br />

    </form>

    <a href="{{ route('peliculas.index') }}">Volver</a>

</body>

</html>