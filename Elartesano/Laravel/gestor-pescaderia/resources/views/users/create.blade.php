<h1>Crear Usuario</h1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label>Nombre</label>
    <input type="text" name="name" />

    @error('name')
    <div class="error">{{ $message }}</div>
    @enderror
    <br /><br /> <label>Email</label> <input type="text" name="email" /> @error('email') <div class="error">{{ $message }}</div> @enderror <br /><br />

    <label>Password</label> <input type="password" name="password" /> @error('password') <div class="error">{{ $message }}</div> @enderror <br /><br />

      <label>Rol</label>

      <select name="role_id">
       
      <options value="">-- Selecciona una opcion --</options>
      @foreach ($roles as $role)
          <option value="{{ $role->id }}" @selected(old('role_id') == $role->id)>{{ $role->nombre }}</option>
      @endforeach

      </select>

    @error('role_id')
    <div class="error">{{ $message }}</div>
    @enderror
    <br /><br />

    <button type="submit">Enviar</button>


</form>

<a href="{{ route('users.index') }}">Volver</a>