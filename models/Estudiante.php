<?php

require_once __DIR__."/../config/conexion.php";

class Estudiante{

//Funcion guardar
    public function guardar($nombre,$carrera,$edad){

        global $conexion;

        $sql="INSERT INTO estudiantes(nombre,carrera,edad)
        VALUES('$nombre','$carrera','$edad')";

        return $conexion->query($sql);

    }

    //Funcion Eliminar

    public function eliminar($id){

        global $conexion;

        $sql="DELETE FROM estudiantes
              WHERE id='$id'";

        return $conexion->query($sql);

    }

    //Funcion listar


public function listar(){

    global $conexion;

    $sql = "SELECT * FROM estudiantes";

    return $conexion->query($sql);

}

//Funcion buscar

public function buscar($id){

    global $conexion;

    $sql = "SELECT * FROM estudiantes
            WHERE id='$id'";

    return $conexion->query($sql);

}

//Funcion actualizar

public function actualizar($id,$nombre,$carrera,$edad){

    global $conexion;

    $sql = "UPDATE estudiantes
            SET nombre='$nombre',
                carrera='$carrera',
                edad='$edad'
            WHERE id='$id'";

    return $conexion->query($sql);

}
}

?>