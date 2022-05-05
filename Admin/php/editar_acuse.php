<?php

include 'conexion.php';

$id=$_POST['identificador'];
$cliente=$_POST['cliente'];
$encargado=$_POST['encargado'];
$puesto=$_POST['puesto'];
$descripcion=$_POST['descripcion'];
$manifiesto=$_POST['manifiesto'];
$estado=$_POST['estado'];


if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE acuses SET cliente='$cliente',encargado='$encargado',puesto='$puesto',descripcion='$descripcion',manifiesto='$manifiesto',estado='$estado' WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>