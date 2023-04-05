<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Bitacora Orden</h3>
        <div class="row mb">
            <div class="content-panel">
                <div class="form-group">
                    <div class="col-sm-4">
                        <select class="form-control" onchange="Mostrar_Tabla_Año()" id="filtro_ano">
                            <option value="0">-Seleccione un opción-</option>
                            <option value="2022">Historico 2022</option>
                            <option value="2023">Historico 2023</option>
                        </select>
                    </div>
                </div>
                <br><br>
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                        <thead>
                            <tr>
                                <th>Folio</th>
                                <th>Cliente</th>
                                <th class="hidden-phone">Fecha</th>
                                <th style="display: none;">Fecha</th>
                                <th class="hidden-phone">Tipo Servicio</th>
                                <th class="hidden-phone">Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM ordenes";
                            $resultado = $conexion->query($sql);
                            while ($mostrar = mysqli_fetch_array($resultado)) {
                            ?>
                                <tr>
                                    <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['id']  ?>"><?php echo 'FSO-22-' . $mostrar['id'] ?></a></td>
                                    <td><a href="./detalles_cliente.php?id_cliente=<?php echo $mostrar['cliente']  ?>"><?php
                                                                                                                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['cliente'] . "'";
                                                                                                                        $result1 = mysqli_query($conexion, $sql1);
                                                                                                                        if ($Row = mysqli_fetch_array($result1)) {
                                                                                                                            $nombre = $Row['nombre'];
                                                                                                                        }
                                                                                                                        echo $nombre;
                                                                                                                        ?></a></td>
                                    <td><?php echo $mostrar['fecha'] ?></td>
                                    <td style="display: none;"><?php echo $mostrar['creado'] ?></td>
                                    <td><a href="./detalles_servicio.php?id_cliente=<?php echo $mostrar['servicio']  ?>"><?php


                                                                                                                            $sql1 = "SELECT * FROM servicios WHERE id='" . $mostrar['servicio'] . "'";
                                                                                                                            $result1 = mysqli_query($conexion, $sql1);
                                                                                                                            if ($Row = mysqli_fetch_array($result1)) {
                                                                                                                                $nombre = $Row['nombre'];
                                                                                                                            }
                                                                                                                            echo $nombre;
                                                                                                                            ?></td>
                                    <td><?php echo $mostrar['estado'] ?></a></td>
                                    <td>


                                        <a onclick="crearPDF(<?php echo $mostrar['id']; ?>)" title="Más Información" class="btn btn-primary btn-xs"><i class="fa fa-info-circle"></i></a>
                                        <a href="./confirmacion.php?id=<?php echo $mostrar['id']  ?>" title="Confirmar Orden" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                        <a href="./registro_evidencias.php?id=<?php echo $mostrar['id']  ?>" title="Subir Evidencias" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>