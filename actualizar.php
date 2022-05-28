<?php

require_once dirname(__DIR__) . '/estudiantes_app/db/conexion_db.php';
require_once dirname(__DIR__) . '/estudiantes_app/controllers/i_controller.php';

require_once dirname(__DIR__) . '/estudiantes_app/models/estudiante.php';
require_once dirname(__DIR__) . '/estudiantes_app/controllers/Estudiantes_controller.php';

use controllers\EstudianteController;
use models\Estudiante;

$estudianteController = new EstudianteController();

$estudiante = new Estudiante();
$estudiante->set('codigo',$_POST['codigoInput']);
$estudiante->set('nombres',$_POST['nombresInput']);
$estudiante->set('apellidos',$_POST['apellidosInput']);
$estudiante->set('edad',$_POST['edadInput']);
$estudiante->set('id',$_POST['idInput']);

$resultado = $estudainteController->uptade($_POST['idInput'],$estudiante);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
        <h1>Resultados de la operacion</h1>
        <?php
            if($resultado){
                echo '<p>Actualizacion exitosa</p>';
                echo '<br>';
                echo '<a href="index.php">Volver a la lista</a>';
            } else {
                echo '<p>Se presento un error al guardar los datos.Vuelva a intentar.</p>';
                echo '<br>';
                echo '<a href="from_estudiantes.php?idE' . $estudiante->get('id'). '">Volver</a>';
            }
        ?>
    </body>
</html>



