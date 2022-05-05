<?php

include 'conexion.php';


$id=$_POST['identificador'];
$unidad=$_POST['unidad'];
$taller=$_POST['taller'];
$factura=$_POST['factura'];
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];
$km=$_POST['km'];





if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
        
        $sql="UPDATE registros_mantenimiento SET unidad='$unidad',taller='$taller',nofactura='$factura',descripcion='$descripcion',fecha='$fecha',km='$km' WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
  




?>