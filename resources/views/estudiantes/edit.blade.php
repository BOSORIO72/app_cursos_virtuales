<!DOCTYPE html>
<html>
<head><title>Editar Estudiante</title></head>
<body>
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