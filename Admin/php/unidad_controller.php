<?php
switch ($_POST['accion']) {
    case 'agregar':
        crear_unidad($_POST['modelo'], $_POST['ano'], $_POST['color'], $_POST['placas'], $_POST['no_economico'], $_POST['capacidad'], $_POST['tipo_unidad'], $_POST['tipo_combustible'], $_POST['serie'], $_POST['descripcion']);
        break;
    case 'eliminar':
        eliminar_unidad($_POST['id']);
        break;
}
function crear_unidad($modelo, $ano, $color, $placas, $no_economico, $capacidad, $tipo_unidad, $tipo_combustible, $serie, $descripcion)
{
    include './conexion.php';
    $sql = "INSERT INTO unidades(modelo,ano,color,placas,noeconomico,capacidad,tipounidad,tipocombustible,serie,descripcion) VALUES ('$modelo','$ano','$color','$placas','$no_economico','$capacidad','$tipo_unidad','$tipo_combustible','$serie','$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
}
function eliminar_unidad($id)
{
    include './conexion.php';
    $sql = "DELETE FROM unidades WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
