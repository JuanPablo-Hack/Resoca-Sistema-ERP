<?php

include 'conexion.php';


$id=$_POST['identificador'];
$unidad=$_POST['unidad'];
$fecha=$_POST['fecha'];
$km_inicial=intval($_POST['km_inicial']);
$km_final=intval($_POST['km_final']);
$tipo_servicio=$_POST['tipo_servicio'];
$litros=intval($_POST['litros']);
$no_factura=$_POST['no_factura'];
$operador=$_POST['operador'];
$importe=$_POST['importe'];
$rendi=($km_final-$km_inicial)/$litros;
$rendimiento=strval($rendi);





if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
        
        $sql="UPDATE registros_combustible SET unidad='$unidad',fecha='$fecha',kminicial='$km_inicial',kmfinal='$km_final',tiposervicio='$tipo_servicio',litros='$litros',rendimiento='$rendimiento',factura='$no_factura',operador='$operador',importe='$importe' WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
  




?>