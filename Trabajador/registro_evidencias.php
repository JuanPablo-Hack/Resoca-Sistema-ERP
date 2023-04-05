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
    <?php include 'views/evidencias/menu.php'; ?>
    <?php include 'views/evidencias/agregar_evidencias.php'; ?>
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