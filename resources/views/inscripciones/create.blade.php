<!DOCTYPE html>
<html>
<head><title>Nueva Inscripción</title></head>
<body>
    <h1>Inscribir Estudiante</h1>
    <a href="{{ route('inscripciones.index') }}">← Volver</a>
    <br><br>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    @if($errors->any())
        <ul style="color:red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('inscripciones.store') }}" method="POST">
        @csrf

        <label>Estudiante:</label><br>
        <select name="estudiante_id" required>
            <option value="">-- Selecciona un estudiante --</option>
            @foreach($estudiantes as $est)
                <option value="{{ $est->id }}">{{ $est->nombre }} ({{ $est->email }})</option>
            @endforeach
        </select>
        <br><br>

        <label>Curso:</label><br>
        <select name="curso_id" required>
            <option value="">-- Selecciona un curso --</option>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}">
                    {{ $curso->nombre }} — {{ $curso->cuposDisponibles() }} cupos disponibles
                </option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Inscribir</button>
    </form>
</body>
</html>