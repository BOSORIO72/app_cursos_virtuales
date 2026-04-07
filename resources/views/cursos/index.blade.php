<!DOCTYPE html>
<html>
<head><title>Cursos</title></head>
<body>


    <nav style="background:#333; padding:10px 20px; margin-bottom:20px">
    <a href="{{ route('cursos.index') }}" style="color:white; margin-right:20px; text-decoration:none">📚 Cursos</a>
    <a href="{{ route('estudiantes.index') }}" style="color:white; margin-right:20px; text-decoration:none">👨‍🎓 Estudiantes</a>
    <a href="{{ route('inscripciones.index') }}" style="color:white; text-decoration:none">📝 Inscripciones</a>
    </nav>

    <h1>Lista de Cursos</h1>
    <a href="{{ route('cursos.create') }}">Nuevo Curso</a>
    <br><br>
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
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