
    <h1>Crear Alquiler</h1>
    <form action="{{ route('alquileres.store') }}" method="POST">
        @csrf

       <label>cliente</label>
           <label>Cliente</label>
    <select name="user_id" >
        <option value="">-- Selecciona una opcion --</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" @selected(old('user_id') == $user->id)>{{ $user->name }}</option>
        @endforeach
    </select>
    <br/><br/>


        @error('user_id')
            <div class="error">{{ $message }}</div>
        @enderror

      
        <br/><br/>

    <label>Pelicula</label>
    <select name="pelicula_id" >
        <option value="">-- Selecciona una opcion --</option>
        @foreach ($peliculas as $pelicula)
            <option value="{{ $pelicula->id }}" @selected(old('pelicula_id') == $pelicula->id)>{{ $pelicula->nombre }}</option>
        @endforeach
    </select>
    @error('pelicula')
        <div class="error">{{ $message }}</div>
    @enderror

    <br/><br/>
        <label>Fecha alquiler</label>
  <input type="date" name="fecha_alquiler" />

  @error('fecha_alquiler')
      <div class="error">{{ $message }}</div>
  @enderror
    <label>fecha devolución</label>
    <input type="date" name="fecha_devolucion"/>

    @error('fecha_devolucion')
        <div class="error">{{ $message }}</div>
    @enderror
    <br/><br/>

     <input type="text" name="notas" placeholder="Notas adicionales"/> @error('notas') <div class="error">{{ $message }}</div> @enderror <br/><br/>

        <button type="submit">Enviar</button>
    </form>
   
    <a href="{{ route('alquileres.index') }}">Volver</a>

