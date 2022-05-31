<?php

require_once dirname(__DIR__) . '/estudiantes_app/db/conexion_db.php';
require_once dirname(__DIR__) . '/estudiantes_app/controllers/m_controller.php';

require_once dirname(__DIR__) . '/estudiantes_app/models/materia.php';
require_once dirname(__DIR__) . '/estudiantes_app/controllers/Materias_controller.php';

use controllers\MateriaController;
use models\Materia;

$estudianteController = new MateriaController();

$estudiante = new Materia();
$estudiante->set('codigo',$_POST['codigoInput']);
$estudiante->set('nombres',$_POST['nombresInput']);

$resultado = $materiaController->create($materia);

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
                echo '<p>Registro exitoso</p>';
                echo '<br>';
                echo '<a href="index.php">Volver a la lista</a>';
            } else {
                echo '<p>Se presento un error alguardar los datos.Vuelva a intentar.</p>';
                echo '<br>';
                echo '<a href="from_materias.php">Volver</a>';
            }
        ?>
    </body>
</html>
