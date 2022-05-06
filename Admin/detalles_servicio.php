<?php
$id = 7;
include 'php/conexion.php';
$sql = "SELECT * FROM servicios WHERE id='" . $id . "'";
$result = mysqli_query($conexion, $sql);
$Row = mysqli_fetch_array($result);

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
                <h3><i class="fa fa-angle-right"></i> Detalles del Servicio</h3>
                <div class="row mt">
                    <!--  DATE PICKERS -->
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h3>Datos del Servicio</h3>
                            <hr>
                            <form action="php/crear_servicio.php" class="form-horizontal style-form" method="POST">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $Row['nombre']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Servicio</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="tipo" value="<?php echo $Row['tipo']; ?>" readonly />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Servicio</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="tipo" value="<?php echo $Row['descripcion']; ?>" readonly />
                                    </div>
                                </div>

                                <h3>Datos de Personal</h3>
                                <hr>
                                <form action="#" class="form-horizontal style-form">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Supervisor</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="supervisor" value="<?php echo $Row['supervisor']; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Operador</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="operador" value="<?php echo $Row['operador']; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Auxiliar</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="auxiliar" value="<?php echo $Row['auxiliar']; ?>" readonly>
                                        </div>
                                    </div>
                                    <h3>Datos del vehículo del servicio</h3>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Modelo</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="modelo" value="<?php echo $Row['modelo']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Placas</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="placas" value="<?php echo $Row['placas']; ?>" readonly>
                                        </div>
                                    </div>
                                    <h3>Datos del destino final</h3>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nombre_destino" value="<?php echo $Row['destinofinal']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Ubicacion</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="ubicacion" value="<?php echo $Row['ubicacion']; ?>" readonly>
                                        </div>
                                    </div>
                                    <h3>Herramientas a utilizar</h3>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2">Descripción de Material
                                        </label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control " id="ccomment" name="descripcion_material" readonly><?php echo $Row['material']; ?></textarea>
                                        </div>
                                    </div>
                                    <h3>Equipo de Seguridad Necesario</h3>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2">Descripción de Equipo
                                        </label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control " id="ccomment" name="descripcion_equipo" readonly><?php echo $Row['equipo']; ?></textarea>
                                        </div>
                                    </div>
                                </form>
                        </div>

                        <!-- col-lg-12-->
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
    <script type="text/javascript" src="../assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="../assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="../assets/lib/advanced-form-components.js"></script>

</body>

</html>