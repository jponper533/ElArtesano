<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Crear Proyecto</h1>

    <label>Codigo</label>
    <input type="text" name="codigo" value="{{ $proyecto->codigo }}" disabled/>

    <br/><br/>

    <label>Descripcion</label>
    <input type="text" name="descripcion" value="{{ $proyecto->descripcion }}" disabled/>

    <br/><br/>

    <label>Usuario</label>
    <select name="usuario_id" disabled>
        <option value="">-- Selecciona una opcion --</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" @selected($proyecto->usuario_id == $user->id)>{{ $user->name }}</option>
        @endforeach
    </select>

    <br/><br/>

    <a href="{{ route('proyectos.index') }}">Volver</a>

</body>
</html>