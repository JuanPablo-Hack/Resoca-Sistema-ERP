<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'templates/head.php';
    include 'php/selects.php';
    $Row = mysqli_fetch_array(get_catalgo($_GET['id']));
    ?>
</head>

<body>
    <section id="container">
        <?php include 'templates/nav.php'; ?>
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> Detalles de Concepto de Catalogo</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <div class="form">
                                <form class="cmxform form-horizontal style-form" id="EditarCatalogo">
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">Nombre del Concepto</label>
                                        <div class="col-sm-4">
                                            <input class=" form-control" id="firstname" name="nombre" type="text" value="<?php echo $Row['nombre'] ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-2">Clave</label>
                                        <div class="col-sm-4">
                                            <input class=" form-control" id="lastname" name="clave" type="text" value="<?php echo $Row['clave'] ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Precio</label>
                                        <div class="col-sm-4">
                                            <input class="form-control " id="username" name="precio" type="text" value="<?php echo $Row['precio'] ?>" readonly />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /form-panel -->
                    </div>
                    <!-- /col-lg-12 -->
                </div>
                <!-- /row -->
            </section>
            <!-- /wrapper -->
        </section>
        <?php include 'templates/footer.php'; ?>
    </section>
    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/lib/jquery.scrollTo.min.js"></script>
    <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/lib/common-scripts.js"></script>
    <script src="../assets/lib/form-validation-script.js"></script>
    <script src="../assets/lib/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="js/controller.js"></script>
    <script src="js/main.js"></script>


</body>

</html>