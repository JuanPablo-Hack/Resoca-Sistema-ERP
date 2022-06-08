<?php
$id = $_GET['id'];
include 'php/conexion.php';
$sql = "SELECT * FROM ordenes WHERE id='" . $id . "'";
$result = mysqli_query($conexion, $sql);
if ($Row = mysqli_fetch_array($result)) {
  $folio = $Row['id'];
}
$sql2 = "SELECT * FROM catalogo";
$result2 = mysqli_query($conexion, $sql2);
$result3 = mysqli_query($conexion, $sql2);
$result4 = mysqli_query($conexion, $sql2);
$result5 = mysqli_query($conexion, $sql2);
$result6 = mysqli_query($conexion, $sql2);
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
        <h3><i class="fa fa-angle-right"></i> Registro de Evidencias de Servicio</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" enctype="multipart/form-data" id="CrearEvidencia">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Folio Relacionado</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="folio" value="<?php echo $folio; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ticket</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="ticket" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cantidad de Residuo Recolectado</label>
                  <div class="col-sm-4">
                    <select class="form-control" onchange="cambiar_conceptos()" name="num_concepto" id="concepto">
                      <option value="0">- Selecciona la cantidad -</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div>
                <div class="concepto_1" style="display: none;" id="concepto_1">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="concepto_1">
                        <option value="0">-</option>
                        <?php
                        while ($Row1 = mysqli_fetch_array($result2)) {
                        ?>
                          <option value=<?php echo $Row1['clave']; ?>><?php echo $Row1['nombre']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cantidad de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="cantidad_1" required>
                    </div>
                  </div>

                </div>
                <div class="concepto_2" style="display: none;" id="concepto_2">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="concepto_2">
                        <option value="0">-</option>
                        <?php
                        while ($Row1 = mysqli_fetch_array($result3)) {
                        ?>
                          <option value=<?php echo $Row1['clave']; ?>><?php echo $Row1['nombre']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cantidad de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="cantidad_2">
                    </div>
                  </div>
                </div>
                <div class="concepto_3" style="display: none;" id="concepto_3">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="concepto_3">
                        <option value="0">-</option>
                        <?php
                        while ($Row1 = mysqli_fetch_array($result4)) {
                        ?>
                          <option value=<?php echo $Row1['clave']; ?>><?php echo $Row1['nombre']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cantidad de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="cantidad_3">
                    </div>
                  </div>
                </div>
                <div class="concepto_4" style="display: none;" id="concepto_4">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="concepto_4">
                        <option value="0">-</option>
                        <?php
                        while ($Row1 = mysqli_fetch_array($result5)) {
                        ?>
                          <option value=<?php echo $Row1['clave']; ?>><?php echo $Row1['nombre']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cantidad de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="cantidad_4">
                    </div>
                  </div>
                </div>
                <div class="concepto_5" style="display: none;" id="concepto_5">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="concepto_5">
                        <option value="0">-</option>
                        <?php
                        while ($Row1 = mysqli_fetch_array($result6)) {
                        ?>
                          <option value=<?php echo $Row1['clave']; ?>><?php echo $Row1['nombre']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cantidad de Residuo Recolectado</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="cantidad_5">
                    </div>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="ccomment" class="col-sm-2 col-sm-2 control-label">Comentarios</label>
                  <div class="col-sm-4">
                    <textarea class="form-control " id="ccomment" name="comentarios" required></textarea>
                  </div>
                </div>
                <div class="form-group last">
                  <label class="control-label col-md-3">Subir Imágenes</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" class="form-control" id="image" name="image" multiple>
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>
                    <span class="label label-info">NOTA!</span>
                    <span>
                      No se te olvide adjuntar todas las fotos de las evidencias del servicio.
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Subir Evidencias</button>
                    <a href="listar_combustible.php" class="btn btn-theme04" type="button">Cancelar</a>
                  </div>
                </div>
            </div>
            </form>
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
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <?php include 'templates/footer.php'; ?>
    <!--footer end-->
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
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document
        .getElementById("CrearEvidencia")
        .addEventListener("submit", crearEvidencia);
    });
    async function crearEvidencia(e) {
      e.preventDefault();
      var form = document.getElementById("CrearEvidencia");
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: "btn btn-success",
          cancelButton: "btn btn-danger",
        },
        buttonsStyling: false,
      });
      swalWithBootstrapButtons
        .fire({
          title: "Estas seguro que la información es la correcta?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Si, agregar evidencia",
          cancelButtonText: "No, cancelar!",
          reverseButtons: true,
        })
        .then((result) => {
          if (result.isConfirmed) {
            let data = new FormData(form);
            data.append("accion", "agregar");
            fetch("php/evidencias_controller.php", {
                method: "POST",
                body: data,
              })
              .then((result) => result.text())
              .then((result) => {
                if (result == 1) {
                  swalWithBootstrapButtons.fire(
                    "Agregado!",
                    "La orden ha sido agregado en la base de datos.",
                    "success"
                  );
                  form.reset();
                  setTimeout(function() {
                    location.reload();
                  }, 2000);
                } else {
                  swalWithBootstrapButtons.fire(
                    "Error",
                    "Hemos tenido un error a la base de datos o la conexión.",
                    "error"
                  );
                  // setTimeout(function() {
                  //   location.reload();
                  // }, 2000);
                }
              });
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              "Cancelado",
              "Revise su información de nuevo",
              "error"
            );
          }
        });
    }
  </script>
  <script type="text/javascript">
    function cambiar_conceptos() {
      var x = document.getElementById("concepto").value;
      switch (x) {
        case "1":
          document.getElementById("concepto_1").style.display = "inherit";
          document.getElementById("concepto_2").style.display = "none";
          document.getElementById("concepto_3").style.display = "none";
          document.getElementById("concepto_4").style.display = "none";
          document.getElementById("concepto_5").style.display = "none";
          break;
        case "2":
          document.getElementById("concepto_1").style.display = "inherit";
          document.getElementById("concepto_2").style.display = "inherit";
          document.getElementById("concepto_3").style.display = "none";
          document.getElementById("concepto_4").style.display = "none";
          document.getElementById("concepto_5").style.display = "none";
          break;
        case "3":
          document.getElementById("concepto_1").style.display = "inherit";
          document.getElementById("concepto_2").style.display = "inherit";
          document.getElementById("concepto_3").style.display = "inherit";
          document.getElementById("concepto_4").style.display = "none";
          document.getElementById("concepto_5").style.display = "none";
          break;
        case "4":
          document.getElementById("concepto_1").style.display = "inherit";
          document.getElementById("concepto_2").style.display = "inherit";
          document.getElementById("concepto_3").style.display = "inherit";
          document.getElementById("concepto_4").style.display = "inherit";
          document.getElementById("concepto_5").style.display = "none";
          break;
        case "5":
          document.getElementById("concepto_1").style.display = "inherit";
          document.getElementById("concepto_2").style.display = "inherit";
          document.getElementById("concepto_3").style.display = "inherit";
          document.getElementById("concepto_4").style.display = "inherit";
          document.getElementById("concepto_5").style.display = "inherit";
          break;
        case "0":
          document.getElementById("concepto_1").style.display = "none";
          document.getElementById("concepto_2").style.display = "none";
          document.getElementById("concepto_3").style.display = "none";
          document.getElementById("concepto_4").style.display = "none";
          document.getElementById("concepto_5").style.display = "none";

      }
    }
  </script>

</body>

</html>