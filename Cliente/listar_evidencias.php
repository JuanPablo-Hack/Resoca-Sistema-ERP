<?php
include 'php/conexion.php';
session_start();
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
        <h3><i class="fa fa-angle-right"></i> Bitacora de evidencias</h3>
        <div class="row mb">
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Folio</th>
                    <th class="hidden-phone">Evidencia</th>
                    <th>Ticket</th>
                    <th>Fecha</th>
                    <th style="display:none;"></th>
                    <th style="display:none;"></th>
                    <th style="display:none;"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $id = $_SESSION['usuario'];
                  $sql = "SELECT * FROM evidencias WHERE id_cliente=$id";
                  $resultado = $conexion->query($sql);
                  while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                    <tr>
                      <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['folio']  ?>"><?php echo 'FSO-23--' . $mostrar['folio'] ?></a></td>
                      <td><a href="./detalles_evidencias.php?id_evidencia=<?php echo $mostrar['id']  ?>"><?php echo 'EVE-23-' . $mostrar['id'] ?></a></td>
                      <td><?php echo $mostrar['ticket'] ?></td>
                      <td><?php echo $mostrar['creado'] ?></td>
                      <td style="display: none;"><?php echo $mostrar['num_conceptos'] ?></td>
                      <td style="display: none;"><?php echo $mostrar['arreglo'] ?></td>
                      <td style="display: none;"><?php echo $mostrar['comentarios'] ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
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
  <script src="../assets/lib/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="js/controller.js"></script>

  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut =
        '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut +=
        "<tr><td>No. Conceptos recolectados:</td><td>" + aData[5] + "</td></tr>";
      sOut +=
        "<tr><td>Concepto recolectado y cantidad:</td><td>" +
        aData[6] +
        "</td></tr>";
      sOut += "<tr><td>Comentarios:</td><td>" + aData[7] + "</td></tr>";
      sOut += "</table>";

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement("th");
      var nCloneTd = document.createElement("td");
      nCloneTd.innerHTML =
        '<img src="../assets/lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $("#hidden-table-info thead tr").each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $("#hidden-table-info tbody tr").each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $("#hidden-table-info").dataTable({
        aoColumnDefs: [{
          bSortable: false,
          aTargets: [0],
        }, ],
        aaSorting: [
          [4, "asc"]
        ],
      });
      $("#hidden-table-info tbody td img").live("click", function() {
        var nTr = $(this).parents("tr")[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "../assets/lib/advanced-datatable/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "../assets/lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), "details");
        }
      });
    });
  </script>
</body>

</html>