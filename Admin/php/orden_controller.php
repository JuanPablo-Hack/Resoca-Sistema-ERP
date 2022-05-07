<?php
switch ($_POST['accion']) {
    case 'agregar':
        crear_orden($_POST['nombre_cliente'], $_POST['encargado'], $_POST['cargo'], $_POST['tipo_servicio'], $_POST['fecha'], $_POST['cantidad'], $_POST['unidad_residuo'], $_POST['concepto'], $_POST['manifiesto'], $_POST['factura'], $_POST['unidad']);
        break;
    case 'eliminar':
        eliminar_orden($_POST['id']);
        break;
}

function crear_orden($cliente, $encargado, $cargo, $servicio, $fecha, $cantidad, $unidad_residuo, $concepto, $manifiesto, $factura, $unidad)
{
    include './conexion.php';
    $sql = "INSERT INTO ordenes(cliente,encargado,cargo,servicio,fecha,cantidad,unidad,concepto,manifiesto,factura,unidadasig,estado) VALUES ('$cliente', '$encargado', '$cargo', '$servicio', '$fecha', '$cantidad', '$unidad_residuo', '$concepto', '$manifiesto', '$factura', '$unidad','Activo');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
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
