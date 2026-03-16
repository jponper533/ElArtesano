<h1>Editar Alquiler</h1>
    <form action="{{ route('alquileres.update', $alquiler->id) }}" method="POST">
        @csrf
        @method('PUT')

    <label>Usuario</label>
    <input type="text" name="user_id" value="{{ $alquiler->user->name ?? '' }}" />

    <br /><br />

    @error('user_id')
    <div class="error">{{ $message }}</div>
    @enderror
    
    <label>Pelicula</label>
    <input type="text" name="pelicula_id" value="{{ $alquiler->pelicula->nombre ?? '' }}" />
    <br /><br />

    @error('pelicula_id')
    <div class="error">{{ $message }}</div>
    @enderror
    <label>Fecha alquiler</label>
    <input type="date" name="fecha_alquiler" value="{{ $alquiler->fecha_alquiler }}" />

    @error('fecha_alquiler')
    <div class="error">{{ $message }}</div>
    @enderror
    <label>fecha devolución</label>
    <input type="date" name="fecha_devolucion" value="{{ $alquiler->fecha_devolucion }}" />

    @error('fecha_devolucion')
    <div class="error">{{ $message }}</div>
    @enderror
    <input type="text" name="notas" placeholder="Notas adicionales" value="{{ $alquiler->notas }}" /> @error('notas') <div class="error">{{ $message }}</div> @enderror <br /><br />
    <br /><br />

    <button type="submit">Enviar</button>

    <br /><br />

</form>

<a href="{{ route('alquileres.index') }}">Volver</a>