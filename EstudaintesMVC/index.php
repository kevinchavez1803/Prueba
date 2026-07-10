<?php


require_once "controllers/EstudianteController.php";

$controlador = new EstudianteController();

$accion = isset($_GET["accion"])
           ? $_GET["accion"]
           : "agregar";

switch($accion){

    case "eliminar":

        $controlador->eliminar();

    break;

    case "listar":

        $controlador->listar();

    break;

    case "editar":

        $controlador->editar();

    break;

    default:

        $controlador->agregar();

    break;

}


?>