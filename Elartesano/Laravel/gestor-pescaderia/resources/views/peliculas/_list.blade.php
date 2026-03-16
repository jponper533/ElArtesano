@if (!empty($peliculas))
    <ul>       
        @foreach ($peliculas as $pelicula)
            <li>
                {{ $pelicula->nombre }} -
                {{ $pelicula->genero }} -
                {{ $pelicula->precio }} -
                {{ $pelicula->tipoEstado->nombre ?? '' }} -
                <a href="{{ route('peliculas.show', $pelicula) }}">Ver</a> -
                <a href="{{ route('peliculas.edit', $pelicula) }}">Editar</a> -
                <form action="{{ route('peliculas.destroy', $pelicula) }}" method="POST" style="display: inline;">
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