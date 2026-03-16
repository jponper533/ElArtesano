<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Crear Tarea</h1>
    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf

        <label>Titulo</label>
        <input type="text" name="titulo"/>

        @error('titulo')
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

        <label>Proyecto</label>
        <select name="proyecto_id">
            <option value="">-- Selecciona una opcion --</option>
            @foreach ($proyectos as $proyecto)
                <option value="{{ $proyecto->id }}">{{ $proyecto->codigo }}</option>
            @endforeach
        </select>

        @error('proyecto_id')
            <div class="error">{{ $message }}</div>
        @enderror

        <br/><br/>

        <label>Tipo Tarea</label>
        <select name="tipo_tarea_id">
            <option value="">-- Selecciona una opcion --</option>
            @foreach ($tiposTareas as $tipoTarea)
                <option value="{{ $tipoTarea->id }}">{{ $tipoTarea->nombre }}</option>
            @endforeach
        </select>

        @error('tipo_tarea_id')
            <div class="error">{{ $message }}</div>
        @enderror

        <br/><br/>

        <label>Tipo Estado</label>
        <select name="tipo_estado_id">
            <option value="">-- Selecciona una opcion --</option>
            @foreach ($tiposEstados as $tipoEstado)
                <option value="{{ $tipoEstado->id }}">{{ $tipoEstado->nombre }}</option>
            @endforeach
        </select>

        @error('tipo_estado_id')
            <div class="error">{{ $message }}</div>
        @enderror

        <br/><br/>

        <button type="submit">Enviar</button>

        <br/><br/>

    </form>

    <a href="{{ route('tareas.index') }}">Volver</a>

</body>
</html>