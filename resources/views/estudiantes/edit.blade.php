<!DOCTYPE html>
<html>
<head><title>Editar Estudiante</title></head>
<body>

    <nav style="background:#333; padding:10px 20px; margin-bottom:20px">
    <a href="{{ route('cursos.index') }}" style="color:white; margin-right:20px; text-decoration:none">📚 Cursos</a>
    <a href="{{ route('estudiantes.index') }}" style="color:white; margin-right:20px; text-decoration:none">👨‍🎓 Estudiantes</a>
    <a href="{{ route('inscripciones.index') }}" style="color:white; text-decoration:none">📝 Inscripciones</a>
    </nav>

    <h1>Editar Estudiante</h1>
    <a href="{{ route('estudiantes.index') }}">← Volver</a>
    <br><br>

    @if($errors->any())
        <ul style="color:red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ $estudiante->nombre }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $estudiante->email }}" required><br><br>

        <label>Teléfono:</label><br>
        <input type="text" name="telefono" value="{{ $estudiante->telefono }}"><br><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>