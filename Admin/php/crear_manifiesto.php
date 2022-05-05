<?php

include 'conexion.php';


$id_cliente=$_POST['identificador'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$archivo = $_FILES['archivo']['name'];


// if ($conexion ->connect_error) {
//     die("Conexion Fallida: " . $conn ->connect_error);
// }else{
//     $ruta_manifiestos = '../manifiestos/';
//     $ruta_manifiestos_cliente = $ruta_manifiestos . $id_cliente . "/";
  
//     if(!file_exists($ruta_manifiestos)){
//       mkdir($ruta_manifiestos, 0777, true);
//     }
//     if(!file_exists($ruta_manifiestos_cliente)){
//       mkdir($ruta_manifiestos_cliente, 0777, true);
//     }
  
//     move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['archivo']['name']);
         
//         $sql="INSERT INTO manifiestos (id_cliente,titulo,descripcion,ruta) VALUES ('$id_cliente','$titulo', '$descripcion', '$archivo');";
//         $resultado = $conexion->query($sql);
//         if($resultado){
//             header("Refresh:0; url=../registro_exitoso_manifiesto.html");
//         }else{
//             header("Refresh:0; url=../error_registro.html");
//         }

//     }
?>