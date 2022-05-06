<?php
$id = $_GET['id_cliente'];
include 'php/conexion.php';
$sql = "SELECT * FROM clientes WHERE id='" . $id . "'";
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
                <h3><i class="fa fa-angle-right"></i> Detalles de cliente</h3>
                <div class="row mt">
                    <!--  DATE PICKERS -->
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <form action="php/agregar_usuario.php" class="form-horizontal style-form" method='POST'>
                                <h3>Datos generales</h3>
                                <hr>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-2">Nombre Completo</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="firstname" name="nombre" type="text" value="<?php echo $Row['nombre']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">No. NRA</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="nra" type="text" value="<?php echo $Row['nra']; ?>" readonly />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Telefono</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="telefono" type="text" value="<?php echo $Row['telefono']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="email" type="text" value="<?php echo $Row['email']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Area</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="area" type="text" value="<?php echo $Row['area']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Fecha de Programación de corte</label>
                                    <div class="col-md-3 col-xs-11">
                                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                                            <input type="text" readonly="" value="<?php echo $Row['fecha_corte']; ?>" readonly size="16" name='fecha' class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <h3>Datos Fiscales</h3>
                                <hr>
                                <div class="form-group ">
                                    <label for="lastname" class="control-label col-lg-2">RFC</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="lastname" name="rfc" type="text" value="<?php echo $Row['rfc']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Dirección</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="direccion" type="text" value="<?php echo $Row['dir']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">C.P</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="cp" type="text" value="<?php echo $Row['cp']; ?>" readonly />
                                    </div>
                                </div>
                                <h3>Datos del contacto</h3>
                                <hr>
                                <div class="form-group ">
                                    <label for="lastname" class="control-label col-lg-2">Nombre</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="lastname" name="nombre_representante" type="text" value="<?php echo $Row['nombre_representante']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Cargo</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="cargo" type="text" value="<?php echo $Row['cargo']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Télefono</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="tel_representante" type="text" value="<?php echo $Row['tel_representante']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">E-mail</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="email_representante" type="text" value="<?php echo $Row['email_representante']; ?>" readonly />
                                    </div>
                                </div>

                            </form>


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