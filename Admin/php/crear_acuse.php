<?php

include 'conexion.php';

$cliente=$_POST['nombre_cliente'];
$encargado=$_POST['encargado'];
$puesto=$_POST['puesto'];
$descripcion=$_POST['descripcion'];
$manifiesto=$_POST['manifiesto'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO acuses(cliente,encargado,puesto,descripcion,manifiesto,estado) VALUES ('$cliente', '$encargado', '$puesto', '$descripcion', '$manifiesto','Activo');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_acuse.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>