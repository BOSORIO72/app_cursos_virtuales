<!DOCTYPE html>
<html>
<head><title>Detalle Curso</title></head>
<body>
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