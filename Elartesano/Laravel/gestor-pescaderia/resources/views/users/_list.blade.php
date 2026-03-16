<ul>
@foreach ($users as $user) <li> <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a> <a href="{{ route('users.edit', $user) }}">Editar</a> </li> @endforeach
</ul>