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
        <h3><i class="fa fa-angle-right"></i> Bitacora Orden</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Folio</th>
                    <th>Cliente</th>
                    <th class="hidden-phone">Fecha</th>
                    <th class="hidden-phone">Tipo Servicio</th>
                    <th class="hidden-phone">Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM ordenes order by id ASC";
                  $resultado = $conexion->query($sql);
                  while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                    <tr>
                      <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['id']  ?>"><?php echo 'FSO-22-' . $mostrar['id'] ?></a></td>
                      <td><a href="./detalles_cliente.php?id_cliente=<?php echo $mostrar['cliente']  ?>"><?php
                                                                                                          $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['cliente'] . "'";
                                                                                                          $result1 = mysqli_query($conexion, $sql1);
                                                                                                          if ($Row = mysqli_fetch_array($result1)) {
                                                                                                            $nombre = $Row['nombre'];
                                                                                                          }
                                                                                                          echo $nombre;
                                                                                                          ?></a></td>
                      <td><?php echo $mostrar['fecha'] ?></td>
                      <td><a href="./detalles_servicio.php?id_cliente=<?php echo $mostrar['servicio']  ?>"><?php


                                                                                                            $sql1 = "SELECT * FROM servicios WHERE id='" . $mostrar['servicio'] . "'";
                                                                                                            $result1 = mysqli_query($conexion, $sql1);
                                                                                                            if ($Row = mysqli_fetch_array($result1)) {
                                                                                                              $nombre = $Row['nombre'];
                                                                                                            }
                                                                                                            echo $nombre;
                                                                                                            ?></td>
                      <td><?php echo $mostrar['estado'] ?></a></td>
                      <td>


                        <a onclick="crearPDF(<?php echo $mostrar['id']; ?>)" title="Más Información" class="btn btn-primary btn-xs"><i class="fa fa-info-circle"></i></a>
                        <a href="./confirmacion.php?id=<?php echo $mostrar['id']  ?>" title="Confirmar Orden" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                        <a href="./registro_evidencias.php?id=<?php echo $mostrar['id']  ?>" title="Subir Evidencias" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>



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
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <?php include 'templates/footer.php'; ?>../assets/
    <!--footer end-->
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
  <!-- PDF -->

  <script>
    function addScript(url) {
      var script = document.createElement('script');
      script.type = 'application/javascript';
      script.src = url;
      document.head.appendChild(script);
    }
    addScript('https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js');

    function crearPDF(id) {
      var opt = {
        margin: 1,
        filename: 'Orden.pdf',
        image: {
          type: 'jpeg',
          quality: 0.98
        },
        html2canvas: {
          scale: 3
        },
        jsPDF: {
          unit: 'in',
          format: 'a3',
          orientation: 'portrait'
        }
      };

      $.ajax({
        type: 'POST',
        data: "id=" + id,
        url: 'php/ordenesPDF.php',
        success: function(r) {
          // console.log(r);
          var worker = html2pdf().set(opt).from(r).toPdf().save();

        }
      });
    }
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": true,
          "aTargets": [0]
        }],
        "aaSorting": [
          [0, 'asc']
        ]
      });
    });
  </script>
</body>

</html>