<?php
$id = $_GET['id'];
include 'php/conexion.php';
// $sql="SELECT * FROM manifiestos WHERE id='".$id."'";
// $result = mysqli_query($conexion,$sql);
// if ($Row = mysqli_fetch_array($result))
// {
//   $nombre= $Row['nombre'];

//   $capacidad=$Row['capacidad'];
//   $tipo=$Row['tipo'];
//   $totalresiduo=$Row['totalresiduo'];
//   $volpeso=$Row['volpeso'];
//   $fecha=$Row['fecha'];
//   $unidad=$Row['unidad'];
//   $nombrerecibe=$Row['nombrerecibe'];
//   $estado=$Row['estado'];

// }
$sqlManififesto = "SELECT * FROM manifiestos WHERE id = " . $_GET['id'];
$resultManifiesto = mysqli_query($conexion, $sqlManififesto);
$rowManifiesto = mysqli_fetch_array($resultManifiesto);
$clienteOption = "SELECT * FROM clientes WHERE id =" . $rowManifiesto['id_cliente'];
$resultOption = mysqli_query($conexion, $clienteOption);
$rowOption = mysqli_fetch_array($resultOption);
$sql = "SELECT * FROM clientes WHERE id !=" . $rowManifiesto['id_cliente'];
$result = mysqli_query($conexion, $sql);
// $sql2="SELECT * FROM unidad_medidas";
// $result2 = mysqli_query($conexion,$sql2);
// $sql3="SELECT * FROM unidades";
// $result3 = mysqli_query($conexion,$sql3);

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
        <h3><i class="fa fa-angle-right"></i> Editar Manifiesto</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">

              <form enctype="multipart/form-data" action="php/editar_manifiesto.php" class="form-horizontal style-form" method="POST">
                <div class="form-group">

                  <div class="col-sm-4">
                    <input type="hidden" class="form-control" name="identificador" value="<?php echo $id; ?>" readonly>
                    <input type="hidden" class="form-control" name="cliente" value="<?php echo $rowManifiesto['id_cliente']; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cliente</label>
                  <div class="col-sm-4">
                    <select class="form-control" name='nombre_cliente'>
                      <option value="<?php echo $rowOption['id']; ?>" selected><?php echo $rowOption['nombre']; ?></option>
                      <?php
                      while ($Row1 = mysqli_fetch_array($result)) {
                      ?>
                        <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group ">
                  <label for="firstname" class="control-label col-lg-2">Titulo del Manifiesto</label>
                  <div class="col-lg-10">
                    <input class=" form-control" value="<?php echo $rowManifiesto['titulo'] ?>" id="firstname" name="titulo" type="text" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="lastname" class="control-label col-lg-2">Descripción</label>
                  <div class="col-lg-10">
                    <input class=" form-control" value="<?php echo $rowManifiesto['descripcion'] ?>" id="lastname" name="descripcion" type="text" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Adjunta el manifiesto</label>
                  <div class="controls col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select file</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="archivo" />
                      </span>
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Guardar</button>
                    <a href="listar_manifiesto.php" class="btn btn-theme04" type="button">Cancelar</a>
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
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