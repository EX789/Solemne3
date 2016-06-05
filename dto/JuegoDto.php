<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JuegoDto
 *
 * @author cetecom
 */
class JuegoDto {
    
    private $codigo;
    private $nombre;
    private $restriccion;
    private $valor;
    
    function __construct() {
        $this->codigo="";
        $this->nombre="";
        $this->restriccion=false;
        $this->valor=0;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getRestriccion() {
        return $this->restriccion;
    }

    function getValor() {
        return $this->valor;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setRestriccion($restriccion) {
        $this->restriccion = $restriccion;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    public function __toString() {
        return "Codigo: ". $this->codigo. " Nombre: ".$this->nombre. "Restriccion: ". $this->restriccion.
            " Valor: ".$this->valor;
    }
}
