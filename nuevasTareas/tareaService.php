<?php
require_once 'tarea.php';


function conexionBD(){
    $host = 'localhost';
    $basededatos = '2daw';
    $usuario = 'root';
    $password = '';

    $conexion = new mysqli($host, $usuario, $password, $basededatos);

    if($conexion->connect_error){
        die("todo ha ido mal");
    }

    return $conexion;
}


function obtenerTareas(){

    $conexion = conexionBD();



    $sql = "SELECT * FROM tareas";
    $resultado = $conexion->query($sql);

    $tareas = [];

    while($fila = $resultado->fetch_assoc()){
        $tareas[] = new Tarea($fila['id'],$fila['nombre'],$fila['fecha_finalizacion']);
    }

    $conexion->close();

    return $tareas;
}


function guardarTarea($nombre){
    $conexion = conexionBD();

    $sql = "INSERT INTO tareas (nombre) VALUES (?)";
    $queryFormateada = $conexion->prepare($sql);
    $queryFormateada->bind_param("s", $nombre);

    $todoBien = $queryFormateada->execute();

    $conexion->close();

    return $todoBien;

}

function actualizarTarea($tarea){

    $conexion = conexionBD();

    $sql = "UPDATE tareas SET nombre=? WHERE id=?";

    $queryFormateada = $conexion->prepare($sql);
    $queryFormateada->bind_param("si", $tarea->getNombre(), $tarea->getId());

    $todoBien = $queryFormateada->execute();

    $conexion->close();

    return $todoBien;
}
