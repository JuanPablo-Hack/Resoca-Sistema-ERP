<section class="wrapper">
    <div class="row mt">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar mantenimiento</button>
        <?php include 'views/mantenimientos/agregar.php'; ?>
    </div>
    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="3" cellspacing="3" border="3" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Unidad</th>
                        <th class="numeric">Fecha de entrada</th>
                        <th class="numeric">Fecha del próximo servicio</th>
                        <th class="numeric">Kilometraje</th>
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
                            <td><?php echo 'MANTOS2022-' . $mostrar['id'] ?></td>
                            <td><?php
                                $sql1 = "SELECT * FROM unidades WHERE id='" . $mostrar['unidad'] . "'";
                                $result1 = mysqli_query($conexion, $sql1);
                                if ($Row = mysqli_fetch_array($result1)) {
                                    $nombre = $Row['modelo'];
                                }
                                echo $nombre;
                                ?></td>
                            <td><?php echo $mostrar['creado'] ?></td>
                            <td><?php echo $mostrar['fecha'] ?></td>
                            <td><?php echo $mostrar['km'] ?></td>
                            <td>
                                <button class="btn btn-primary btn-xs" title="Editar Orden" data-toggle="modal" data-target="#Editarmantenimientos<?php echo $mostrar['id'] ?>"><i class="fa fa-pencil"></i></button>
                                <a onclick="eliminarMantenimiento(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Servicio"> <i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <?php include 'views/mantenimientos/editar.php'; ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>