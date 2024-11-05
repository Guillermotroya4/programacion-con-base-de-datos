<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Primera</title>

<link rel="stylesheet type='text/css' href='estilos.css'">
</head>
<body>
<?php

require_once ('tareaService.php');


$tareas = obtenerTareas();

echo "<ul class='producto'>";
foreach ($tareas as $tarea) {
    echo "<li><a href='editarTarea.php?id={$tarea->getId()}'>{$tarea->getNombre()}</a></li>";
}

echo "</ul>";
?>

<a href="nuevaTarea.php">Nueva Tarea</a>
</body>
</html>

