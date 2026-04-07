<!DOCTYPE html>
<html>
<head><title>Detalle Curso</title></head>
<body>

    <nav style="background:#333; padding:10px 20px; margin-bottom:20px">
    <a href="{{ route('cursos.index') }}" style="color:white; margin-right:20px; text-decoration:none">📚 Cursos</a>
    <a href="{{ route('estudiantes.index') }}" style="color:white; margin-right:20px; text-decoration:none">👨‍🎓 Estudiantes</a>
    <a href="{{ route('inscripciones.index') }}" style="color:white; text-decoration:none">📝 Inscripciones</a>
    </nav>

    <h1>{{ $curso->nombre }}</h1>
    <a href="{{ route('cursos.index') }}">← Volver</a>
    <br><br>
    <p><strong>Descripción:</strong> {{ $curso->descripcion }}</p>
    <p><strong>Cupos totales:</strong> {{ $curso->cupos }}</p>
    <p><strong>Cupos disponibles:</strong> {{ $curso->cuposDisponibles() }}</p>

    <h2>Estudiantes inscritos</h2>
    <ul>
        @forelse($curso->estudiantes as $est)
            <li>{{ $est->nombre }} — {{ $est->email }}</li>
        @empty
            <li>No hay estudiantes inscritos aún.</li>
        @endforelse
    </ul>
</body>
</html>