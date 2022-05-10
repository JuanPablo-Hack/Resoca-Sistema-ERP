<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_evidencia($_POST['folio'], $_POST['ticket'], $_POST['cantidad'],  $_FILES['image']['name'], $_POST['comentarios']);
        break;
    case 'editar':
        editar_evidencia($_POST['identificador'], $_POST['folio'], $_POST['ticket'], $_POST['cantidad'],  $_FILES['image']['name'], $_POST['comentarios']);
        break;
    case 'eliminar':
        eliminar_evidencia($_POST['id']);
        break;
}
function agregar_evidencia($folio, $ticket, $cantidad, $foto, $comentarios)
{
    include './conexion.php';
    agregar_imagen($folio);
    $sql = "INSERT INTO evidencias (folio,ticket, cantidad, comentarios, foto) VALUES ( '$folio','$ticket', '$cantidad', '$comentarios', '$foto');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
}
function editar_evidencia($id, $folio, $ticket, $cantidad, $foto, $comentarios)
{
    include './conexion.php';
    agregar_imagen($folio);
    $sql = "UPDATE evidencias SET folio = '$folio', ticket = '$ticket',cantidad = '$cantidad', foto = '$foto', comentarios = '$comentarios' WHERE id = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
}
function eliminar_evidencia($id)
{
    include './conexion.php';
    $sql = "DELETE FROM evidencias WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}

function agregar_imagen($carpeta)
{
    $ruta_manifiestos = '../../evidencias/';
    $ruta_manifiestos_cliente = $ruta_manifiestos . $carpeta . "/";

    if (!file_exists($ruta_manifiestos)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }
    if (!file_exists($ruta_manifiestos_cliente)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }

    move_uploaded_file($_FILES['image']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['image']['name']);
}
