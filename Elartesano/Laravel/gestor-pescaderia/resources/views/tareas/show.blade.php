<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ver Tarea</h1>

    <label>Titulo</label>
    <input type="text" name="titulo" value="{{ $tarea->titulo }}" disabled/>

    <br/><br/>

    <label>Usuario</label>
    <select name="usuario_id" disabled>
        <option value="">-- Selecciona una opcion --</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" @selected($tarea->usuario_id == $user->id)>{{ $user->name }}</option>
        @endforeach
    </select>

    <br/><br/>

    <label>Proyecto</label>
    <select name="proyecto_id" disabled>
        <option value="">-- Selecciona una opcion --</option>
        @foreach ($proyectos as $proyecto)
            <option value="{{ $proyecto->id }}" @selected($tarea->proyecto_id == $proyecto->id)>{{ $proyecto->codigo }}</option>
        @endforeach
    </select>

    <br/><br/>

    <label>Tipo Tarea</label>
    <select name="tipo_tarea_id" disabled>
        <option value="">-- Selecciona una opcion --</option>
        @foreach ($tiposTareas as $tipoTarea)
            <option value="{{ $tipoTarea->id }}" @selected($tarea->tipo_tarea_id == $tipoTarea->id)>{{ $tipoTarea->nombre }}</option>
        @endforeach
    </select>

    <br/><br/>

    <label>Tipo Estado</label>
    <select name="tipo_estado_id" disabled>
        <option value="">-- Selecciona una opcion --</option>
        @foreach ($tiposEstados as $tipoEstado)
            <option value="{{ $tipoEstado->id }}" @selected($tarea->tipo_estado_id == $tipoEstado->id)>{{ $tipoEstado->nombre }}</option>
        @endforeach
    </select>

    <br/><br/>


    <a href="{{ route('tareas.index') }}">Volver</a>

</body>
</html>