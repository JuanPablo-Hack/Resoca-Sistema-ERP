<?php
include 'php/conexion.php';
$sql = "SELECT * FROM trabajador";
$result = mysqli_query($conexion, $sql);
$sql2 = "SELECT * FROM unidades";
$result2 = mysqli_query($conexion, $sql2);
?>
<div class="modal fade" id="EditarCombustibles<?php echo $mostrar['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear registro de combustible</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito la registro de combustible.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="FormCombustible">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Unidad Asignada</label>
                        <div class="col-sm-4">
                            <select class="form-control" name='unidad'>
                                <option value="0"></option>
                                <?php
                                while ($Row1 = mysqli_fetch_array($result2)) {
                                ?>
                                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['modelo']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label class="control-label col-md-3">Fecha de carga</label>
                        <div class="col-md-3 col-xs-11">
                            <input type="date" class="form-control" name="fecha">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Km inicial</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="km_inicial">
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">Km final</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="km_final">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tipo de Servicio</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="tipo_servicio">
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">Litros de Carga</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="litros">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">No.Factura</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="no_factura">
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">Operador</label>
                        <div class="col-sm-4">
                            <select class="form-control" name='operador'>
                                <option value="0"></option>
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
                        <label class="col-sm-2 col-sm-2 control-label">Importe</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="importe">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Agregar registro de combustible</button>
            </div>
            </form>
        </div>
    </div>
</div>