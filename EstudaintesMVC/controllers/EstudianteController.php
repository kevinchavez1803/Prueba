<?php

require_once __DIR__."/../models/Estudiante.php";

class EstudianteController{

    public function agregar(){

        if(isset($_POST["guardar"])){

            $modelo=new Estudiante();

            $modelo->guardar(

                $_POST["nombre"],
                $_POST["carrera"],
                $_POST["edad"]

            );

            echo "<script>alert('Estudiante registrado correctamente');</script>";

        }

        require_once __DIR__."/../views/formulario.php";

    }

    public function eliminar(){

        if(isset($_POST["eliminar"])){

            $modelo=new Estudiante();

            $modelo->eliminar($_POST["id"]);

            echo "<script>alert('Estudiante eliminado');</script>";

        }

        require_once __DIR__."/../views/eliminar.php";

    }

    public function listar(){

    $modelo = new Estudiante();

    $estudiantes = $modelo->listar();

    require_once __DIR__."/../views/listar.php";

}



public function editar(){

    $modelo = new Estudiante();

    if(isset($_POST["buscar"])){

        $resultado = $modelo->buscar($_POST["id"]);

        $estudiante = $resultado->fetch_assoc();

        require_once __DIR__."/../views/editar.php";

    }
    elseif(isset($_POST["actualizar"])){

        $modelo->actualizar(

            $_POST["id"],
            $_POST["nombre"],
            $_POST["carrera"],
            $_POST["edad"]

        );

        echo "<script>
                alert('Estudiante actualizado');
                window.location='index.php?accion=listar';
              </script>";
    }
    else{

        require_once __DIR__."/../views/editar.php";

    }

}

}

?>