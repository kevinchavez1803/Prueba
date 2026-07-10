<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Eliminar Estudiante</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="contenedor">
<h1>Eliminar Estudiante</h1>
<nav>
<a href="index.php">Agregar</a>
<a href="index.php?accion=eliminar">Eliminar</a>
<a href="index.php?accion=editar">Editar</a>
<a href="index.php?accion=listar">Listar</a>
</nav>
<form method="POST">
<label>ID del estudiante</label>
<input type="number" name="id" required>
<input type="submit" name="eliminar" value="Eliminar">
</form>
</div>
</body>
</html>