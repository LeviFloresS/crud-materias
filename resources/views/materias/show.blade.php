<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Materia</title>
</head>
<body>
    <h1>Detalle de la Materia</h1>
    <a href="{{ route('materias.index') }}">Volver al listado</a>

    <p><strong>ID:</strong> {{ $materia->id }}</p>
    <p><strong>Nombre:</strong> {{ $materia->nombre }}</p>
    <p><strong>Créditos:</strong> {{ $materia->creditos }}</p>
    <p><strong>Profesor:</strong> {{ $materia->profesor }}</p>
    <p><strong>Creado el:</strong> {{ $materia->created_at }}</p>
    <p><strong>Actualizado el:</strong> {{ $materia->updated_at }}</p>
</body>
</html>