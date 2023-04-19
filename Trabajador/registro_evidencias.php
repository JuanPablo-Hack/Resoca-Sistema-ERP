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
  </section>
  <script src="../assets/lib/jquery/jquery.min.js"></script>
  <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../assets/lib/jquery.scrollTo.min.js"></script>
  <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../assets/lib/common-scripts.js"></script>
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
  <script src="js/evidencias.js"></script>
</body>

</html>