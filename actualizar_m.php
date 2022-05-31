<?php

require_once dirname(__DIR__) . '/estudiantes_app/db/conexion_db.php';
require_once dirname(__DIR__) . '/estudiantes_app/controllers/m_controller.php';

require_once dirname(__DIR__) . '/estudiantes_app/models/materias.php';
require_once dirname(__DIR__) . '/estudiantes_app/controllers/Materias_controller.php';

use controllers\MateriaController;
use models\Materia;

$materiaController = new materiaController();

$materia = new Materia();
$materia->set('codigo',$_POST['codigoInput']);
$materia->set('nombres',$_POST['nombresInput']);
$materia->set('id',$_POST['idInput']);

$resultado = $materiaController->update($_POST['idInput'],$materia);

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
                echo '<a href="from_materias.php?idE' . $materia->get('id'). '">Volver</a>';
            }
        ?>
    </body>
</html>



