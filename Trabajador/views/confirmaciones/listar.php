<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Bitacora Confirmaciones</h3>
        <div class="row mb">
            <div class="content-panel">
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                        <thead>
                            <tr>
                                <th>Registro</th>
                                <th>Folio</th>
                                <th class="hidden-phone">Nombre de encargado</th>
                                <th class="hidden-phone">Cargo</th>
                                <th class="hidden-phone">Fecha y Hora</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM confimarcion";
                            $resultado = $conexion->query($sql);
                            while ($mostrar = mysqli_fetch_array($resultado)) {
                            ?>
                                <tr>
                                    <td><a href="./detalles_confirmacion.php?id_confirmacion=<?php echo $mostrar['id']  ?>"><?php echo 'CONF-23-' . $mostrar['id'] ?></a></td>
                                    <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['id_orden']  ?>"><?php echo 'FSO-23-' . $mostrar['id_orden'] ?></a></td>
                                    <td><?php echo $mostrar['nombre'] ?></td>
                                    <td><?php echo $mostrar['cargo'] ?></td>
                                    <td><?php echo $mostrar['creado'] ?></a></td>
                                    <td>
                                        <a href='./editar_confirmacion.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-primary btn-xs" title="Editar Orden"><i class="fa fa-pencil"></i></a>
                                        <a onclick="eliminarConfirmacion(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Orden"> <i class="fa fa-trash-o "></i></a>
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