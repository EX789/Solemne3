<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../dto/ClienteDto.php';
include_once '../sql/ClasePDO.php';

class ClienteDao {

    //*
    //Metodo para ingresar un cliente a la base de datos
    //*//
    public static function ingresarCliente($dto) {
        try {
            if (ClienteDao::validarRut($dto->getRut())) {
                $pdo = new clasePDO();
                $funcion = $pdo->prepare("INSERT INTO cliente VALUES(?,?,?);");
                $funcion->bindParam(1, $dto->getRut());
                $funcion->bindParam(2, $dto->getNombre());
                $funcion->bindParam(3, $dto->getFecha_nacimiento());
                $funcion->execute();
                $pdo = null;
                return TRUE;
            }else{
                return FALSE;
            }
        } catch (PDOException $ex) {
            echo 'Error al Agregar: ' . $ex->getMessage();
            return FALSE;
        }
    }

    //*
    //Metodo para buscar un cliente en la base de datos
    //*//

    public static function buscarRutCliente($rut) {
        $lista = new ArrayObject();
        try {
            $pdo = new clasePDO();
            $funcion = $pdo->prepare("SELECT * FROM cliente WHERE rut=?");
            $funcion->bindParam(1, $rut);
            $funcion->execute();
            $array = $funcion->fetchAll();
            foreach ($array as $value) {
                $dto = new ClienteDto();
                $dto->setRut($value['rut']);
                $dto->setNombre($value['nombre']);
                $dto->setFecha_nacimiento($value['fecha_nacimiento']);
                $lista->append($dto);
            }
            $pdo = null;
            return $lista;
        } catch (PDOException $ex) {
            echo 'Error al buscar el cliente: ' . $ex->getMessage();
        }
    }

    private static function validarRut($rut) {
        $validar = FALSE;
        try {
            $pdo = new clasePDO();
            $funcion = $pdo->prepare("SELECT * FROM cliente WHERE rut=? LIMIT 1");
            $funcion->bindParam(1, $rut);
            $funcion->execute();
            $array = $funcion->fetchAll();
            foreach ($array as $value) {
                $validar = TRUE;
            }
            $pdo = null;
            return $validar;
        } catch (PDOException $ex) {
            echo 'Error al buscar un cliente: ' . $ex->getMessage();
            return $validar;
        }
    }

}
