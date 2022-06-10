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
    <?php include 'templates/nav.php'; ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Bitacora de Evidencias</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th class="hidden-phone">Evidencia</th>
                    <th>Folio</th>
                    <th>Ticket</th>
                    <th class="hidden-phone">Fecha del Servicio</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM evidencias";
                  $resultado = $conexion->query($sql);
                  while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                    <tr>
                      <td><a href="./detalles_evidencias.php?id_evidencia=<?php echo $mostrar['id']  ?>"><?php echo 'EVE-22-' . $mostrar['id'] ?></a></td>
                      <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['folio']  ?>"><?php echo 'FSO-22-' . $mostrar['folio'] ?></a></td>
                      <td><?php echo $mostrar['ticket'] ?></td>
                      <td><?php
                          $sql1 = "SELECT * FROM ordenes WHERE id='" . $mostrar['folio'] . "'";
                          $result1 = mysqli_query($conexion, $sql1);
                          $Row = mysqli_fetch_array($result1);
                          echo $Row['fecha'];
                          ?></td>

                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <?php include 'templates/footer.php'; ?>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../assets/lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="../assets/lib/advanced-datatable/js/jquery.js"></script>
  <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../assets/lib/jquery.scrollTo.min.js"></script>
  <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="../assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="../assets/lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="../assets/lib/common-scripts.js"></script>
  <script src="js/controller.js"></script>
  <script src="../assets/lib/sweetalert2/sweetalert2.all.min.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    $(document).ready(function() {
      var oTable = $("#hidden-table-info").dataTable({
        aoColumnDefs: [{
          bSortable: false,
          aTargets: [0],
        }, ],
        aaSorting: [
          [1, "asc"]
        ],
      });
    });
  </script>
</body>

</html>