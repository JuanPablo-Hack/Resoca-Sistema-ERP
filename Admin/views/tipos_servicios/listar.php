<section class="wrapper">
    <div class="row mt">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar Tipo de Servicio</button>
        <?php include 'views/tipos_servicios/agregar.php'; ?>
    </div>
    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="3" cellspacing="3" border="3" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th> ID</th>
                        <th> Nombre</th>
                        <th class="hidden-phone"> Tipo</th>
                        <th> Descripcion</th>
                        <th> Supervisor</th>
                        <th> Operador</th>
                        <th> Auxiliar</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM servicios";
                    $resultado = $conexion->query($sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['nombre'] ?></td>
                            <td><?php echo $mostrar['tipo'] ?></td>
                            <td><?php echo $mostrar['descripcion'] ?></td>
                            <td><?php echo $mostrar['supervisor'] ?></td>
                            <td><?php echo $mostrar['operador'] ?></td>
                            <td><?php echo $mostrar['auxiliar'] ?></td>
                            <td>
                                <button class="btn btn-primary btn-xs" title="Editar Orden" data-toggle="modal" data-target="#Editartipos_servicios<?php echo $mostrar['id'] ?>"><i class="fa fa-pencil"></i></button>
                                <a onclick="eliminarServicio(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Servicio"> <i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <?php include 'views/tipos_servicios/editar.php'; ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>