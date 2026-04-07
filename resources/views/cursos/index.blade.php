<!DOCTYPE html>
<html>
<head><title>Cursos</title></head>
<body>
    <h1>Lista de Cursos</h1>
    <a href="{{ route('cursos.create') }}">Nuevo Curso</a>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr><th>Nombre</th><th>Cupos</th><th>Disponibles</th><th>Acciones</th></tr>
        @foreach($cursos as $curso)
        <tr>
            <td>{{ $curso->nombre }}</td>
            <td>{{ $curso->cupos }}</td>
            <td>{{ $curso->cuposDisponibles() }}</td>
            <td>
                <a href="{{ route('cursos.edit', $curso) }}">Editar</a>
                <form action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('¿Eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>