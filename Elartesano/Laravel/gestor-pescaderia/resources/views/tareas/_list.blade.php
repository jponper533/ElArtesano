@if (!empty($tareas))
    <ul>       
        @foreach ($tareas as $tarea)
            <li>
                {{ $tarea->titulo }} -
                {{ $tarea->proyecto->codigo ?? '' }} -
                {{ $tarea->usuario->name ?? '' }} -
                {{ $tarea->tipoTarea->nombre ?? '' }} -
                {{ $tarea->tipoEstado->nombre ?? '' }} -
                <a href="{{ route('tareas.show', $tarea) }}">Ver</a> -
                <a href="{{ route('tareas.edit', $tarea) }}">Editar</a> -
                <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button>Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>No hay tareas</p>
@endif