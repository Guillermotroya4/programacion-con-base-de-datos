<?php

class tarea{
    private $id;
    private $nombre;
    private $fecha_finalizacion;

    public function __construct($id, $nombre, $fecha_finalizacion){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fecha_finalizacion = $fecha_finalizacion;

    }

    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getFechaFinalizacion(){
        return $this->fecha_finalizacion;
    }


}