<!DOCTYPE html>
<html>
<head><title>Nuevo Curso</title></head>
<body>

    <nav style="background:#333; padding:10px 20px; margin-bottom:20px">
    <a href="{{ route('cursos.index') }}" style="color:white; margin-right:20px; text-decoration:none">📚 Cursos</a>
    <a href="{{ route('estudiantes.index') }}" style="color:white; margin-right:20px; text-decoration:none">👨‍🎓 Estudiantes</a>
    <a href="{{ route('inscripciones.index') }}" style="color:white; text-decoration:none">📝 Inscripciones</a>
    </nav>

    <h1>Crear Nuevo Curso</h1>
    <a href="{{ route('cursos.index') }}">← Volver</a>
    <br><br>

    @if($errors->any())
        <ul style="color:red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion" rows="3"></textarea><br><br>

        <label>Cupos disponibles:</label><br>
        <input type="number" name="cupos" min="1" required><br><br>

        <button type="submit">Guardar Curso</button>
    </form>
</body>
</html>