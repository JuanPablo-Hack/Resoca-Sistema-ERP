<?php

require_once '../vendor/autoload.php';
include_once 'conexion.php';

$id = $_GET['manifiesto'];

$query = $conexion -> query("SELECT * FROM manifiestos");

$row = $query -> fetch_assoc();


$mpdf = new \Mpdf\Mpdf();



$html = '
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manifiesto</title>
</head>

<body>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    tr, td{
      padding: 5px 12px;
    }
  </style>

  <img src="../img/cabeceram.png" width="100%">

  <table border="1">
    <tbody>
    <tr style="background: #E8E8E8;">
        <th colspan="2">GENERADOR</th>
      </tr>
      <tr>
        <td>No. DE REGISTRO AMBIENTAL o No. DE REGISTRO DE EMPRESA GENERADORA:</td>
        <td>No. DE MANIFIESTO: '.$row['id'].'</td>
      </tr>
      <tr>
        <td colspan="2">
          RAZÓN SOCIAL DE LA EMPRESA GENERADORA:
          <br>
          DOMICILIO:
          <br>
          MUNICIPIO:
          <br>
          TELEFONO:
          <br>
          ESTADO:
        </td>
      </tr>
      <tr>
        <td>DESCRIPCIÓN (Nombre del Residuo y características):</td>
        <td>CONTENEDOR:
          <br>
          CANTIDAD: 
          <br>
          UNIDAD:
          <br>
          CAPACIDAD: 
          <br>
          TIPO: 
          <br>
          TOTAL DE RESIDUO VOL/PESO:
        </td>
      </tr>
      <tr>
        <td colspan="2">PRODUCTO UBICADO EN: </td>
      </tr>
      <tr>
        <td colspan="2">
          CERTIFICACIÓN DEL GENERADOR: <br>
          Declaro que el contenido de este lote está total y correctamente descrito mediante el nombre del Residuo, características,
          bien empacado, marcado y rotulado. Que se han previsto las condiciones de seguridad para su transporte por vía terrestre
          de acuerdo a la Legislación Nacional vigente.
          <br>
          <br>
          NOMBRE Y FIRMA DEL RESPONSABLE: ____________________________________________
          <br><br>
          CARGO: ____________________________________
        </td>
      </tr>
      <tr style="background: #E8E8E8;">
        <th colspan="2">TRANSPORTE</th>
      </tr>
      <tr>
        <td colspan="2">
          NOMBRE DE LA EMPRESA TRANSPORTISTA:
          <br>
          DOMICILIO:
          <br>
          No. DE AUTORIZACIÓN DE TRANSPORTE DE RESIDUOS:
          <br>
          No. DE REGISTRO DE LA SCT:
        </td>
      </tr>
      <tr>
        <td colspan="2">
          RECIBÍ LOS RESIDUOS DESCRITOS EN EL MANIFIESTO PARA SU TRANSPORTE:
          <br><br>
          NOMBRE:
          <br>
          CARGO:
          <br>
          FIRMA Y SELLO:      __________________________________________________
          <br>
          FECHA DE EMBARQUE:
        </td>
      </tr>
      <tr>
        <td colspan="2">
        RUTA DE LA EMPRESA GENERADORA HASTA SU ENTREGA:
        </td>
      </tr>
      <tr>
        <td colspan="2">
        TIPO DE VEHÍCULO:
        <br>
        No. DE PLACA:
        </td>
      </tr>
      <tr style="background: #E8E8E8;">
        <th colspan="2">DESTINATARIO</th>
      </tr>
      <tr>
        <td colspan="2">
        NOMBRE DE LA EMPRESA DESTINATARIA: 
        <br>
        DOMICILIO:
        <br>
        TELÉFONO:
        <br>
        No. AUTORIZACIÓN IMADES (*):
        <br>
        (*) Puede ser para coprocesamiento, tratamiento, almacenamiento, reciclaje y/o disposición final.
        </td>
      </tr>
      <tr>
        <td colspan="2">
        RECIBÍ LOS RESIDUOS DESCRITOS EN EL MANIFIESTO:
        <br>
        OBSERVACIONES:
        <br>
        NOMBRE: 
        <br>
        CARGO:
        <br>
        FECHA DE RECEPCIÓN:
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>
';

$mpdf->WriteHTML($html);
$mpdf->Output();
?>