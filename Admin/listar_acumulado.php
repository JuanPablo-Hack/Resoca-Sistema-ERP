<?php
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'templates/head.php'; ?>../assets/
</head>

<body>
  <section id="container">
    <?php include 'templates/nav.php'; ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Bitacora Acumulados</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>

                    <th>Nombre del cliente</th>
                    <th class="hidden-phone">Cantidad Acumulada</th>
                    <th class="hidden-phone">No. de Servicios</th>
                    <th class="hidden-phone">Manifiestos Pendientes</th>
                    <th class="hidden-phone">Acciones</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT COUNT(id) as servicios,cliente as cliente, SUM(cantidad) as acumulado from ordenes GROUP BY cliente";
                  $resultado = $conexion->query($sql);
                  while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                    <tr>

                      <td><?php


                          $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['cliente'] . "'";
                          $result1 = mysqli_query($conexion, $sql1);
                          if ($Row = mysqli_fetch_array($result1)) {
                            $nombre = $Row['nombre'];
                          }
                          echo $nombre;
                          ?></td>
                      <td><?php echo $mostrar['acumulado'] ?></td>
                      <td><?php echo $mostrar['servicios'] ?></td>
                      <td><?php
                          $manifiestos_pen = intval($mostrar['acumulado'] / 1500);
                          if ($manifiestos_pen >= 1) {
                            echo $manifiestos_pen;
                          } else {
                            echo "No hay pendientes";
                          }

                          ?></td>
                      <td>

                        <a href="crear_manifiesto.php?cliente=<?php echo $mostrar['cliente']  ?>" target="_blank" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>


                      </td>
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
  <!--script for this page-->

</body>

</html>