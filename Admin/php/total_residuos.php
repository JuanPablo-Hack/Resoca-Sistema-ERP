<?php
include_once 'conexion.php';
include_once 'graficas.php';

$fechai = strftime("%d-%m-%Y", strtotime($_POST['fechai']));
$fechaf = strftime("%d-%m-%Y", strtotime($_POST['fechaf']));

echo json_encode(obtener_residuo_total($fechai, $fechaf));
