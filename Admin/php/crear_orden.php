<?php

include 'conexion.php';

$cliente=$_POST['nombre_cliente'];
$encargado=$_POST['encargado'];
$cargo=$_POST['cargo'];
$servicio=$_POST['tipo_servicio'];
$fecha=$_POST['fecha'];
$cantidad=$_POST['cantidad'];
$unidad_residuo=$_POST['unidad_residuo'];
$concepto=$_POST['concepto'];
$manifiesto=$_POST['manifiesto'];
$factura=$_POST['factura'];
$unidad=$_POST['unidad'];







if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO ordenes(cliente,encargado,cargo,servicio,fecha,cantidad,unidad,concepto,manifiesto,factura,unidadasig,estado) VALUES ('$cliente', '$encargado', '$cargo', '$servicio', '$fecha', '$cantidad', '$unidad_residuo', '$concepto', '$manifiesto', '$factura', '$unidad','Activo');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_orden.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>