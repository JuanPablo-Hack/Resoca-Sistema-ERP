<?php
switch ($_POST['accion']) {
    case 'agregar':
        crear_orden($_POST['nombre_cliente'], $_POST['encargado'], $_POST['cargo'], $_POST['tipo_servicio'], $_POST['fecha'], $_POST['hora'], $_POST['unidad']);
        break;
    case 'editar':
        editar_orden($_POST['identificador'], $_POST['encargado'], $_POST['cargo'], $_POST['fecha'], $_POST['hora'], $_POST['cantidad'], $_POST['unidad_residuo'], $_POST['concepto'], $_POST['manifiesto'], $_POST['factura'], $_POST['estado']);
        break;
    case 'eliminar':
        eliminar_orden($_POST['id']);
        break;
}

function crear_orden($cliente, $encargado, $cargo, $servicio, $fecha, $hora, $unidad)
{
    include './conexion.php';
    $sql = "INSERT INTO ordenes(cliente,encargado,cargo,servicio,fecha,hora,unidadasig,estado) VALUES ('$cliente', '$encargado', '$cargo', '$servicio', '$fecha','$hora','$unidad','Activo');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function editar_orden($id, $encargado, $cargo, $fecha, $hora, $estado)
{
    include './conexion.php';
    $sql = "UPDATE ordenes SET encargado='$encargado',cargo='$cargo',fecha='$fecha',hora='$hora',estado='$estado'  WHERE id='$id'";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
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
