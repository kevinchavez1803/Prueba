<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Agregar Estudiante</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="contenedor">
<h1>Registrar Estudiante</h1>
<nav>
<a href="index.php">Agregar</a>
<a href="index.php?accion=eliminar">Eliminar</a>
<a href="index.php?accion=editar">Editar</a>
<a href="index.php?accion=listar">Listar</a>
</nav>
<form method="POST">
<label>Nombre</label>
<input type="text" name="nombre" required>
<label>Carrera</label>
<input type="text" name="carrera" required>
<label>Edad</label>
<input type="number" name="edad" required>
<input type="submit" name="guardar" value="Guardar">
</form>
</div>
</body>
</html>