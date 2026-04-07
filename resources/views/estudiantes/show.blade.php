<!DOCTYPE html>
<html>
<head><title>Detalle Estudiante</title></head>
<body>
    <h1>{{ $estudiante->nombre }}</h1>
    <a href="{{ route('estudiantes.index') }}">← Volver</a>
    <br><br>

    <p><strong>Email:</strong> {{ $estudiante->email }}</p>
    <p><strong>Teléfono:</strong> {{ $estudiante->telefono ?? 'N/A' }}</p>

    <h2>Cursos en los que está inscrito</h2>
    <ul>
        @forelse($estudiante->cursos as $curso)
            <li>{{ $curso->nombre }} — Cupos disponibles: {{ $curso->cuposDisponibles() }}</li>
        @empty
            <li>No está inscrito en ningún curso.</li>
        @endforelse
    </ul>
</body>
</html>