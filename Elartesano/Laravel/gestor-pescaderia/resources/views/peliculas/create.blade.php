
    <h1>Crear Pelicula</h1>
    <form action="{{ route('peliculas.store') }}" method="POST">
        @csrf

        <label>Nombre</label>
        <input type="text" name="nombre"/>

        @error('nombre')
            <div class="error">{{ $message }}</div>
        @enderror

      
        <br/><br/>
        <label>genero</label>
        <input type="text" name="genero"/>

        @error('genero')
            <div class="error">{{ $message }}</div>
        @enderror

        <br/><br/>

        <label>precio</label>
        <input type="text" name="precio"/>

        @error('precio')
            <div class="error">{{ $message }}</div>
        @enderror

        <br/><br/>

        <button type="submit">Enviar</button>
    </form>

    <a href="{{ route('peliculas.index') }}">Volver</a>
