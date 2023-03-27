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
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="../assets/img/banner.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Cliente</h5>
          <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Panel de Control</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-calendar"></i>
              <span>Ordenes de Servicios</span>
            </a>
            <ul class="sub">

              <li><a href="listar_orden.php">Bitacora</a></li>
              <li><a href="listar_evidencias.php">Mis Evidencias</a></li>
              <li><a href="listar_confirmaciones.php">Mis Confirmaciones</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="active">
              <i class="fa fa-book"></i>
              <span>Cortes</span>
            </a>
            <ul class="sub">
              <li class="active"><a href="listar_reportes.php">Mis cortes</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="imades.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>Estadísticas</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Programación de Cortes</h3>
        <div class="row mb">
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No. de Folio de Corte</th>
                    <th>Cliente</th>
                    <th class="hidden-phone">Concepto Cobrado</th>
                    <th class="hidden-phone">Rango de Fechas</th>
                    <th class="hidden-phone">Días cobrados</th>
                    <th class="hidden-phone">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $id = $_SESSION['usuario'];
                  $sql = "SELECT * FROM cortes where id_cliente =$id";
                  $resultado = $conexion->query($sql);
                  while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                    <tr>
                      <td><?php echo 'F-CS-' . date('Y') . '-' . $mostrar['id'] ?></td>
                      <td><?php
                          $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['id_cliente'] . "'";
                          $result1 = mysqli_query($conexion, $sql1);
                          if ($Row = mysqli_fetch_array($result1)) {
                            $nombre = $Row['nombre'];
                          }
                          echo $nombre;
                          ?></td>
                      <td><?php
                          $sql1 = "SELECT * FROM conceptos_cobros WHERE id='" . $mostrar['id_conceptos_cobros'] . "'";
                          $result1 = mysqli_query($conexion, $sql1);
                          if ($Row = mysqli_fetch_array($result1)) {
                            $nombre = $Row['nombre'];
                          }
                          echo $nombre;
                          ?></td>
                      <td><?php echo $mostrar['rango_fechas'] ?></td>
                      <td><?php echo $mostrar['dias_cobrados'] ?></td>
                      <td>
                        <a onclick="crearPDF(<?php echo $mostrar['id'] ?>)" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>
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
    </section>
    <?php include 'templates/footer.php'; ?>
  </section>
  <script src="../assets/lib/jquery/jquery.min.js"></script>
  <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/lib/jquery.scrollTo.min.js"></script>
  <script type="text/javascript" language="javascript" src="../assets/lib/advanced-datatable/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="../assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="../assets/lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <script src="../assets/lib/common-scripts.js"></script>
  <script src="../assets/lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="../assets/lib/advanced-datatable/js/jquery.js"></script>
  <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../assets/lib/jquery.scrollTo.min.js"></script>
  <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="../assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="../assets/lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <script>
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut =
        '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut +=
        "<tr><td>Rendering engine:</td><td>" +
        aData[1] +
        " " +
        aData[4] +
        "</td></tr>";
      sOut += "<tr><td>Link to source:</td><td>Could provide a link here</td></tr>";
      sOut +=
        "<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>";
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
          [1, "asc"]
        ],
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
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
  <script>
    function addScript(url) {
      var script = document.createElement("script");
      script.type = "application/javascript";
      script.src = url;
      document.head.appendChild(script);
    }
    addScript(
      "https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"
    );

    function crearPDF(id) {
      var opt = {
        margin: 1,
        filename: "Corte.pdf",
        image: {
          type: "jpeg",
          quality: 0.98,
        },
        html2canvas: {
          scale: 3,
        },
        jsPDF: {
          unit: "in",
          format: "a3",
          orientation: "portrait",
        },
      };

      $.ajax({
        type: "POST",
        data: "id=" + id,
        url: "php/cortesPDF.php",
        success: function(r) {
          var worker = html2pdf().set(opt).from(r).toPdf().save();
        },
      });
    }
  </script>
</body>

</html>