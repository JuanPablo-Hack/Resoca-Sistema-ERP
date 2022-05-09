<?php
$id = $_GET['id'];
include 'php/conexion.php';
$sql = "SELECT * FROM registros_mantenimiento WHERE id='" . $id . "'";
$result = mysqli_query($conexion, $sql);
if ($Row = mysqli_fetch_array($result)) {
  $unidad = $Row['unidad'];

  $taller = $Row['taller'];
  $nofactura = $Row['nofactura'];
  $descripcion = $Row['descripcion'];
  $fecha = $Row['fecha'];
  $km = $Row['km'];
}
$sql2 = "SELECT * FROM unidades";
$result2 = mysqli_query($conexion, $sql2);
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
        <h3><i class="fa fa-angle-right"></i> Editar Mantenimiento</h3>
        <div class="row mt">
          <div class="col-lg-12">

            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="EditarMantenimiento">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Identificador</label>
                    <div class="col-sm-4">
                      <input type="text" name='identificador' class="form-control" value="<?php echo $id; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Unidad Asignada</label>
                    <div class="col-sm-4">
                      <select class="form-control" name='unidad'>
                        <option value="<?php echo $unidad; ?>"></option>
                        <?php
                        while ($Row1 = mysqli_fetch_array($result2)) {
                        ?>
                          <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['modelo']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nombre de Taller</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="taller" value="<?php echo $taller; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. de Factura</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="factura" value="<?php echo $nofactura; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Descripción</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion; ?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3">Fecha de Proximo Servicio</label>
                    <div class="col-md-3 col-xs-11">
                      <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                        <input type="text" value="<?php echo $fecha; ?>" size="16" class="form-control" name="fecha">
                        <span class="input-group-btn add-on">
                          <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                      </div>
                      <span class="help-block">Select date</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Kilometraje</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="km" value="<?php echo $km; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Crear</button>
                      <a href="listar_mantenimientos.php" class="btn btn-theme04" type="button">Cancelar</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->

        <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
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
  <script src="../assets/lib/form-validation-script.js"></script>
  <script src="../assets/lib/sweetalert2/sweetalert2.all.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document
        .getElementById("EditarMantenimiento")
        .addEventListener("submit", editarMantenimiento);
    });
    async function editarMantenimiento(e) {
      e.preventDefault();
      console.log("Editar Cliente");
      var form = document.getElementById("EditarMantenimiento");
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
          confirmButtonText: "Si, editar mantenimiento",
          cancelButtonText: "No, cancelar!",
          reverseButtons: true,
        })
        .then((result) => {
          if (result.isConfirmed) {
            let data = new FormData(form);
            data.append("accion", "editar");
            fetch("php/mantenimiento_controller.php", {
                method: "POST",
                body: data,
              })
              .then((result) => result.text())
              .then((result) => {
                if (result == 1) {
                  swalWithBootstrapButtons.fire(
                    "Agregado!",
                    "El mantenimiento ha sido actualizado en la base de datos.",
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
</body>

</html>