<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Bitacora de Evidencias</h3>
        <div class="row mb">
            <!-- page start-->
            <div class="content-panel">
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                        <thead>
                            <tr>
                                <th class="hidden-phone">Evidencia</th>
                                <th>Folio</th>
                                <th>Ticket</th>
                                <th class="hidden-phone">Fecha del Servicio</th>
                                <th class="hidden-phone">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM evidencias";
                            $resultado = $conexion->query($sql);
                            while ($mostrar = mysqli_fetch_array($resultado)) {
                            ?>
                                <tr>
                                    <td><a href="./detalles_evidencias.php?id_evidencia=<?php echo $mostrar['id']  ?>"><?php echo 'EVE-23-' . $mostrar['id'] ?></a></td>
                                    <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['folio']  ?>"><?php echo 'FSO-23-' . $mostrar['folio'] ?></a></td>
                                    <td><?php echo $mostrar['ticket'] ?></td>
                                    <td><?php
                                        $sql1 = "SELECT * FROM ordenes WHERE id='" . $mostrar['folio'] . "'";
                                        $result1 = mysqli_query($conexion, $sql1);
                                        $Row = mysqli_fetch_array($result1);
                                        echo $Row['fecha'];
                                        ?></td>
                                    <td>

                                        <a onclick="eliminarEvidencia(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs"> <i class="fa fa-trash-o "></i></a>
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