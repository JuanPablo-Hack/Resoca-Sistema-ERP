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

        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Lista de Servicios</h4>
                <hr>
                <thead>
                  <tr>
                    <th> ID</th>
                    <th> Nombre</th>
                    <th class="hidden-phone"> Tipo</th>
                    <th> Descripcion</th>
                    <th> Supervisor</th>
                    <th> Operador</th>
                    <th> Auxiliar</th>
                    <th> Modelo</th>
                    <th> Placas</th>
                    <th> Destino Final</th>
                    <th> Ubicacion</th>
                    <th> Material</th>
                    <th> Equipo</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM servicios";
                  $resultado = $conexion->query($sql);
                  while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                    <tr>
                      <td><?php echo $mostrar['id'] ?></td>
                      <td><?php echo $mostrar['nombre'] ?></td>
                      <td><?php echo $mostrar['tipo'] ?></td>
                      <td><?php echo $mostrar['descripcion'] ?></td>
                      <td><?php echo $mostrar['supervisor'] ?></td>
                      <td><?php echo $mostrar['operador'] ?></td>
                      <td><?php echo $mostrar['auxiliar'] ?></td>
                      <td><?php echo $mostrar['modelo'] ?></td>
                      <td><?php echo $mostrar['placas'] ?></td>
                      <td><?php echo $mostrar['destinofinal'] ?></td>
                      <td><?php echo $mostrar['ubicacion'] ?></td>
                      <td><?php echo $mostrar['material'] ?></td>
                      <td><?php echo $mostrar['equipo'] ?></td>
                      <td>

                        <a href='./editar_servicios.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                        <a onclick="eliminarServicio(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs"> <i class="fa fa-trash-o "></i></a>


                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <?php include 'templates/footer.php'; ?>
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
  <script src="js/controller.js"></script>
  <script src="../assets/lib/sweetalert2/sweetalert2.all.min.js"></script>
</body>

</html>