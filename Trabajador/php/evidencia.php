<?php

include 'conexion.php';

$folio = $_POST['folio'];
$cantidad = intval($_POST['cantidad']);
$ticket = $_POST['ticket'];
$comentarios = $_POST['comentarios'];
$foto = $_FILES['image']['name'];

if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conn->connect_error);
} else {
    $ruta_manifiestos = '../../evidencias/';
    $ruta_manifiestos_cliente = $ruta_manifiestos . $folio . "/";

    if (!file_exists($ruta_manifiestos)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }
    if (!file_exists($ruta_manifiestos_cliente)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }

    move_uploaded_file($_FILES['image']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['image']['name']);

    $sql = "INSERT INTO evidencias (folio,ticket, cantidad, comentarios, foto) VALUES ( '$folio','$ticket', '$cantidad', '$comentarios', '$foto');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Refresh:0; url=../registro_exitoso.html");
    } else {
        header("Refresh:0; url=../error_registro.html");
    }
}
