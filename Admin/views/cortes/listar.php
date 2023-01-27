<section class="wrapper">
    <div class="row mb">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar Corte</button>
        <?php include 'views/cortes/agregar.php'; ?>
        <div class="content-panel">
            <div class="adv-table">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                    <thead>
                        <tr>
                            <th>No. de Folio de Corte</th>
                            <th>Cliente</th>
                            <th class="hidden-phone">Concepto Cobrado</th>
                            <th class="hidden-phone">Rango de Fechas</th>
                            <th class="hidden-phone">Días cobrados</th>
                            <th class="hidden-phone">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM cortes";
                        $resultado = $conexion->query($sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>
                                <td><?php echo 'F-CS-' . date('Y') . '-' . $mostrar['id'] ?></td>
                                <td><?php
                                    $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['id_cliente'] . "'";
                                    $result1 = mysqli_query($conexion, $sql1);
                                    if ($Row = mysqli_fetch_array($result1)) {
                                        $nombre = $Row['nombre'];
                                    }
                                    echo $nombre;
                                    ?></td>
                                <td><?php
                                    $sql1 = "SELECT * FROM conceptos_cobros WHERE id='" . $mostrar['id_conceptos_cobros'] . "'";
                                    $result1 = mysqli_query($conexion, $sql1);
                                    if ($Row = mysqli_fetch_array($result1)) {
                                        $nombre = $Row['nombre'];
                                    }
                                    echo $nombre;
                                    ?></td>
                                <td><?php echo $mostrar['rango_fechas'] ?></td>
                                <td><?php echo $mostrar['dias_cobrados'] ?></td>
                                <td>
                                    <a onclick="crearPDF(<?php echo $mostrar['id'] ?>)" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>
                                    <a href='./editar_reporte.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href='./eliminar_corte.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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