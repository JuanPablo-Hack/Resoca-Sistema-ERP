<?php
function obtener_residuo_total($fecha_inicial, $fecha_final)
{
    include 'conexion.php';
    $SQL = "SELECT `arreglo` FROM `evidencias` WHERE `creado` BETWEEN '$fecha_inicial' AND '$fecha_final'";
    $resultado = $conexion->query($SQL);
    $residuo_total_generado = 0;
    while ($row = $resultado->fetch_assoc()) {
        $cantidad = explode(',', $row['arreglo']);
        $residuo_total_generado += $cantidad[1];
    }
    return $residuo_total_generado;
}
function obtener_porcentaje_residuo($residuo_total_generado, $residuo_generado_mes)
{
    $calculo_porcentaje = ($residuo_generado_mes * 100) / $residuo_total_generado;
    return $calculo_porcentaje;
}
