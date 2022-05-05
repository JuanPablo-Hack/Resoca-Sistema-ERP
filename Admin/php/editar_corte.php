<?php

include 'conexion.php';

$id=$_POST['identificador'];
$folio=$_POST['folio'];
$ticket=$_POST['ticket'];
$porcentaje=$_POST['porcentaje'];
$kilos=$_POST['kilos'];
$cantidad=$_POST['cantidad'];
$unidad=$_POST['unidad'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$importe=$_POST['importe'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE cortes SET folio='$folio',ticket='$ticket',porcentaje='$porcentaje',kg='$kilos',cantidad='$cantidad',unidad='$unidad',descripcion='$descripcion',precio='$precio',importe='$importe'  WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>