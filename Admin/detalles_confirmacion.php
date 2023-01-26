<?php
include 'php/conexion.php';
include 'php/selects.php';
$Row = mysqli_fetch_array(get_confirmacion($_GET['id_confirmacion']));
$sql = "SELECT * FROM ordenes";
$result = mysqli_query($conexion, $sql);
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
                            <li><a href="calendar.php">Calendario</a></li>
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
                <h3><i class="fa fa-angle-right"></i> Registro de Evidencias de Servicio</h3>
                <div class="row mt">
                    <!--  DATE PICKERS -->
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <form class="form-horizontal style-form" enctype="multipart/form-data" id="EditarConfirmacion">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Indentificador</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="identificador" value="<?php echo "FSO-23-" . $Row['id_orden']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nombre de la persona que autoriza</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $Row['nombre']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Cargo de la persona que autoriza</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="cargo" value="<?php echo $Row['cargo']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <label class="control-label col-md-3">Subir del imagen del patio (Sin Basura)</label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 600px; height: 450px;">
                                                <img src="../confirmaciones/<?php echo $Row['id_orden'] . "/" . $Row['foto'] ?>" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        </div>
                                        <span class="label label-info">NOTA!</span>
                                        <span>
                                            No se te olvide adjuntar todas las fotos de las evidencias del servicio.
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <label class="control-label col-md-3">Subir Imágenes del Procesos (Recolección de Basura)</label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 600px; height: 450px;">
                                                <img src="../confirmaciones/<?php echo $Row['id_orden'] . "/" . $Row['foto1'] ?>" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        </div>
                                        <span class="label label-info">NOTA!</span>
                                        <span>
                                            No se te olvide adjuntar todas las fotos de las evidencias del servicio.
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <label class="control-label col-md-3">Subir del imagen del patio (Con Basura)</label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 600px; height: 450px;">
                                                <img src="../confirmaciones/<?php echo $Row['id_orden'] . "/" . $Row['foto2'] ?>" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                                        </div>
                                        <span class="label label-info">NOTA!</span>
                                        <span>
                                            No se te olvide adjuntar todas las fotos de las evidencias del servicio.
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <label class="control-label col-md-3">Subir imagen del Vehículo (Cargado con Basura)</label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 600px; height: 450px;">
                                                <img src="../confirmaciones/<?php echo $Row['id_orden'] . "/" . $Row['foto3'] ?>" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                                        </div>
                                        <span class="label label-info">NOTA!</span>
                                        <span>
                                            No se te olvide adjuntar todas las fotos de las evidencias del servicio.
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <label class="control-label col-md-3">Firma del Cliente</label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="../firmas/<?php echo $Row['ruta']; ?>" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                    <!-- /form-panel -->
                </div>
                <!-- /col-lg-12 -->
                </div>
                <!-- /row -->
                <!-- DATE TIME PICKERS -->

                <!-- /form-panel -->
                </div>
                <!-- /col-lg-12 -->
                </div>
                <!-- row -->
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
    <script src="../assets/lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="../assets/ib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="../assets/lib/advanced-form-components.js"></script>
</body>

</html>