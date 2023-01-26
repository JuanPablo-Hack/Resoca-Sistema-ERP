<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'templates/head.php'; ?>
</head>

<body>
    <section id="container">
        <?php include 'templates/nav.php'; ?>
        <?php include 'php/graficas.php'; ?>
        <section id="main-content">
            <section class="wrapper site-min-height">
                <h3><i class="fa fa-angle-right"></i> Reporte Imades</h3>
                <!-- page start-->

                <div class="col-lg-12 main-chart">
                    <!--CUSTOM CHART START -->
                    <div class="border-head">
                        <h3>Residuo Recolectado</h3>
                    </div>
                    <div class="custom-bar-chart">
                        <ul class="y-axis">
                            <li><span>10.000</span></li>
                            <li><span>8.000</span></li>
                            <li><span>6.000</span></li>
                            <li><span>4.000</span></li>
                            <li><span>2.000</span></li>
                            <li><span>0</span></li>
                        </ul>
                        <div class="bar">
                            <div class="title">ENE</div>
                            <div class="value tooltips" data-original-title="<?php echo $datos = obtener_residuo_total('2023-01-01', '2023-01-31'); ?>" data-toggle="tooltip" data-placement="top"><?php echo obtener_porcentaje_residuo($datos); ?>%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">FEB</div>
                            <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">MAR</div>
                            <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">ABR</div>
                            <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
                        </div>
                        <div class="bar">
                            <div class="title">MAY</div>
                            <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">JUN</div>
                            <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
                        </div>
                        <div class="bar">
                            <div class="title">JUL</div>
                            <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
                        </div>
                    </div>
                    <!--custom chart end-->
                    <div class="row mt">
                        <div class="col-md-12 col-sm-12 mb">
                            <div class="grey-panel pn donut-chart">
                                <div class="grey-header">
                                    <h5>Residuos Generados</h5>
                                </div>
                                <canvas id="serverstatus01" height="120" width="120"></canvas>
                                <script>
                                    var doughnutData = [{
                                        value: <?php echo obtener_porcentaje_residuo($datos); ?>,
                                        color: "#FF6B6B"
                                    }, {
                                        value: <?php echo 100 - obtener_porcentaje_residuo($datos); ?>,
                                        color: "#fdfdfd"
                                    }];
                                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                </script>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6 goleft">
                                        <p>Total<br />de Residuos:</p>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <h2><?php echo obtener_porcentaje_residuo($datos); ?>%</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- /grey-panel -->
                        </div>
                    </div>
                    <!-- /row -->

                    <!-- /row -->
                </div>
                <!-- page end-->
            </section>
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <?php include 'templates/footer.php'; ?>
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/lib/jquery.scrollTo.min.js"></script>
    <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/lib/raphael/raphael.min.js"></script>
    <script src="../assets/lib/morris/morris.min.js"></script>
    <!--common script for all pages-->
    <script src="../assets/lib/common-scripts.js"></script>
    <!--script for this page-->
    <script src="../assets/lib/morris-conf.js"></script>

</body>

</html>