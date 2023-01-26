<?php
include 'php/conexion.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'templates/head.php'; ?>
</head>

<!-- TODO: terminar der poner las listas de cortes generados en el apartado de admin -->

<body>
  <section id="container">
    <?php include 'templates/nav.php'; ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Programación de Cortes</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No. de Folio</th>
                    <th>No. de ticket</th>
                    <th class="hidden-phone">Cantidad total</th>
                    <th class="hidden-phone">Unidad</th>
                    <th class="hidden-phone">Fecha</th>
                    <th class="hidden-phone">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($_SESSION['user'])) {
                    $id = $_SESSION['user'];
                    $sql = "SELECT * FROM cortes";
                    $resultado = $conexion->query($sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                      <tr>
                        <td><?php echo $mostrar['folio'] ?></td>
                        <td><?php echo $mostrar['ticket'] ?></td>
                        <td><?php echo $mostrar['cantidad'] ?></td>
                        <td><?php echo $mostrar['unidad'] ?></td>
                        <td><?php echo $mostrar['creado'] ?></td>
                        <td>

                          <a href='./corte.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>



                        </td>
                      </tr>
                  <?php
                    }
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
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>