<?php
switch ($_POST['accion']) {
    case 'agregar':
        crear_mantenimiento($_POST['unidad'], $_POST['taller'], $_POST['factura'], $_POST['descripcion'], $_POST['fecha'], $_POST['km']);
        break;
    case 'editar':
        editarMantenimiento($_POST['identificador'], $_POST['unidad'], $_POST['taller'], $_POST['factura'], $_POST['descripcion'], $_POST['fecha'], $_POST['km']);
        break;
    case 'eliminar':
        eliminar_mantenimiento($_POST['id']);
        break;
}
function crear_mantenimiento($unidad, $taller, $factura, $descripcion, $fecha, $km)
{
    include './conexion.php';
    $sql = "INSERT INTO registros_mantenimiento (unidad,taller,nofactura,descripcion,fecha,km) VALUES ('$unidad', '$taller', '$factura', '$descripcion', '$fecha', '$km');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
}
function editarMantenimiento($id, $unidad, $taller, $factura, $descripcion, $fecha, $km)
{
    include './conexion.php';
    $sql = "UPDATE registros_mantenimiento SET unidad='$unidad',taller='$taller',nofactura='$factura',descripcion='$descripcion',fecha='$fecha',km='$km' WHERE id='$id'";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Refresh:0; url=../registro_exitoso.html");
    } else {
        header("Refresh:0; url=../error_registro.html");
    }
}
function eliminar_mantenimiento($id)
{
    include './conexion.php';
    $sql = "DELETE FROM registros_mantenimiento WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
