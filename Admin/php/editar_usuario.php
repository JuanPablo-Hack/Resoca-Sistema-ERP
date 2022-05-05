<?php

include 'conexion.php';

$id=$_POST['identificador'];
$nombre=$_POST['nombre'];
$nra=$_POST['nra'];
$tel=$_POST['telefono'];
$email=$_POST['email'];
$area=$_POST['area'];
$fecha_corte=$_POST['fecha'];
$rfc=$_POST['rfc'];
$dir=$_POST['direccion'];
$cp=$_POST['cp'];
$nombre_representante=$_POST['nombre_representante'];
$cargo=$_POST['cargo'];
$tel_representante=$_POST['tel_representante'];
$email_representante=$_POST['email_representante'];
$user=$_POST['user'];
$contra=sha1($_POST['contra']);
$recontra=sha1($_POST['recontra']);





if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
    if($contra==$recontra){
        $sql="UPDATE clientes SET nombre='$nombre',nra='$nra',telefono='$tel',email='$email',area='$area',fecha_corte='$fecha_corte',rfc='$rfc',dir='$dir',cp='$cp',nombre_representante='$nombre_representante',cargo='$cargo',tel_representante='$tel_representante',email_representante='$email_representante',user='$user',pwd='$contra'  WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
           
            header("Refresh:0; url=../error_registro.html");
        }

    }else{
        
        header("Refresh:0; url=../error_contras.html");
    }
  

}


?>