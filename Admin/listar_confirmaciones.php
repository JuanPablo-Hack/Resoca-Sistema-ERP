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
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
            <a href="#"><img src="../assets/img/banner.png" class="img-circle" width="80"></a>
          </p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Panel de Control</span>
            </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-calendar"></i>
              <span>Ordenes de Servicios</span>
            </a>
            <ul class="sub">
              <li><a href="listar_orden.php">Bitacora</a></li>
             
              <li><a href="listar_servicios.php">Lista de Servicios</a></li>
              <li><a href="listar_evidencias.php">Lista de Evidencias</a></li>
              <li class="active"><a href="listar_confirmaciones.php">Lista de Confirmaciones</a></li>
              <li><a href="listar_catalogo.php">Catalogo de Conceptos</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a dhref="javascript:;">
              <i class="fa fa-book"></i>
              <span>Administración</span>
            </a>
            <ul class="sub">
              <li><a href="listar_reportes.php">Bitacora de Corte</a></li>
              <li><a href="listar_manifiesto.php">Bitacora de Manifiestos</a></li>
              <li><a href="listar_acuses.php">Bitacora de Acuses</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="reportes_imades.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>Reporte Imades</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-car"></i>
              <span>Unidades</span>
            </a>
            <ul class="sub">
              <li><a href="listar_unidades.php">Bitacora</a></li>
              <li><a href="listar_mantenimientos.php">Mantenimientos</a></li>
              <li><a href="listar_combustible.php">Bitacora de combustibles</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-group"></i>
              <span>Usuarios</span>
            </a>
            <ul class="sub">
              <li><a href="listar_trabajador.php">Trabajadores</a></li>
              <li><a href="listar_clientes.php">Clientes</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Bitacora Confirmaciones</h3>
        <div class="row mb">
          <div class="content-panel">
            <div class="form-group">
              <div class="col-sm-4">
                <select class="form-control" onchange="Mostrar_Tabla_Año()" id="filtro_ano">
                  <option value="0">-Seleccione un opción-</option>
                  <option value="2022">Historico 2022</option>
                  <option value="2023">Historico 2023</option>
                </select>
              </div>
            </div>
            <br>
            <br>
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No. confirmación</th>
                    <th>No. de Orden</th>
                    <th class="hidden-phone">Nombre de encargado</th>
                    <th class="hidden-phone">Cargo</th>
                    <th class="hidden-phone">Fecha y Hora</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM confimarcion";
                  $resultado = $conexion->query($sql);
                  while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                    <tr>
                      <td><a href="./detalles_confirmacion.php?id_confirmacion=<?php echo $mostrar['id']  ?>"><?php echo 'CONF-23-' . $mostrar['id'] ?></a></td>
                      <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['id_orden']  ?>"><?php echo 'FSO-23--' . $mostrar['id_orden'] ?></a></td>
                      <td><?php echo $mostrar['nombre'] ?></td>
                      <td><?php echo $mostrar['cargo'] ?></td>
                      <td><?php echo $mostrar['creado'] ?></a></td>
                      <td>
                        <a onclick="eliminarConfirmacion(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Orden"> <i class="fa fa-trash-o "></i></a>
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
    <?php include 'templates/footer.php'; ?>
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
  <script src="js/confirmacion.js"></script>


</body>

</html>