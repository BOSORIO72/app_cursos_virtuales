<!DOCTYPE html>
<html>
<head><title>Editar Curso</title></head>
<body>
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