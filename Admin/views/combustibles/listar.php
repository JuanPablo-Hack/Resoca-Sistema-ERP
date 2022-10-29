<section class="wrapper">
    <div class="row mt">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar combustible</button>
        <?php include 'views/combustibles/agregar.php'; ?>
    </div>
    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="3" cellspacing="3" border="3" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Unidad</th>
                        <th class="numeric">Fecha</th>
                        <th class="hidden-phone">Tipo Servicio</th>
                        <th class="numeric">Operador</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM registros_mantenimiento";
                    $resultado = $conexion->query($sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <td><a href="./detalles_combustible.php?id_combustible=<?php echo $mostrar['id']  ?>"><?php echo 'COMBUS2022-' . $mostrar['id'] ?></a></td>
                            <td><a href="./detalles_unidad.php?id_unidad=<?php echo $mostrar['unidad']  ?>"><?php
                                                                                                            $sql1 = "SELECT * FROM unidades WHERE id='" . $mostrar['unidad'] . "'";
                                                                                                            $result1 = mysqli_query($conexion, $sql1);
                                                                                                            if ($Row = mysqli_fetch_array($result1)) {
                                                                                                                $nombre = $Row['modelo'];
                                                                                                            }
                                                                                                            echo $nombre;
                                                                                                            ?></a></td>
                            <td><?php echo $mostrar['fecha'] ?></td>
                            <td><?php echo $mostrar['tiposervicio'] ?></td>
                            <td><a href="./detalles_trabajador.php?id_trabajador=<?php echo $mostrar['operador']  ?>"><?php
                                                                                                                        $sql1 = "SELECT * FROM trabajador WHERE id='" . $mostrar['operador'] . "'";
                                                                                                                        $result1 = mysqli_query($conexion, $sql1);
                                                                                                                        if ($Row = mysqli_fetch_array($result1)) {
                                                                                                                            $nombre = $Row['nombre'];
                                                                                                                        }
                                                                                                                        echo $nombre;
                                                                                                                        ?></a></td>
                            <td>
                                <button class="btn btn-primary btn-xs" title="Editar Orden" data-toggle="modal" data-target="#EditarCombustibles<?php echo $mostrar['id'] ?>"><i class="fa fa-pencil"></i></button>
                                <a onclick="eliminarCombustible(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Servicio"> <i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <?php include 'views/combustibles/editar.php'; ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>