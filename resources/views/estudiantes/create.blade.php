<!DOCTYPE html>
<html>
<head><title>Nuevo Estudiante</title></head>
<body>
    <h1>Registrar Estudiante</h1>
    <a href="{{ route('estudiantes.index') }}">← Volver</a>
    <br><br>

    @if($errors->any())
        <ul style="color:red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf

        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Teléfono (opcional):</label><br>
        <input type="text" name="telefono"><br><br>

        <button type="submit">Guardar Estudiante</button>
    </form>
</body>
</html>