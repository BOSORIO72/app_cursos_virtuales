<!DOCTYPE html>
<html>
<head><title>Estudiantes</title></head>
<body>
    <h1>Lista de Estudiantes</h1>
    <a href="{{ route('estudiantes.create') }}">Nuevo Estudiante</a>
    <a href="{{ route('cursos.index') }}" style="margin-left:20px">Ver Cursos</a>
    <br><br>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Cursos inscritos</th>
            <th>Acciones</th>
        </tr>
        @forelse($estudiantes as $est)
        <tr>
            <td>{{ $est->nombre }}</td>
            <td>{{ $est->email }}</td>
            <td>{{ $est->telefono ?? 'N/A' }}</td>
            <td>{{ $est->cursos->count() }}</td>
            <td>
                <a href="{{ route('estudiantes.show', $est) }}">Ver</a> |
                <a href="{{ route('estudiantes.edit', $est) }}">Editar</a> |
                <form action="{{ route('estudiantes.destroy', $est) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('¿Eliminar estudiante?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="5">No hay estudiantes registrados.</td></tr>
        @endforelse
    </table>
</body>
</html>