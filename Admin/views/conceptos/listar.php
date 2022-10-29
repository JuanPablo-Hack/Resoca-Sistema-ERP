<section class="wrapper">
    <div class="row mt">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar concepto</button>
        <?php include 'views/conceptos/agregar.php'; ?>
    </div>
    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="3" cellspacing="3" border="3" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Clave</th>
                        <th class="hidden-phone">Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM catalogo";
                    $resultado = $conexion->query($sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrar['nombre'] ?></td>
                            <td><?php echo $mostrar['clave'] ?></a></td>
                            <td><?php echo $mostrar['precio'] ?></a></td>
                            <td>
                                <button class="btn btn-primary btn-xs" title="Editar Concepto" data-toggle="modal" data-target="#Editartipos_concepto<?php echo $mostrar['id'] ?>"><i class="fa fa-pencil"></i></button>
                                <a onclick="eliminarConcepto(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs" title="Eliminar Concepto"> <i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <?php include 'views/conceptos/editar.php'; ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>