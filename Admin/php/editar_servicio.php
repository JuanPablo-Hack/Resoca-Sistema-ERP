<?php

include 'conexion.php';

$id=$_POST['identificador'];
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];

$supervisor=$_POST['supervisor'];
$operador=$_POST['operador'];
$auxiliar=$_POST['auxiliar'];
$modelo=$_POST['modelo'];
$placas=$_POST['placas'];
$nombre_destino=$_POST['nombre_destino'];
$ubicacion=$_POST['ubicacion'];
$descripcion_material=$_POST['descripcion_material'];
$descripcion_equipo=$_POST['descripcion_equipo'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE servicios SET nombre='$nombre',tipo='$tipo',supervisor='$supervisor',operador='$operador',auxiliar='$auxiliar',modelo='$modelo',placas='$placas',destinofinal='$nombre_destino',ubicacion='$ubicacion',material='$descripcion_material',equipo='$descripcion_equipo'  WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>