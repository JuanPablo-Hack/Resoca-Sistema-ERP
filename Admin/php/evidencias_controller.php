<?php
switch ($_POST['accion']) {

    case 'eliminar':
        eliminar_evidencia($_POST['id']);
        break;
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
