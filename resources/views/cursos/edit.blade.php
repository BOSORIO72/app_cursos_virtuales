<!DOCTYPE html>
<html>
<head><title>Editar Curso</title></head>
<body>

    <nav style="background:#333; padding:10px 20px; margin-bottom:20px">
    <a href="{{ route('cursos.index') }}" style="color:white; margin-right:20px; text-decoration:none">📚 Cursos</a>
    <a href="{{ route('estudiantes.index') }}" style="color:white; margin-right:20px; text-decoration:none">👨‍🎓 Estudiantes</a>
    <a href="{{ route('inscripciones.index') }}" style="color:white; text-decoration:none">📝 Inscripciones</a>
    </nav>

    <h1>Editar Curso</h1>
    <a href="{{ route('cursos.index') }}">← Volver</a>
    <br><br>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ $curso->nombre }}" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion" rows="3">{{ $curso->descripcion }}</textarea><br><br>

        <label>Cupos:</label><br>
        <input type="number" name="cupos" value="{{ $curso->cupos }}" min="1" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>