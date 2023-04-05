<?php
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'templates/head.php'; ?>
</head>

<body>
  <section id="container">
    <?php
    include 'templates/nav.php';
    include 'views/evidencias/menu.php';
    include 'views/evidencias/listar.php';
    include 'templates/footer.php';
    ?>
  </section>
  <script src="../assets/lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="../assets/lib/advanced-datatable/js/jquery.js"></script>
  <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../assets/lib/jquery.scrollTo.min.js"></script>
  <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="../assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="../assets/lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <script src="../assets/lib/common-scripts.js"></script>
  <script src="js/controller.js"></script>
  <script src="../assets/lib/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="js/evidencias.js"></script>
</body>

</html>