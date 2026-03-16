@if (!empty($proyectos))
    <ul>
        @foreach ($proyectos as $proyecto)
            <li>
                {{ $proyecto->codigo }} -
                {{ $proyecto->descripcion ?? '' }} -
                {{ $proyecto->usuario->name ?? '' }} -
                <a href="{{ route('proyectos.show', $proyecto) }}">Ver</a> -
                <a href="{{ route('proyectos.edit', $proyecto) }}">Editar</a> -
                <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button>Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>No hay proyectos</p>
@endif