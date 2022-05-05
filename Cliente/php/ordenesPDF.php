<?php
include_once 'conexion.php';
$id = $_POST['id'];

$orden = $conexion->query("SELECT * FROM ordenes WHERE id = $id");
$ordenf = $orden->fetch_assoc();

$cliente = $conexion->query("SELECT * FROM clientes WHERE id = " . $ordenf['cliente']);
$clientef = $cliente->fetch_assoc();

$servicio = $conexion->query("SELECT * FROM servicios WHERE id = " . $ordenf['servicio']);
$serviciof = $servicio->fetch_assoc();

$unidad = $conexion->query("SELECT * FROM unidades WHERE id = " . $ordenf['unidadasig']);
$unidadf = $unidad->fetch_assoc();

echo '
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>

  <style>
    body {
      position: absolute;
      width: 100%;
      height: 100%;
      font-size: 13px;
      font-family: "Roboto", sans-serif;
    }

    .titulos {
      background: rgb(189, 189, 189) !important;
    }
  </style>

  <div class="">
    <div class="m-2 p-3 row border border-dark bg-secondary">
      <div class="col-sm-12 mb-1 mx-auto">
        <img class="border border-dark" src="img/orden_servicio.png" width="100%">
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">1-. N° de Orden: ' . $ordenf['id'] . '</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">3-. Fecha: ' . strftime('%d-%m-%Y', strtotime($ordenf['creado'])) . '</label>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">2-. Autoriza: ' . utf8_encode($ordenf['encargado']) . '</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">4-. Puesto: ' . utf8_encode($ordenf['cargo']) . '</label>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark text-center titulos">
        <label for="" class="font-weight-bold">5-. Empresa Generadora</label>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark text-center titulos">
        <label for="" class="font-weight-bold">6-. Tipo de Servicio</label>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Nombre: ' . utf8_encode($clientef['nombre']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Domicilio: ' . utf8_encode($clientef['dir']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Ciudad: </label><br>
            <label for="" class="font-weight-bold my-2">Teléfono: ' . $clientef['telefono'] . '</label><br>
            <label for="" class="font-weight-bold my-2">Área: ' . utf8_encode($clientef['area']) . '</label><br>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Tipo: ' . utf8_encode($serviciof['tipo']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Concepto: ' . utf8_encode($serviciof['nombre']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Otro (especifique): </label><br>
            <label for="" class="font-weight-bold my-2">Indicaciones especiales del servicio: ' . utf8_encode($serviciof['descripcion']) . '</label><br>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">7-. Hora programada del servicio </label>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Hora programada: ' . strftime('%d-%m-%Y', strtotime($ordenf['fecha'])) . '</label><br>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Duración: </label><br>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Inició: </label><br>
            <label for="" class="font-weight-bold my-2">Terminó: </label>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Se cumplió
              el horario: <br>
              Si ( )
              No ( )
            </label>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">8-. Datos del Personal SOCA</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Operador: ' . utf8_encode($serviciof['operador']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Auxiliar: ' . utf8_encode($serviciof['auxiliar']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Supervisor: ' . utf8_encode($serviciof['supervisor']) . '</label>
          </div>
        </div>
      </div>

      <div class="col-sm-11 mx-auto my-2 border border-dark text-center titulos">
        <label for="" class="font-weight-bold">9-. Características del Residuo</label>
      </div>

      <div class="col-sm-11 mx-auto my-2 border border-dark text-center">
        <div class="row titulos">
          <div class="col-sm-2 border-bottom border-right border-dark text-center titulos">
            <label for="" class="font-weight-bold">Cantidad </label>
          </div>
          <div class="col-sm-1 border-bottom border-dark border-right text-center titulos">
            <label for="" class="font-weight-bold">Unidad</label>
          </div>
          <div class="col-sm-6 border-bottom border-dark border-right text-center titulos">
            <label for="" class="font-weight-bold">Concepto </label>
          </div>
          <div class="col-sm-2 border-bottom border-dark border-right text-center mx-auto titulos">
            <label for="" class="font-weight-bold">Manifiesto</label>
          </div>
          <div class="col-sm-1 border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Factura</label>
          </div>
        </div>
        <div class="row bg-light">
          <div class="col-sm-2 border-right border-dark text-center">
            <label for="" class="font-weight-bold">' . $ordenf['cantidad'] . '</label>
          </div>
          <div class="col-sm-1 border-dark border-right text-center">
            <label for="" class="font-weight-bold">' . $ordenf['unidad'] . '</label>
          </div>
          <div class="col-sm-6 border-dark border-right text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($ordenf['concepto']) . '</label>
          </div>
          <div class="col-sm-2 border-dark border-right text-center">
            <label for="" class="font-weight-bold">' . $ordenf['manifiesto'] . '</label>
          </div>
          <div class="col-sm-1 border-dark text-center">
            <label for="" class="font-weight-bold">' . $ordenf['factura'] . '</label>
          </div>
        </div>
        <div class="row bg-light">
          <div class="col-sm-2 border-top border-bottom border-right border-dark text-center">
            <label for="" class="font-weight-bold"> </label>
          </div>
          <div class="col-sm-1 border-top border-bottom border-dark border-right text-center">
            <label for="" class="font-weight-bold"></label>
          </div>
          <div class="col-sm-6 border-top border-bottom border-dark border-right text-center">
            <label for="" class="font-weight-bold"></label>
          </div>
          <div class="col-sm-2 border-top border-bottom border-dark border-right text-center">
            <label for="" class="font-weight-bold"></label>
          </div>
          <div class="col-sm-1 border-top border-bottom border-dark text-center">
            <label for="" class="font-weight-bold"></label>
          </div>
        </div>
        <div class="row bg-light">
          <div class="col-sm-2 border-right border-dark text-center">
            <label for="" class="font-weight-bold"> </label>
          </div>
          <div class="col-sm-1 border-dark border-right text-center">
            <label for="" class="font-weight-bold"></label>
          </div>
          <div class="col-sm-6 border-dark border-right text-center">
            <label for="" class="font-weight-bold"></label>
          </div>
          <div class="col-sm-2 border-dark border-right text-center">
            <label for="" class="font-weight-bold"></label>
          </div>
          <div class="col-sm-1 border-dark text-center">
            <label for="" class="font-weight-bold"></label>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">10-. Datos del vehículo de servicio </label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Vehículo: ' . utf8_encode($unidadf['modelo']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Placas: ' . $unidadf['placas'] . '</label><br>
            <label for="" class="font-weight-bold my-2">Otros: ' . utf8_encode($unidadf['tipounidad']) . '</label>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">11-. Datos del destino final</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Nombre: ' . utf8_encode($serviciof['destinofinal']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Ubicación: ' . utf8_encode($serviciof['ubicacion']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Otros: </label>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">12-. Herramientas y materiales a utilizar </label>
          </div>
          <div class="col-sm-12">
          <label for="" class="font-weight-bold">' . utf8_encode($serviciof['material']) . '</label><br>
          <label for="" class="font-weight-bold">Otros: </label>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">13-. Equipo de seguridad necesario</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">' . utf8_encode($serviciof['equipo']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Otros: </label>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">14-. Conformidad del Generador con el servicio: </label>
          </div>
          <div class="col-sm-12 mt-1">
            <label for="" class="font-weight-bold">Nombre: </label><br>
            <label for="" class="font-weight-bold">Firma: </label><br>
            <label for="" class="font-weight-bold">Puesto: </label><br>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">15-. Ejecución del servicio por Representaciones Soca Del Pacifico</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Nombre y firma del
              Operador: </label><br>
            <label for="" class="font-weight-bold my-2">Nombre del
              Supervisor: </label><br>
            <label for="" class="font-weight-bold my-2">Firma del Supervisor: </label>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">16-. Observaciones del Generador:</label>
          </div>
          <div class="col-sm-12">
            <div class="row bg-light">
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">17-. Observaciones del transportista SOCA:</label>
          </div>
          <div class="col-sm-12">
            <div class="row bg-light">
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
';
