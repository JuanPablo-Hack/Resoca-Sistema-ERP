<?php
$id = $_GET['id'];
include 'php/selects.php';
$Row = mysqli_fetch_array(get_orden($id));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'templates/head.php'; ?>
</head>

<body>
  <section id="container">
    <?php include 'templates/nav.php'; ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Editar Orden</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" id="EditarOrden">
                <h3>Datos del Servicio</h3>
                <hr>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Indentificador</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="identificador" value="<?php echo $Row['id']; ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Encargado</label>
                  <div class="col-sm-4">
                    <input type="text" name='encargado' class="form-control" value="<?php echo $Row['encargado']; ?>" ">
                  </div>
                </div>
                <div class=" form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cargo</label>
                    <div class="col-sm-4">
                      <input type="text" name='cargo' class="form-control" value="<?php echo $Row['cargo']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Estado de la Orden</label>
                    <div class="col-sm-4">
                      <input type="text" name='estado' class="form-control" value="<?php echo $Row['estado']; ?>">
                  </div>
                </div>

                <div class=" form-group">
                      <label class="control-label col-md-3">Fecha de programación</label>
                      <div class="col-md-3 col-xs-11">
                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                          <input type="text" readonly="" value="<?php echo $Row['fecha']; ?>" readonly size=" 16" name='fecha' class="form-control">
                          <span class="input-group-btn add-on">
                            <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                          </span>
                        </div>
                        <span class="help-block">Select date</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Hora de Programación</label>
                      <div class="col-sm-4">
                        <input type="text" name='hora' class="form-control" value="<?php echo $Row['hora']; ?>">
                      </div>
                    </div>
                    <div class="row mt"></div>
                    <h3>Datos del Residuo</h3>
                    <hr>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Cantidad</label>
                      <div class="col-sm-4">
                        <input type="text" name='cantidad' class="form-control" value="<?php echo $Row['cantidad']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Unidad</label>
                      <div class="col-sm-4">
                        <input type="text" name='unidad_residuo' class="form-control" value="<?php echo $Row['unidad']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Concepto</label>
                      <div class="col-sm-4">
                        <input type="text" name='concepto' class="form-control" value="<?php echo $Row['concepto']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Manifiesto</label>
                      <div class="col-sm-4">
                        <input type="text" name='manifiesto' class="form-control" value="<?php echo $Row['manifiesto']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Factura</label>
                      <div class="col-sm-4">
                        <input type="text" name='factura' class="form-control" value="<?php echo $Row['factura']; ?>">
                      </div>
                    </div>
                    <div class="row mt"></div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-theme" type="submit">Guardar</button>
                        <a href="listar_orden.php" class="btn btn-theme04" type="button">Cancelar</a>
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
  <script src="../assets/lib/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/controller.js"></script>

</body>

</html>