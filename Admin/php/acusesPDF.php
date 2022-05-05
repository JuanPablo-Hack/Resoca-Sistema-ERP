<?php
include_once 'conexion.php';

$id = $_POST['id'];

$orden = $conexion->query("SELECT * FROM acuses WHERE id = $id");
$ordenf = $orden->fetch_assoc();

$cliente = $conexion->query("SELECT * FROM clientes WHERE id = " . $ordenf['cliente']);
$clientef = $cliente->fetch_assoc();



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
        <img class="border border-dark" src="img/acusepdf.png" width="100%">
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
            <label for="" class="font-weight-bold">4-. Puesto: ' . utf8_encode($ordenf['puesto']) . '</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">5-. Manifiesto Relacionado: ' . utf8_encode($ordenf['manifiesto']) . '</label>
          </div>
        </div>
      </div>

      

      
      

      

     

      
      

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Descripción </label>
          </div>
          <div class="col-sm-12">
          
          <label for="" class="font-weight-bold"> ' . utf8_encode($ordenf['descripcion']) . '</label>
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
?>

