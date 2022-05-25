<?php
function  get_orden($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM ordenes WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    return $result;
}
function  get_servicio($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM servicios WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    return $result;
}
function get_trabajador($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM trabajador WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    return $result;
}
function get_evidencia($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM evidencias WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    return $result;
}
function get_confirmacion($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM confimarcion WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    return $result;
}
