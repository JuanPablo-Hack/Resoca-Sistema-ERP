<?php

include 'conexion.php';

$id=$_POST['identificador'];

$encargado=$_POST['encargado'];
$cargo=$_POST['cargo'];

$fecha=$_POST['fecha'];
$cantidad=$_POST['cantidad'];
$unidad_residuo=$_POST['unidad_residuo'];
$concepto=$_POST['concepto'];
$manifiesto=$_POST['manifiesto'];
$factura=$_POST['factura'];

$estado=$_POST['estado'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE ordenes SET encargado='$encargado',cargo='$cargo',fecha='$fecha',cantidad='$cantidad',unidad='$unidad_residuo',concepto='$concepto',manifiesto='$manifiesto',factura='$factura',estado='$estado'  WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>