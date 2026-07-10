<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Modificar</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="contenedor">
<h1>Modificar Estudiante</h1>
<nav>
<a href="index.php">Agregar</a>
<a href="index.php?accion=eliminar">Eliminar</a>
<a href="index.php?accion=editar">Editar</a>
<a href="index.php?accion=listar">Listar</a>
</nav>
<?php
if(!isset($estudiante)){
?>
<form method="POST">
<label>ID del estudiante</label>
<input type="number"name="id"required>
<input type="submit"name="buscar"value="Buscar">
</form>
<?php
}
else{
?>
<form method="POST">
<input type="hidden"name="id"value="<?php echo $estudiante["id"]; ?>">
<label>Nombre</label>
<input type="text"name="nombre"value="<?php echo $estudiante["nombre"]; ?>"required>
<label>Carrera</label>
<input type="text"name="carrera"value="<?php echo $estudiante["carrera"]; ?>"required>
<label>Edad</label>
<input type="number"name="edad"value="<?php echo $estudiante["edad"]; ?>"required>
<input type="submit"name="actualizar"value="Actualizar">
</form>
<?php
}
?>
</div>
</body>
</html>