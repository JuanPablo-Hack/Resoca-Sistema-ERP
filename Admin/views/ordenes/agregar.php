<?php
include 'php/conexion.php';
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conexion, $sql);
$sql1 = "SELECT * FROM servicios";
$result1 = mysqli_query($conexion, $sql1);
$sql2 = "SELECT * FROM unidades";
$result2 = mysqli_query($conexion, $sql2);
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear Orden de Servicio</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito la orden de servicio.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="Form_Orden" enctype="multipart/form-data" method="post">
                    <h3>Datos del Servicio</h3>
                    <hr>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Cliente</label>
                        <div class="col-sm-4">
                            <select class="form-control" name='nombre_cliente'>
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
                        <label class="col-sm-2 col-sm-2 control-label">Encargado</label>
                        <div class="col-sm-4">
                            <input type="text" name='encargado' class="form-control">
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Cargo</label>
                        <div class="col-sm-4">
                            <input type="text" name='cargo' class="form-control">
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">Tipo de Servicio</label>
                        <div class="col-sm-4">
                            <select class="form-control" name='tipo_servicio'>
                                <option value="0"></option>
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
                    <div class="form-group">
                        <label class="control-label col-md-3">Fecha de programación</label>
                        <div class="col-sm-4">
                            <input type="date" name='fecha' class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Hora de Programación</label>
                        <div class="col-sm-4">
                            <input type="text" name='hora' class="form-control">
                        </div>
                    </div>
                    <div class="row mt"></div>
                    <h3>Datos de la unidad de servicio</h3>
                    <hr>
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