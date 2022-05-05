<?php

include 'conexion.php';


$id_manifiesto=$_POST['identificador'];
$id_cliente = $_POST['cliente'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$archivo = $_FILES['archivo']['name'];
$cliente = $_POST['nombre_cliente'];


if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
    $ruta_manifiestos = '../manifiestos/';
    $ruta_manifiestos_cliente = $ruta_manifiestos . $id_cliente . "/";
  
    if(!file_exists($ruta_manifiestos)){
      mkdir($ruta_manifiestos, 0777, true);
    }
    if(!file_exists($ruta_manifiestos_cliente)){
      mkdir($ruta_manifiestos_cliente, 0777, true);
    }

    $sqlm = "SELECT * FROM manifiestos WHERE id =".$id_manifiesto;
    $resultm = mysqli_query($conexion, $sqlm);
    $rowm = mysqli_fetch_array($resultm);


  
        if($archivo != ''){
            move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['archivo']['name']);

            unlink($ruta_manifiestos_cliente.$rowm['ruta']);
         
            $sql="UPDATE manifiestos SET id_cliente = '$cliente', titulo = '$titulo', descripcion = '$descripcion', ruta = '$archivo' WHERE id = ".$id_manifiesto;
            $resultado = $conexion->query($sql);
        } else {
            $sql="UPDATE manifiestos SET id_cliente = '$cliente', titulo = '$titulo', descripcion = '$descripcion' WHERE id = ".$id_manifiesto;
            $resultado = $conexion->query($sql);
        }


        if($resultado){
            header("Refresh:0; url=../registro_exitoso_manifiesto.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>