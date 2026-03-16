<h1>Detalles Alquiler</h1>


     <label>Usuario</label>
    <input type="text" name="user_id" value="{{ $alquiler->user->name ?? '' }}" disabled/>

    <br/><br/>

    <label>Pelicula</label>
<input type="text" name="pelicula_id" value="{{ $alquiler->pelicula->nombre ?? '' }}" disabled/>
    <br/><br/>

  <label>Fecha alquiler</label>
  <input type="date" name="fecha_alquiler" value="{{ $alquiler->fecha_alquiler }}" disabled/>

    <label>fecha devolución</label>
    <input type="date" name="fecha_devolucion" value="{{ $alquiler->fecha_devolucion }}" disabled/>

    <br/><br/>




    <a href="{{ route('alquileres.index') }}">Volver</a>
