<section class="wrapper">
    <div class="row mt">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar unidad</button>
        <?php include 'views/unidades/agregar.php'; ?>
    </div>
    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="3" cellspacing="3" border="3" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th class="numeric">Año</th>
                        <th class="numeric">Color</th>
                        <th class="numeric">Placas</th>
                        <th class="numeric">No. Economíco</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM unidades";
                    $resultado = $conexion->query($sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrar['modelo'] ?></td>
                            <td><?php echo $mostrar['ano'] ?></td>
                            <td><?php echo $mostrar['color'] ?></td>
                            <td><?php echo $mostrar['placas'] ?></td>
                            <td><?php echo $mostrar['noeconomico'] ?></td>
                            <td>
                                <button class="btn btn-primary btn-xs" title="Editar Orden" data-toggle="modal" data-target="#Editarunidades<?php echo $mostrar['id'] ?>"><i class="fa fa-pencil"></i></button>
                                <a onclick="eliminarUnidad(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Servicio"> <i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <?php include 'views/unidades/editar.php'; ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>