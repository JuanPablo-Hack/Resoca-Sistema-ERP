<div class="content-panel">
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
    <br>
    <div class="adv-table">
        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th class="hidden-phone">Evidencia</th>
                    <th>Ticket</th>
                    <th>Fecha</th>
                    <th style="display:none;"></th>
                    <th style="display:none;"></th>
                    <th style="display:none;"></th>
                    <th class="hidden-phone">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM evidencias";
                $resultado = $conexion->query($sql);
                while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>
                    <tr>
                        <td><a href="./detalles_orden.php?id_orden=<?php echo $mostrar['folio']  ?>"><?php echo 'FSO-23--' . $mostrar['folio'] ?></a></td>
                        <td><a href="./detalles_evidencias.php?id_evidencia=<?php echo $mostrar['id']  ?>"><?php echo 'EVE-23-' . $mostrar['id'] ?></a></td>
                        <td><?php echo $mostrar['ticket'] ?></td>
                        <td><?php echo $mostrar['creado'] ?></td>
                        <td style="display: none;"><?php echo $mostrar['num_conceptos'] ?></td>
                        <td style="display: none;"><?php echo $mostrar['arreglo'] ?></td>
                        <td style="display: none;"><?php echo $mostrar['comentarios'] ?></td>
                        <td>
                            <button class="btn btn-primary btn-xs" title="Editar Concepto" data-toggle="modal" data-target="#EditarEvidencias<?php echo $mostrar['id'] ?>"><i class="fa fa-pencil"></i></button>
                            <a onclick="eliminarEvidencia(<?php echo $mostrar['id'] ?>)" class="btn btn-danger btn-xs"> <i class="fa fa-trash-o "></i></a>
                        </td>
                    </tr>
                    <?php include 'views/evidencias/editar.php'; ?>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>s