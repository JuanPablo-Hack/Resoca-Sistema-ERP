<?php

switch ($_POST['accion']) {
    case 'agregar':
        switch ($_POST['num_concepto']) {
            case 1:
                $arreglo = $_POST['concepto_1'] . "," . $_POST['cantidad_1'];
                break;
            case 2:
                $arreglo = $_POST['concepto_1'] . "," . $_POST['cantidad_1'] . ',' . $_POST['concepto_2'] . "," . $_POST['cantidad_2'];
                break;
            case 3:
                $arreglo = $_POST['concepto_1'] . "," . $_POST['cantidad_1'] . ',' . $_POST['concepto_2'] . "," . $_POST['cantidad_2'] . ',' . $_POST['concepto_3'] . "," . $_POST['cantidad_3'];
                break;
            case 4:
                $arreglo = $_POST['concepto_1'] . "," . $_POST['cantidad_1'] . ',' . $_POST['concepto_2'] . "," . $_POST['cantidad_2'] . ',' . $_POST['concepto_3'] . "," . $_POST['cantidad_3'] . ',' . $_POST['concepto_4'] . ',' . $_POST['cantidad_4'];
                break;
            case 5:
                $arreglo = $_POST['concepto_1'] . "," . $_POST['cantidad_1'] . ',' . $_POST['concepto_2'] . "," . $_POST['cantidad_2'] . ',' . $_POST['concepto_3'] . "," . $_POST['cantidad_3'] . ',' . $_POST['concepto_4'] . ',' . $_POST['cantidad_4'] . ',' . $_POST['concepto_5'] . ',' . $_POST['cantidad_5'];
                break;
        }
        agregar_evidencia($_POST['folio'], $_POST['ticket'], $_POST['fecha_evidencia'], $_POST['num_concepto'], $arreglo,  $_FILES['image']['name'], $_POST['comentarios']);
        break;
        // case 'editar':
        //     editar_evidencia($_POST['identificador'], $_POST['folio'], $_POST['ticket'], $_POST['num_concepto'], $arreglo,  $_FILES['image']['name'], $_POST['comentarios']);
        //     break;
    case 'eliminar':
        eliminar_evidencia($_POST['id']);
        break;
}
function agregar_evidencia($folio, $ticket, $fecha, $num_conceptos, $arreglo, $foto, $comentarios)
{
    include './conexion.php';
    agregar_imagen($folio);
    $sql = "INSERT INTO evidencias_2022 (folio,fecha,ticket, num_conceptos,arreglo, comentarios, foto) VALUES ( '$folio','$fecha
    ','$ticket', '$num_conceptos','$arreglo', '$comentarios', '$foto');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 0;
    }
}
// function editar_evidencia($id, $folio, $ticket, $num_conceptos, $arreglo, $foto, $comentarios)
// {
//     include './conexion.php';
//     agregar_imagen($folio);
//     $sql = "UPDATE evidencias SET folio = '$folio', ticket = '$ticket',num_conceptos = '$num_conceptos',arreglo = '$arreglo', foto = '$foto', comentarios = '$comentarios' WHERE id = $id ";
//     $resultado = $conexion->query($sql);
//     if ($resultado) {
//         echo 1;
//     } else {
//         echo 0;
//     }
// }
function eliminar_evidencia($id)
{
    include './conexion.php';
    $sql = "DELETE FROM evidencias WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}

function agregar_imagen($carpeta)
{
    $ruta_manifiestos = '../../evidencias_2022/';
    $ruta_manifiestos_cliente = $ruta_manifiestos . $carpeta . "/";

    if (!file_exists($ruta_manifiestos)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }
    if (!file_exists($ruta_manifiestos_cliente)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }

    move_uploaded_file($_FILES['image']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['image']['name']);
}
