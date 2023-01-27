<?php
switch ($_POST['accion']) {
    case 'agregar':
        if ($_POST['forma_cobrar'] == 1) {
            CrearCortePorRangoDeFechas($_POST['nombre_cliente'], $_POST['forma_cobrar'], $_POST['fecha_inicial'] . ' - ' . $_POST['fecha_final']);
        } else {
            CrearCortePorDiasCobrados($_POST['nombre_cliente'], $_POST['forma_cobrar'], $_POST['días_realizados']);
        }
        // case 'editar':
        //     editar_cliente($_POST['nombre'], $_POST['nra'], $_POST['telefono'], $_POST['email'], $_POST['area'], $_POST['fecha'], $_POST['rfc'], $_POST['direccion'], $_POST['cp'], $_POST['nombre_representante'], $_POST['cargo'], $_POST['tel_representante'], $_POST['email_representante'], $_POST['user'], sha1($_POST['contra']), sha1($_POST['recontra']));
        //     break;
        // case 'eliminar':
        //     eliminar_cliente($_POST['id']);
        //     break;
}
function CrearCortePorRangoDeFechas($id_cliente, $id_concepto, $rango_fechas)
{
    include "conexion.php";
    $sql = "INSERT INTO `cortes` (`id_cliente`, `id_conceptos_cobros`, `rango_fechas`) VALUES ('$id_cliente', '$id_concepto', '$rango_fechas')";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        echo 2;
    }
    echo 1;
}
function CrearCortePorDiasCobrados($id_cliente, $id_concepto, $dias_cobrados)
{
    include "conexion.php";
    $sql = "INSERT INTO `cortes` (`id_cliente`, `id_conceptos_cobros`, `dias_cobrados`) VALUES ('$id_cliente', '$id_concepto', '$dias_cobrados')";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        echo 2;
    }
    echo 1;
}
