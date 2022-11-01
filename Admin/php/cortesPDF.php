<?php
include 'conexion.php';
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$nombre_cliente = $_POST['nombre_cliente'];
$sql = "SELECT * FROM evidencias WHERE fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND id_cliente = '$nombre_cliente'";
$result = mysqli_query($conexion, $sql);
$total_residuos = 0;
while ($row = mysqli_fetch_array($result)) {
    $particion = explode(',', $row['arreglo']);
    $total_residuos += $particion[1];
}
$precio_concepto = 30;
$precio = $total_residuos * $precio_concepto;
$IVA = $precio * .16;
$total = $precio + $IVA;
echo '
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Example 2</title>
</head>

<body>

  <style>
      @font-face {
        font-family: SourceSansPro;
        src: url(SourceSansPro-Regular.ttf);
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }

    a {
        color: #0087C3;
        text-decoration: none;
    }

    body {
        position: relative;
        width: 100%;
        height: 100%;
        margin: 0 auto;
        color: #555555;
        background: #FFFFFF;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-family: SourceSansPro;
    }

    header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #AAAAAA;
    }

    #logo {
        float: left;
        margin-top: 8px;
    }

    #logo img {
        height: 70px;
    }

    #company {
        float: right;
        text-align: right;
    }

    #details {
        margin-bottom: 50px;
    }

    #client {
        padding-left: 6px;
        border-left: 6px solid #0087C3;
        float: left;
    }

    #client .to {
        color: #777777;
    }

    h2.name {
        font-size: 1.4em;
        font-weight: normal;
        margin: 0;
    }

    #invoice {
        float: right;
        text-align: right;
    }

    #invoice h1 {
        color: #0087C3;
        font-size: 2.4em;
        line-height: 1em;
        font-weight: normal;
        margin: 0 0 10px 0;
    }

    #invoice .date {
        font-size: 1.1em;
        color: #777777;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
    }

    table th,
    table td {
        padding: 20px;
        background: #EEEEEE;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    table th {
        white-space: nowrap;
        font-weight: normal;
    }

    table td {
        text-align: right;
    }

    table td h3 {
        color: black;
        font-size: 1.2em;
        font-weight: normal;
        margin: 0 0 0.2em 0;
    }

    table .no {
        color: #FFFFFF;
        font-size: 1.6em;
        background: #b23923;
    }

    table .desc {
        text-align: left;
    }

    table .unit {
        background: #DDDDDD;
    }

    table .qty {}

    table .total {
        background: #d10e0e;
        color: #FFFFFF;
    }

    table td.unit,
    table td.qty,
    table td.total {
        font-size: 1.2em;
    }

    table tbody tr:last-child td {
        border: none;
    }

    table tfoot td {
        padding: 10px 20px;
        background: #FFFFFF;
        border-bottom: none;
        font-size: 1.2em;
        white-space: nowrap;
        border-top: 1px solid #AAAAAA;
    }

    table tfoot tr:first-child td {
        border-top: none;
    }

    table tfoot tr:last-child td {
        color: black;
        font-size: 1.4em;
        border-top: 1px solid red;
    }

    table tfoot tr td:first-child {
        border: none;
    }

    #thanks {
        font-size: 2em;
        margin-bottom: 50px;
    }

    #notices {
        padding-left: 6px;
        border-left: 6px solid #0087C3;
    }

    #notices .notice {
        font-size: 1.2em;
    }

    footer {
        color: #777777;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #AAAAAA;
        padding: 8px 0;
        text-align: center;
    }
  </style>

  <header class="clearfix">
        <div id="logo">
            <img src="../assets/img/logo_factura.png">
        </div>
        <div id="company">
            <h2 class="name">Representaciones SOCA del pácifico</h2>
            <div>455 Foggy Heights, AZ 85004, US</div>
            <div>(602) 519-0450</div>
            <div><a href="mailto:company@example.com">resoca@gruposoca.com.mx</a></div>
        </div>
        </div>
    </header>
    <main>
        <div id="details" class="clearfix">
            <div id="client">
                <div class="to">Corte de Servicios:</div>
                <h2 class="name">Vida del Mar</h2>
                <div class="address">796 Silver Harbour, TX 79273, US</div>
                <div class="email"><a href="mailto:john@example.com">vdm@gmail.com</a></div>
            </div>
            <div id="invoice">
                <h1>Corte Junio 2022</h1>
                <div class="date">Inicio de Corte: ' . $fecha_inicio . '</div>
                <div class="date">Termino de Corte: ' . $fecha_fin . '</div>
            </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th class="no">#</th>
                    <th class="desc">DESCRIPCION</th>
                    <th class="unit">KG</th>
                    <th class="qty">PRECIO / KG</th>
                    <th class="total">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="no">01</td>
                    <td class="desc">
                        <h3>RSU</h3>Recolección de residuous sólidos urbanos</td>
                    <td class="unit">' . $total_residuos . '</td>
                    <td class="qty">' . $precio_concepto . '</td>
                    <td class="total">' . $precio . '</td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">SUBTOTAL</td>
                    <td>$' . $precio . '</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">IVA 16%</td>
                    <td>$' . $IVA . '</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Precio Total</td>
                    <td>$' . $total . '</td>
                </tr>
            </tfoot>
        </table>
        <div id="thanks">Muchas gracias por su elegirnos!</div>
        <div id="notices">
            <div>AVISO:</div>
            <div class="notice">Se aplicará un cargo financiero del 1,5 % sobre los saldos pendientes de pago después de 30 días.</div>
        </div>
    </main>

</body>

</html>
';