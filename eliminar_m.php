<?php

require_once dirname(__DIR__) . '/estudiantes_app/db/conexion_db.php';
require_once dirname(__DIR__) . '/estudiantes_app/controllers/m_controller.php';
require_once dirname(__DIR__) . '/estudiantes_app/models/materia.php';
require_once dirname(__DIR__) . '/estudiante_app/controllers/materias_controller.php';

use controllers\MateriaController;


$materiaController = new MateriaController();
$id = empty($_GET['idE']) ? 0 : $_GET['idE'];
$resultado = $materiaController->delete($id);
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
    if ($resultado) {
        echo '<p>Se elimino el registro.</p>';
    } else {
        echo '<p>Se presento un error al guardar los datos.Vuleva a intentar.</p>';
    }
    echo '<br>';
    echo '<a href=index.php">Volver a la lista<a/>';
    ?>
</body>

</html>