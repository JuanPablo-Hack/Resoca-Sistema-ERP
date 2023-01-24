<?php
switch ($_POST['accion']) {
    case 'editar':
        editar_evidencia($_POST['id'], $_POST['folio'], $_POST['ticket'], $_POST['cantidad'], $_POST['comentarios'], $_POST['fecha']);
        break;
    case 'eliminar':
        eliminar_evidencia($_POST['id']);
        break;
}
function editar_evidencia($id, $folio, $ticket, $cantidad, $comentarios, $fecha)
{
    include './conexion.php';
    $sql = "UPDATE `evidencias` SET `folio` = '$folio', `ticket` = '$ticket', `arreglo` = '$cantidad', `comentarios` = '$comentarios', `creado` = '$fecha' WHERE `evidencias`.`id` = $id";
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
