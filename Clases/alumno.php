<?php
    include "persona.php";
    class Alumno extends Persona{
    
        public $legajo;
        public $cuatrimestre;

       function __construct($nombre, $dni, $legajo, $cuatrimestre)
       {
            parent::__construct($nombre, $dni);
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->legajo = $legajo;
            $this->cuatrimestre = $cuatrimestre;
       }
        	
    }


?>