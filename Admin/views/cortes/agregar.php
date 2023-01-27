<?php
include 'php/conexion.php';
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conexion, $sql);
$sql1 = "SELECT * FROM conceptos_cobros";
$result1 = mysqli_query($conexion, $sql1);

?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear Corte de Servicio</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito el corte.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="Form_Corte" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Cliente</label>
                        <div class="col-sm-8">
                            <select class="form-control" name='nombre_cliente'>
                                <option value="0">-Selecciona un cliente-</option>
                                <?php
                                while ($Row1 = mysqli_fetch_array($result)) {
                                ?>
                                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Forma de cobrar</label>
                        <div class="col-sm-8">
                            <select class="form-control" name='forma_cobrar' id="forma_cobrar" onchange="FormaDeCobrar()">
                                <option value="0">-Selecciona el formato de cobro-</option>
                                <?php
                                while ($Row1 = mysqli_fetch_array($result1)) {
                                ?>
                                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div id="rango_fechas" style="display: none;">
                        <div class="form-group">
                            <label class="control-label col-md-3">Fecha de inicio</label>
                            <div class="col-sm-4">
                                <input type="date" name='fecha_inicial' class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fecha de fin</label>
                            <div class="col-sm-4">
                                <input type="date" name='fecha_final' class="form-control">
                            </div>
                        </div>
                    </div>
                    <div id="dias_cobrados" style="display: none;">
                        <div class="form-group">
                            <label class="control-label col-md-3">Días a Cobrar</label>
                            <div class="col-sm-4">
                                <input type="text" name='días_realizados' class="form-control">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Agregar Orden de Servicio</button>
            </div>
            </form>
        </div>
    </div>
</div>