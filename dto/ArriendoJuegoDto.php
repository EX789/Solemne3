<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArriendoJuegoDto
 *
 * @author cetecom
 */
class ArriendoJuegoDto {
    
    private $rut_cliente;
    private $codigo_juego;
    private $valor_arriendo;
    private $fecha_arriendo;
    
    function __construct() {
        $this->rut_cliente="";
        $this->codigo_juego="";
        $this->fecha_arriendo="";
        $this->valor_arriendo="";
    }

    function getRut_cliente() {
        return $this->rut_cliente;
    }

    function getCodigo_juego() {
        return $this->codigo_juego;
    }

    function getValor_arriendo() {
        return $this->valor_arriendo;
    }

    function getFecha_arriendo() {
        return $this->fecha_arriendo;
    }

    function setRut_cliente($rut_cliente) {
        $this->rut_cliente = $rut_cliente;
    }

    function setCodigo_juego($codigo_juego) {
        $this->codigo_juego = $codigo_juego;
    }

    function setValor_arriendo($valor_arriendo) {
        $this->valor_arriendo = $valor_arriendo;
    }

    function setFecha_arriendo($fecha_arriendo) {
        $this->fecha_arriendo = $fecha_arriendo;
    }

    public function __toString() {
        return "Rut Cliente: ". $this->rut_cliente. "Codigo Juego: ". $this->codigo_juego.
            " Valor de arriendo: ".$this->valor_arriendo. " Fecha de arriendo: ".$this->fecha_arriendo;
    }

}
