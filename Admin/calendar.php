<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'templates/head.php'; ?>
</head>

<body>
    <section id="container">
        <?php include  'templates/nav.php'; ?>
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> Servicios Organizados</h3>
                <button class="btn btn-primary" data-toggle="modal" data-target="#calculo">Calcular total de
                    residuos</button>
                <div class="modal" id="calculo" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Total de residuos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label for="">Fecha de inicio</label>
                                        <input id="fechaI" type="date" class="form-control">
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="">Fecha final</label>
                                        <input id="fechaF" type="date" class="form-control">
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <button onclick="calcular()" class="btn btn-primary">Calcular</button>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="">Total de residuos (KG)</label>
                                        <input id="resultado" type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>

                            <!--Este es el pie del modal aqui puedes agregar mas botones-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page start-->
                <div class="row mt">

                    <aside class="col-lg-12 mt">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="modal" id="ModalEventos" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detalle de orden</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12 form-group">
                                                        <label>Cliente:</label>
                                                        <input id="cliente_orden" type="text" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Servicio:</label>
                                                        <input id="servicio_orden" type="text" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Estado:</label>
                                                        <input id="estado_orden" type="text" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Cantidad de residuos (KG):</label>
                                                        <input id="cantidad_orden" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>

                                            </div>

                                            <!--Este es el pie del modal aqui puedes agregar mas botones-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="calendar" class="has-toolbar"></div>
                            </div>
                        </section>
                    </aside>
                </div>
                <!-- page end-->
            </section>
            <!-- /wrapper -->
        </section>
        <?php include 'templates/footer.php'; ?>
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/lib/jquery.scrollTo.min.js"></script>
    <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/lib/fullcalendar/fullcalendar.min.js"></script>
    <!--common script for all pages-->
    <script src="../assets/lib/common-scripts.js"></script>
    <!--script for this page-->
    <script src="../assets/lib/calendar-conf-events.js"></script>

</body>

</html>