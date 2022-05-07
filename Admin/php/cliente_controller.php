<?php
switch ($_POST['accion']) {
    case 'agregar':
        crear_cliente($_POST['nombre'], $_POST['nra'], $_POST['telefono'], $_POST['email'], $_POST['area'], $_POST['fecha'], $_POST['rfc'], $_POST['direccion'], $_POST['cp'], $_POST['nombre_representante'], $_POST['cargo'], $_POST['tel_representante'], $_POST['email_representante'], $_POST['user'], sha1($_POST['contra']), sha1($_POST['recontra']));
        break;
    case 'eliminar':
        eliminar_cliente($_POST['id']);
        break;
}
function crear_cliente($nombre, $nra, $tel, $email, $area, $fecha_corte, $rfc, $dir, $cp, $nombre_representante, $cargo, $tel_representante, $email_representante, $user, $contra, $recontra)
{
    include './conexion.php';
    if ($contra == $recontra) {
        $sql = "INSERT INTO clientes(nombre,nra,telefono,email,area,fecha_corte,rfc,dir,cp,nombre_representante,cargo,tel_representante,email_representante,user,pwd) VALUES ('$nombre','$nra','$tel','$email','$area','$fecha_corte','$rfc','$dir','$cp','$nombre_representante','$cargo','$tel_representante','$email_representante','$user','$contra')";
        $resultado = $conexion->query($sql);
        if ($resultado) {
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
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
