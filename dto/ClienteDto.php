<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteDto
 *
 * @author cetecom
 */
class ClienteDto {
    
    private $rut;
    private $nombre;
    private $fecha_nacimiento;
    
    function __construct() {
        $this->rut="";
        $this->nombre="";
        $this->fecha_nacimiento="";
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }


    public function __toString() {
        return "Rut: ".$this->rut. " Nombre: ".$this->nombre. " Fecha Nacimiento: ".$this->fecha_nacimiento;
    }
}
