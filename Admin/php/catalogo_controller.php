<?php
switch ($_POST['accion']) {
    case 'agregar':
        crear_catalogo($_POST['nombre'], $_POST['clave'], $_POST['precio']);
        break;
    case 'editar':
        editar_catalogo($_POST['id'], $_POST['nombre'], $_POST['clave'], $_POST['precio']);
        break;
    case 'eliminar':
        eliminar_catalogo($_POST['id']);
        break;
}

function crear_catalogo($nombre, $clave, $precio)
{
    include './conexion.php';
    $sql = "INSERT INTO catalogo(nombre,clave,precio) VALUES ('$nombre', '$clave', '$precio')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function editar_catalogo($id, $nombre, $clave, $precio)
{
    include './conexion.php';
    $sql = "UPDATE catalogo SET nombre='$nombre',clave='$clave',precio='$precio' WHERE id='$id'";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
}
function eliminar_catalogo($id)
{
    include './conexion.php';
    $sql = "DELETE FROM catalogo WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
