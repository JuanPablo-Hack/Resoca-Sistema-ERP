<?php
switch ($_POST['accion']) {
    case 'agregar':
        confirmarServicio($_POST["folio"], $_POST["nombre"], $_POST["cargo"], $_POST["imagen"], $_FILES['foto1']['name'], $_FILES['foto2']['name'], $_FILES['foto3']['name'], $_FILES['foto4']['name']);
        break;
    case 'editar':
        editarconfirmar($_POST['identificador'], $_POST["folio"], $_POST["nombre"], $_POST["cargo"], $_FILES['foto1']['name'], $_FILES['foto2']['name'], $_FILES['foto3']['name'], $_FILES['foto4']['name']);
        break;
}
function confirmarServicio($folio, $nombre, $cargo, $imagenCodificada, $foto, $foto2, $foto3, $foto4)
{
    include 'conexion.php';
    $nombreImagenGuardada = decodificarImagen($imagenCodificada);
    subir_imagenes_confirmar_imagen($folio);
    $sql = "INSERT INTO confimarcion (id_orden,nombre,cargo,ruta,foto,foto1,foto2,foto3) VALUES ('$folio','$nombre','$cargo','$nombreImagenGuardada','$foto','$foto2','$foto3','$foto4');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function editarconfirmar($id, $folio, $nombre, $cargo, $foto, $foto2, $foto3, $foto4)
{
    include 'conexion.php';
    subir_imagenes_confirmar_imagen($folio);
    $sql = "UPDATE confimarcion SET id_orden = '$folio', nombre = '$nombre', cargo = '$cargo', foto = '$foto', foto1 = '$foto2', foto2 = '$foto3', foto3 = '$foto4' WHERE id = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function decodificarImagen($imagenCodificada)
{
    $imagenCodificadaLimpia = str_replace("data:image/png;base64,", "", $imagenCodificada);
    $imagenDecodificada = base64_decode($imagenCodificadaLimpia);
    $nombreImagenGuardada = "imagen_" . uniqid() . ".png";
    $ruta = '../../firmas/';
    $ruta_firma = $ruta . $nombreImagenGuardada;
    if (!file_exists($ruta)) {
        mkdir($ruta, 0777, true);
    }
    file_put_contents($ruta_firma, $imagenDecodificada);
    return $nombreImagenGuardada;
}
function subir_imagenes_confirmar_imagen($carpeta)
{

    $ruta_manifiestos = '../../confirmaciones/';
    $ruta_manifiestos_cliente = $ruta_manifiestos . $carpeta . "/";

    if (!file_exists($ruta_manifiestos)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }
    if (!file_exists($ruta_manifiestos_cliente)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }

    move_uploaded_file($_FILES['foto1']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['foto1']['name']);
    move_uploaded_file($_FILES['foto2']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['foto2']['name']);
    move_uploaded_file($_FILES['foto3']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['foto3']['name']);
    move_uploaded_file($_FILES['foto4']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['foto4']['name']);
}
