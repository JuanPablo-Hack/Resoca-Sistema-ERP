<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$descripcion=$_POST['descripcion'];
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
   
         
        $sql="INSERT INTO servicios(nombre,tipo,descripcion,supervisor,operador,auxiliar,modelo,placas,destinofinal,ubicacion,material,equipo) VALUES ('$nombre', '$tipo', '$descripcion', '$supervisor', '$operador', '$auxiliar', '$modelo', '$placas', '$nombre_destino', '$ubicacion', '$descripcion_material', '$descripcion_equipo');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>