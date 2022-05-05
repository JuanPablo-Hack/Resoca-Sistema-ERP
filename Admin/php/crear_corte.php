<?php

include 'conexion.php';

$folio=$_POST['folio'];
$ticket=$_POST['ticket'];
$porcentaje=$_POST['porcentaje'];
$kilos=$_POST['kilos'];
$cantidad=intval($_POST['cantidad']);
$unidad=$_POST['unidad'];
$descripcion=$_POST['descripcion'];
$precio=intval($_POST['precio']);
$importe=strval($cantidad*$precio);

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO cortes(folio,ticket,porcentaje,kg,cantidad,unidad,descripcion,precio,importe) VALUES ('$folio', '$ticket', '$porcentaje', '$kilos', '$cantidad', '$unidad', '$descripcion', '$precio', '$importe');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_corte.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>