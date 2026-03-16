<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Crear Proyecto</h1>
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf

        <label>Codigo</label>
        <input type="text" name="codigo"/>

        @error('codigo')
            <div class="error">{{ $message }}</div>
        @enderror

        <br/><br/>

        <label>Descripcion</label>
        <input type="text" name="descripcion"/>

        @error('descripcion')
            <div class="error">{{ $message }}</div>
        @enderror

        <br/><br/>

        <label>Usuario</label>
        <select name="usuario_id">
            <option value="">-- Selecciona una opcion --</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        @error('usuario_id')
            <div class="error">{{ $message }}</div>
        @enderror

        <br/><br/>

        <button type="submit">Enviar</button>

        <br/><br/>

    </form>

    <a href="{{ route('proyectos.index') }}">Volver</a>

</body>
</html>