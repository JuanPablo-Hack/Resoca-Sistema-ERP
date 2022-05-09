<?php
switch ($_POST['accion']) {
    case 'agregar':
        crear_servicio($_POST['nombre'], $_POST['tipo'], $_POST['descripcion'], $_POST['supervisor'], $_POST['operador'], $_POST['auxiliar'], $_POST['modelo'], $_POST['placas'], $_POST['nombre_destino'], $_POST['ubicacion'], $_POST['descripcion_material'], $_POST['descripcion_equipo']);
        break;
    case 'editar':
        editar_servicios($_POST['identificador'], $_POST['nombre'], $_POST['tipo'], $_POST['descripcion'], $_POST['supervisor'], $_POST['operador'], $_POST['auxiliar'], $_POST['modelo'], $_POST['placas'], $_POST['nombre_destino'], $_POST['ubicacion'], $_POST['descripcion_material'], $_POST['descripcion_equipo']);
        break;
    case 'eliminar':
        eliminar_servicio($_POST['id']);
        break;
}
function crear_servicio($nombre, $tipo, $descripcion, $supervisor, $operador, $auxiliar, $modelo, $placas, $nombre_destino, $ubicacion, $descripcion_material, $descripcion_equipo)
{
    include './conexion.php';
    $sql = "INSERT INTO servicios(nombre,tipo,descripcion,supervisor,operador,auxiliar,modelo,placas,destinofinal,ubicacion,material,equipo) VALUES ('$nombre', '$tipo', '$descripcion', '$supervisor', '$operador', '$auxiliar', '$modelo', '$placas', '$nombre_destino', '$ubicacion', '$descripcion_material', '$descripcion_equipo');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
}
function editar_servicios($id, $nombre, $tipo, $descripcion, $supervisor, $operador, $auxiliar, $modelo, $placas, $nombre_destino, $ubicacion, $descripcion_material, $descripcion_equipo)
{
    include './conexion.php';
    $sql = "UPDATE servicios SET nombre='$nombre',tipo='$tipo',descripcion='$descripcion',supervisor='$supervisor',operador='$operador',auxiliar='$auxiliar',modelo='$modelo',placas='$placas',destinofinal='$nombre_destino',ubicacion='$ubicacion',material='$descripcion_material',equipo='$descripcion_equipo'  WHERE id='$id'";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
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
