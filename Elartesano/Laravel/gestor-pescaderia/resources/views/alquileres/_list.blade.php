@if (!empty($alquileres))
    <ul>       
        @foreach ($alquileres as $alquiler)
            <li>
                {{ $alquiler->id }} -
                {{ $alquiler->pelicula->titulo }} -
                {{ $alquiler->usuario->name }} -
               {{ $alquiler->fecha_alquiler }} -
               {{ $alquiler->fecha_devolucion }} -
               <a href="{{ route('alquileres.show', $alquiler) }}">Ver</a> -
                <a href="{{ route('alquileres.edit', $alquiler) }}">Editar</a> -
                <form action="{{ route('alquileres.destroy', $alquiler) }}" method="POST" style="display: inline;">
                     @csrf
                    @method('DELETE')
                    <button>Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>No hay películas</p>
@endif