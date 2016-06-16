<?php

include_once '../dao/JuegoDao.php';
include_once '../dto/JuegoDto.php';

$dto = new JuegoDto();

$dto->setCodigo($_POST['txbCodigo']);
$dto->setNombre($_POST['txbNombre']);
if (isset($_POST['chkRestriccion'])) {
    $dto->setRestriccion($_POST['chkRestriccion']);
}else{
    $dto->setRestriccion(FALSE);
}

$dto->setValor($_POST['txbValor']);

if (JuegoDao::agregarJuego($dto)) {
    echo "<script type=\"text/javascript\""
    . ">alert(\"Registro guardado\");</script>";
} else {
    echo "<script type=\"text/javascript\""
    . ">alert(\"Registro NO guardado\");</script>";
}

echo'<script>window.location="../paginas/initializr/PHP/IngresarJuego.php";</script>';
