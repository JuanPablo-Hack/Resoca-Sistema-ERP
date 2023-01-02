<div class="row mt">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar Corte</button>
    <?php include 'views/cortes/agregar.php'; ?>
</div>
<div class="adv-table">
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>No. de Folio</th>
                <th>Fecha de Incio de Corte</th>
                <th class="hidden-phone">Fecha de Término de Corte</th>
                <th class="hidden-phone">Cliente</th>
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
                    <td><?php echo $mostrar['folio'] ?></td>
                    <td><?php echo $mostrar['ticket'] ?></td>
                    <td><?php echo $mostrar['cantidad'] ?></td>
                    <td><?php echo $mostrar['unidad'] ?></td>
                    <td>

                        <a href='./corte.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>

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