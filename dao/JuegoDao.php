<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JuegoDao
 *
 * @author cetecom
 */
class JuegoDao {

    public static function agregarJuego($dto) {
        try {
            if (JuegoDao::buscarJuego($dto->getCodigo())) {
                $pdo = new clasePDO();
                $funcion = $pdo->prepare("INSERT INTO juego VALUES(?,?,?,?);");
                $funcion->bindParam(1, $dto->getCodigo());
                $funcion->bindParam(2, $dto->getNombre());
                //Arreglar
                $funcion->bindParam(3, $dto->getRestriccion());
                $funcion->bindParam(4, $dto->getValor());
                $funcion->execute();
                $pdo = null;
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (PDOException $ex) {
            echo 'Error al agregar: ' . $ex->getMessage();
            return FALSE;
        }
    }

    public static function buscarCodigoJuego($cod) {
        $lista = new ArrayObject();
        try {
            $pdo = new clasePDO();
            $funcion = $pdo->prepare("SELECT * FROM juego WHERE codigo=?");
            $funcion->bindParam(1, $rut);
            $funcion->execute();
            $array = $funcion->fetchAll();
            foreach ($array as $value) {
                $dto = new JuegoDto();
                $dto->setCodigo($value['codigo']);
                $dto->setNombre($value['nombre']);
                //arreglar este punto, es boolean y debe pasar a int
                if ($value['restriccion']==1) {
                $dto->setRestriccion(TRUE);                    
                }else{
                $dto->setRestriccion(FALSE);  
                }
                $lista->append($dto);
            }
            $pdo = null;
            return $lista;
        } catch (PDOException $ex) {
            echo 'Error al buscar el cliente: ' . $ex->getMessage();
        }
    }

    private static function buscarJuego($codigo) {
        $validar = FALSE;
        try {
            $pdo = new clasePDO();
            $funcion = $pdo->prepare("SELECT * FROM juego WHERE codigo=? LIMIT 1");
            $funcion->bindParam(1, $codigo);
            $funcion->execute();
            $array = $funcion->fetchAll();
            foreach ($array as $value) {
                $validar = TRUE;
            }
            $pdo = null;
            return $validar;
        } catch (PDOException $ex) {
            echo 'Error al buscar el juego: ' . $ex->getMessage();
            return $validar;
        }
    }

}