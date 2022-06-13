<?php
include 'conexion.php';
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$nombre_cliente = $_POST['nombre_cliente'];
$sql = "SELECT * FROM evidencias WHERE fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND id_cliente = '$nombre_cliente'";
$result = mysqli_query($conexion, $sql);
$total_residuos = 0;
while ($row = mysqli_fetch_array($result)) {
    $particion = explode(',', $row['arreglo']);
    $total_residuos += $particion[1];
}
echo   $total_residuos;
