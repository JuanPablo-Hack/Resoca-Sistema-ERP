<?php
$id = $_GET['id'];
include 'php/conexion.php';
$sql = "SELECT * FROM cortes WHERE id='" . $id . "'";
$result = mysqli_query($conexion, $sql);
if ($Row = mysqli_fetch_array($result)) {
  $folio = $Row['folio'];

  $ticket = $Row['ticket'];
  $porcentaje = $Row['porcentaje'];
  $kg = $Row['kg'];
  $cantidad = $Row['cantidad'];
  $unidad = $Row['unidad'];
  $descripcion = $Row['descripcion'];
  $precio = $Row['precio'];
  $importe = $Row['importe'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'templates/head.php'; ?>

<body>
  <section id="container">
    <?php include 'templates/nav.php'; ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Editar Corte</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <h3>Datos del Servicio</h3>
              <hr>
              <form action="php/editar_corte.php" class="form-horizontal style-form" method="POST">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Indentificador</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="identificador" value="<?php echo $id; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">No. de Folio</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="folio" placeholder="<?php echo $folio; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">No. de ticket</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="ticket" placeholder="<?php echo $ticket; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">%</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="porcentaje" placeholder="<?php echo $porcentaje; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">KG</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kilos" placeholder="<?php echo $kg; ?>">
                  </div>
                </div>
                <h3>Datos de Facturación</h3>
                <hr>
                <form action="#" class="form-horizontal style-form">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cantidad total</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="cantidad" placeholder="<?php echo $cantidad; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Unidad</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="unidad" placeholder="<?php echo $unidad; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Descripción</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="descripcion" placeholder="<?php echo $descripcion; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Precio Unitario</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="precio" placeholder="<?php echo $precio; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Importe</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="importe" placeholder="<?php echo $importe; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Guardar</button>
                      <a href="listar_reportes.php" class="btn btn-theme04" type="button">Cancelar</a>
                    </div>
                  </div>


                </form>
            </div>

            <!-- col-lg-12-->
          </div>
          <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- DATE TIME PICKERS -->

        <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
        </div>
        <!-- row -->
      </section>
      <!-- /wrapper -->
    </section>
    <?php include 'templates/footer.php'; ?>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../assets/lib/jquery/jquery.min.js"></script>
  <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../assets/lib/jquery.scrollTo.min.js"></script>
  <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="../assets/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="../assets/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="../assets/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="../assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="../assets/lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="../assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="../assets/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="../assets/lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="../assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="../assets/lib/advanced-form-components.js"></script>

</body>

</html>