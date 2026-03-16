<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Detalles Pelicula</h1>

    <label>Nombre</label>
    <input type="text" name="nombre" value="{{ $pelicula->nombre }}" disabled/>

    <br/><br/>

    <label>genero</label>
    <input type="text" name="genero" value="{{ $pelicula->genero }}" disabled/> 

    <br/><br/>



    <label>Precio</label>
    <input type="text" name="precio" value="{{ $pelicula->precio }}" disabled/>

    <br/><br/>




    <a href="{{ route('peliculas.index') }}">Volver</a>

</body>
</html>