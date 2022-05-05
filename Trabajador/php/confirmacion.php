<?php
confirmarServicio($_POST["folio"], $_POST["nombre"], $_POST["cargo"], $_POST["imagen"]);
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
function confirmarServicio($folio, $nombre, $cargo, $imagenCodificada)
{
    include 'conexion.php';
    $nombreImagenGuardada = decodificarImagen($imagenCodificada);
    $sql = "INSERT INTO confimarcion (id_orden,nombre,cargo,ruta) VALUES ('$folio','$nombre','$cargo','$nombreImagenGuardada');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
