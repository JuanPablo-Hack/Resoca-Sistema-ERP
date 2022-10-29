<section class="wrapper">
    <div class="row mt">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar cliente</button>
        <?php include 'views/clientes/agregar.php'; ?>
    </div>
    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="3" cellspacing="3" border="3" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th> Nombre</th>
                        <th class="hidden-phone"> NRA</th>
                        <th> Telefono</th>
                        <th> E-mail</th>
                        <th> Programación de Corte</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM trabajador";
                    $resultado = $conexion->query($sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrar['nombre'] ?></td>
                            <td><?php echo $mostrar['nra'] ?></td>
                            <td><?php echo $mostrar['telefono'] ?></td>
                            <td><?php echo $mostrar['email'] ?></td>
                            <td><?php echo $mostrar['fecha_corte'] ?></td>
                            <td>
                                <button class="btn btn-primary btn-xs" title="Editar Cliente" data-toggle="modal" data-target="#EditarCliente<?php echo $mostrar['id'] ?>"><i class="fa fa-pencil"></i></button>
                                <a onclick="eliminarCliente(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Cliente"> <i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <?php include 'views/clientes/editar.php'; ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>