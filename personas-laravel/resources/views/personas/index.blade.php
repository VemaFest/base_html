@extends('layouts.app')
@section('contenido')
<p><a href="{{ route('personas.create') }}">Crear persona</a></p>
<h1>Personas registradas</h1>
<table>
<thead><tr>
</tr></thead>
<tbody>
@forelse ($personas as $persona)
<tr>
<th>ID</th><th>DNI</th><th>Nombre</th><th>Nacimiento</th>
<td>{{ $persona->id }}</td>
<td>{{ $persona->dni }}</td>
<td>{{ $persona->nombre }}</td>
<td>{{ $persona->fecha_nacimiento->format('d/m/Y') }}</td>
<td>
    <a href="{{ route('personas.edit', $persona->id) }}">Editar</a>
    <form method="POST"
            action="{{ route('personas.destroy', $persona->id) }}"
            onsubmit="return confirm('¿Eliminar esta persona?');">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</td>
</tr>
@empty
<tr><td colspan="4">No hay personas registradas.</td></tr>
@endforelse
</tbody>
</table>
@endsection