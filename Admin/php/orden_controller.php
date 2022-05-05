<?php
switch ($_POST['accion']) {
    case 'agregar':
        crear_orden($_POST['clasi'], $_POST['cat'], $_POST['descrip']);
        break;
    case 'eliminar':
        eliminar_orden($_POST['id']);
        break;
}

function crear_orden()
{
}
function eliminar_orden($id)
{
    include './conexion.php';
    $sql = "DELETE FROM ordenes WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
