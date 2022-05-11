<?php
include 'php/conexion.php';
include 'php/selects.php';
$Row = mysqli_fetch_array(get_confirmacion($_GET['id']));
$sql = "SELECT * FROM ordenes";
$result = mysqli_query($conexion, $sql);
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
              <form class="form-horizontal style-form" enctype="multipart/form-data" id="EditarConfirmacion">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Indentificador</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="identificador" value="<?php echo $Row['id']; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Folio de Orden</label>
                  <div class="col-sm-4">
                    <select class="form-control" name='folio'>
                      <option value="<?php echo $Row['id_orden']; ?>"><?php echo "FSO-22-" . $Row['id_orden']; ?></option>
                      <?php
                      while ($Row1 = mysqli_fetch_array($result)) {
                      ?>
                        <option value=<?php echo $Row1['id']; ?>><?php echo "FSO-22-" . $Row1['id']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nombre de la persona que autoriza</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nombre" value="<?php echo $Row['nombre']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cargo de la persona que autoriza</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="cargo" value="<?php echo $Row['cargo']; ?>" required>
                  </div>
                </div>
                <div class="form-group last">
                  <label class="control-label col-md-3">Subir del imagen del patio (Sin Basura)</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="../confirmaciones/<?php echo $Row['id_orden'] . "/" . $Row['foto'] ?>" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" class="form-control" id="image" name="foto1" multiple>
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
                <div class="form-group last">
                  <label class="control-label col-md-3">Subir Imágenes del Procesos (Recolección de Basura)</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="../confirmaciones/<?php echo $Row['id_orden'] . "/" . $Row['foto1'] ?>" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" class="form-control" id="image" name="foto2" multiple>
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
                <div class="form-group last">
                  <label class="control-label col-md-3">Subir del imagen del patio (Con Basura)</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="../confirmaciones/<?php echo $Row['id_orden'] . "/" . $Row['foto2'] ?>" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" class="form-control" id="image" name="foto3" multiple>
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
                <div class="form-group last">
                  <label class="control-label col-md-3">Subir imagen del Vehículo (Cargado con Basura)</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="../confirmaciones/<?php echo $Row['id_orden'] . "/" . $Row['foto3'] ?>" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" class="form-control" id="image" name="foto4" multiple>
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
                <div class="form-group last">
                  <label class="control-label col-md-3">Firma del Cliente</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="../firmas/<?php echo $Row['ruta']; ?>" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme">Confirmar</button>
                    <button class="btn btn-theme04" id="btnLimpiar">Cancelar</button>
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
  <script type="text/javascript" src="../assets/ib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
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
        .getElementById("EditarConfirmacion")
        .addEventListener("submit", editarconfirmar);
    });

    async function editarconfirmar(e) {
      e.preventDefault();
      var form = document.getElementById("EditarConfirmacion");
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
          confirmButtonText: "Si, editar confirmación",
          cancelButtonText: "No, cancelar!",
          reverseButtons: true,
        })
        .then((result) => {
          if (result.isConfirmed) {
            var form = document.getElementById("EditarConfirmacion");
            const fd = new FormData(form);
            fd.append("accion", "editar");
            fetch("php/confirmacion_controller.php", {
                method: "POST",
                body: fd,
              })
              .then((result) => result.text())
              .then((result) => {
                if (result == 1) {
                  swalWithBootstrapButtons.fire(
                    "Agregado!",
                    "La confirmacion ha sido editada en la base de datos.",
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
                  // form.reset();
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
</body>

</html>