<?php
switch ($_POST['accion']) {

    case 'eliminar':
        eliminar_servicio($_POST['id']);
        break;
}
function eliminar_servicio($id)
{
    include './conexion.php';
    $sql = "DELETE FROM servicios WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
