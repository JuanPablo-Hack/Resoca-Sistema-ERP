<?php
$id = 5;
include 'php/conexion.php';
$sql = "SELECT * FROM registros_mantenimiento WHERE id='" . $id . "'";
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
                <h3><i class="fa fa-angle-right"></i> Detalles de Mantenimiento</h3>
                <div class="row mt">
                    <!--  DATE PICKERS -->
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <form class="form-horizontal style-form" id="FormMantenimiento">

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nombre de Taller</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="taller" value="<?php echo $Row['taller'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">No. de Factura</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="factura" value="<?php echo $Row['nofactura'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Descripción</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="descripcion" value="<?php echo $Row['descripcion']; ?>" readonly>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3">Fecha de Proximo Servicio</label>
                                    <div class="col-md-3 col-xs-11">
                                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                                            <input type="text" readonly value="<?php echo $Row['fecha']; ?>" size="16" class="form-control" name="fecha">
                                            <span class="input-group-btn add-on">
                                                <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                        <span class="help-block">Select date</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Kilometraje</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="km" value="<?php echo $Row['km']; ?>" readonly>
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
    <script src="../assets/lib/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="js/controller.js"></script>
    <script src="js/main.js"></script>

</body>

</html>