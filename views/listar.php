<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Listado</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="contenedor">
<h1>Listado de Estudiantes</h1>
<nav>
<a href="index.php">Agregar</a>
<a href="index.php?accion=eliminar">Eliminar</a>
<a href="index.php?accion=editar">Editar</a>
<a href="index.php?accion=listar">Listar</a>
</nav>
<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Carrera</th>
<th>Edad</th>
</tr>
<?php
while($fila = $estudiantes->fetch_assoc()){
?>
<tr>
<td><?php echo $fila["id"]; ?></td>
<td><?php echo $fila["nombre"]; ?></td>
<td><?php echo $fila["carrera"]; ?></td>
<td><?php echo $fila["edad"]; ?></td>
</tr>
<?php
}
?>
</table>
</div>
</body>
</html>