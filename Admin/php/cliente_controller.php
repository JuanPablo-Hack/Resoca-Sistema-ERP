<?php
switch ($_POST['accion']) {

    case 'eliminar':
        eliminar_cliente($_POST['id']);
        break;
}
function eliminar_cliente($id)
{
    include './conexion.php';
    $sql = "DELETE FROM clientes WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
