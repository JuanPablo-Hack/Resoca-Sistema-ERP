<section class="wrapper">
    <div class="row mt">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar trabajador</button>
        <?php include 'views/trabajadores/agregar.php'; ?>
    </div>
    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="3" cellspacing="3" border="3" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th> ID</th>
                        <th> Nombre</th>
                        <th class="hidden-phone"> Curp</th>
                        <th> RFC</th>
                        <th> Cargo</th>
                        <th> NSS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM trabajador";
                    $resultado = $conexion->query($sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['nombre'] ?></td>
                            <td><?php echo $mostrar['curp'] ?></td>
                            <td><?php echo $mostrar['rfc'] ?></td>
                            <td><?php echo $mostrar['nss'] ?></td>
                            <td><?php echo $mostrar['cargo'] ?></td>
                            <td>
                                <button class="btn btn-primary btn-xs" title="Editar Trabajador" data-toggle="modal" data-target="#EditarTrabajador<?php echo $mostrar['id'] ?>"><i class="fa fa-pencil"></i></button>
                                <a onclick="eliminarTrabajador(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Trabajador"> <i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <?php include 'views/trabajadores/editar.php'; ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>