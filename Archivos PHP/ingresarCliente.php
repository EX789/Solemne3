<?php

include_once '../dao/ClienteDao.php';
include_once '../dto/ClienteDto.php';

$dto = new ClienteDto();

$dto->setNombre($_POST['txbNombre']);
$dto->setRut($_POST['txnRut']);
$dto->setFecha_nacimiento($_POST['txbFecha']);

if (ClienteDao::ingresarCliente($dto)) {
    echo "<script type=\"text/javascript\""
    . ">alert(\"Registro guardado\");</script>";
} else {
    echo "<script type=\"text/javascript\""
    . ">alert(\"Registro NO guardado\");</script>";
}

echo'<script>window.location="../paginas/PHP/IngresarCliente.php";</script>';
