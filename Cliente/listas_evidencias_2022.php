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
                                    $sql = "SELECT * FROM evidencias_2022 WHERE id_cliente=$id";
                                    $resultado = $conexion->query($sql);
                                    while ($mostrar = mysqli_fetch_array($resultado)) {
                                    ?>
                                        <tr>
                                            <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['folio']  ?>"><?php echo 'FSO-22-' . $mostrar['folio'] ?></a></td>
                                            <td><a href="./detalles_evidencias.php?id_evidencia=<?php echo $mostrar['id']  ?>"><?php echo 'EVE-22-' . $mostrar['id'] ?></a></td>
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

    <script src="js/evidencias.js"></script>
</body>

</html>