<section class="wrapper">
    <div class="row mt">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar Orden de Servicio</button>
        <?php include 'views/ordenes/agregar.php'; ?>
    </div>
    <br>
    <div class="form-group">
        <div class="col-sm-4">
            <select class="form-control" onchange="Mostrar_Tabla_Año()" id="filtro_ano">
                <option value="0">-Seleccione un opción-</option>
                <option value="2022">Historico 2022</option>
                <option value="2023">Historico 2023</option>
            </select>
        </div>
    </div>
    <br>
    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="3" cellspacing="3" border="3" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Cliente</th>
                        <th class="hidden-phone">Fecha y Hora</th>
                        <th class="hidden-phone">Tipo Servicio</th>
                        <th class="hidden-phone">Estado</th>
                        <th style="display: none;"></th>
                        <th style="display: none;"></th>
                        <th style="display: none;"></th>
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
                            <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['id']  ?>"><?php echo 'FSO-23-' . $mostrar['id']; ?></a></td>
                            <td><a href="./detalles_cliente.php?id_cliente=<?php echo $mostrar['cliente']  ?>"><?php
                                                                                                                $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['cliente'] . "'";
                                                                                                                $result1 = mysqli_query($conexion, $sql1);
                                                                                                                if ($Row = mysqli_fetch_array($result1)) {
                                                                                                                    $nombre = $Row['nombre'];
                                                                                                                }
                                                                                                                echo $nombre;
                                                                                                                ?></a></td>
                            <td><?php echo $mostrar['fecha']  ?></td>
                            <td><a href="./detalles_servicio.php?id_cliente=<?php echo $mostrar['servicio']  ?>"><?php


                                                                                                                    $sql1 = "SELECT * FROM servicios WHERE id='" . $mostrar['servicio'] . "'";
                                                                                                                    $result1 = mysqli_query($conexion, $sql1);
                                                                                                                    if ($Row = mysqli_fetch_array($result1)) {
                                                                                                                        $nombre = $Row['nombre'];
                                                                                                                    }
                                                                                                                    echo $nombre;
                                                                                                                    ?></td>
                            <td><?php echo $mostrar['estado'] ?></a></td>
                            <td style="display: none;"><?php echo $mostrar['encargado'] ?></a></td>
                            <td style="display: none;"><?php echo $mostrar['cargo'] ?></a></td>
                            <td style="display: none;"><?php echo $mostrar['hora'] ?></a></td>
                            <td>
                                <a onclick="crearPDF(<?php echo $mostrar['id'] ?>)" title="Más Info" class="btn btn-success btn-xs"><i class="fa fa-info-circle"></i></a>
                                <button class="btn btn-primary btn-xs" title="Editar Orden" data-toggle="modal" data-target="#EditarOrdenes<?php echo $mostrar['id'] ?>"><i class="fa fa-pencil"></i></button>
                                <a onclick="eliminarOrden(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Orden"> <i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <?php include 'views/ordenes/editar.php'; ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>