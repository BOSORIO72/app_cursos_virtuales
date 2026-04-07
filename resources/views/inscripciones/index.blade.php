<!DOCTYPE html>
<html>
<head><title>Inscripciones</title></head>
<body>
    <h1>Lista de Inscripciones</h1>
    <a href="{{ route('inscripciones.create') }}">Nueva Inscripción</a>
    <a href="{{ route('cursos.index') }}" style="margin-left:20px">Ver Cursos</a>
    <a href="{{ route('estudiantes.index') }}" style="margin-left:20px">Ver Estudiantes</a>
    <br><br>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>#</th>
            <th>Estudiante</th>
            <th>Curso</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        @forelse($inscripciones as $ins)
        <tr>
            <td>{{ $ins->id }}</td>
            <td>{{ $ins->estudiante->nombre }}</td>
            <td>{{ $ins->curso->nombre }}</td>
            <td>{{ $ins->created_at->format('d/m/Y') }}</td>
            <td>
                <form action="{{ route('inscripciones.destroy', $ins) }}" method="POST">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('¿Cancelar inscripción?')">Cancelar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="5">No hay inscripciones registradas.</td></tr>
        @endforelse
    </table>
</body>
</html>