<?php
switch ($_POST['accion']) {
    case 'agregar':
        crear_combustible($_POST['unidad'], $_POST['fecha'], intval($_POST['km_inicial']), intval($_POST['km_final']), $_POST['tipo_servicio'], intval($_POST['litros']), $_POST['no_factura'], $_POST['operador'], $_POST['importe']);
        break;
    case 'editar':
        editar_combustible($_POST['identificador'], $_POST['unidad'], $_POST['fecha'], intval($_POST['km_inicial']), intval($_POST['km_final']), $_POST['tipo_servicio'], intval($_POST['litros']), $_POST['no_factura'], $_POST['operador'], $_POST['importe']);
        break;
    case 'eliminar':
        eliminar_combustible($_POST['id']);
        break;
}
function crear_combustible($unidad, $fecha, $km_inicial, $km_final, $tipo_servicio, $litros, $no_factura, $operador, $importe)
{
    include './conexion.php';
    $rendi = ($km_final - $km_inicial) / $litros;
    $rendimiento = strval($rendi);
    $sql = "INSERT INTO registros_combustible (unidad, fecha, kminicial, kmfinal, tiposervicio, litros, rendimiento, factura, operador, importe) VALUES ('$unidad', '$fecha', '$km_inicial', '$km_final', '$tipo_servicio', '$litros', '$rendimiento', '$no_factura', '$operador', '$importe');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
}
function editar_combustible($id, $unidad, $fecha, $km_inicial, $km_final, $tipo_servicio, $litros, $no_factura, $operador, $importe)
{
    include './conexion.php';
    $rendi = ($km_final - $km_inicial) / $litros;
    $rendimiento = strval($rendi);
    $sql = "UPDATE registros_combustible SET unidad='$unidad',fecha='$fecha',kminicial='$km_inicial',kmfinal='$km_final',tiposervicio='$tipo_servicio',litros='$litros',rendimiento='$rendimiento',factura='$no_factura',operador='$operador',importe='$importe' WHERE id='$id'";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
}

function eliminar_combustible($id)
{
    include './conexion.php';
    $sql = "DELETE FROM registros_combustible WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
