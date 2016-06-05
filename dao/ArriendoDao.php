<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArriendoDao
 *
 * @author raide
 */
class ArriendoDao {

    public static function ingresarArriendo($dto) {
        try {
            $pdo = new clasePDO();
            $funcion = $pdo->prepare("INSERT INTO arriendo_juego VALUES(?,?,?,?);");
            $funcion->bindParam(1, $dto->getRut_cliente());
            $funcion->bindParam(2, $dto->getCodigo_juego());
            $funcion->bindParam(3, $dto->getValor_arriendo());
            $funcion->bindParam(4, $dto->getFecha_arriendo());
            $funcion->execute();
            $pdo = null;
        } catch (PDOException $ex) {
            echo 'Error al agregar: ' . $ex->getMessage();
        }
    }

//    public static function buscarArriendoPorCliente($rut) {
//        $lista = new ArrayObject();
//        try {
//            $pdo = new clasePDO();
//            $funcion = $pdo->prepare("SELECT * FROM arriendo_juego WHERE cliente_rut=?");
//            $funcion->bindParam(1, $rut);
//            $funcion->execute();
//            $array = $funcion->fetchAll();
//            foreach ($array as $value) {
//                $dto = new ArriendoJuegoDto();
//                $dto->setRut_cliente($value['cliente_rut']);
//                $dto->setCodigo_juego($value['juego_codigo']);
//                $dto->setValor_arriendo($value['valor_arriendo']);
//                $dto->setFecha_arriendo($value['fecha_arriendo']);
//                $lista->append($dto);
//            }
//            $pdo = null;
//            return $lista;
//        } catch (PDOException $ex) {
//            echo 'Error al buscar: '.$ex->getMessage();
//        }
//    }

}