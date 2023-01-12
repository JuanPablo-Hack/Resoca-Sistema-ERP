<?php
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conexion, $sql);
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear corte</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito el corte.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="Formcorte">
                    <h3>Datos generales</h3>
                    <hr>
                    <div class="form-group ">
                        <label class="control-label col-md-3">Fecha de inicio</label>
                        <div class="col-md-3 col-xs-11">
                            <input type="date" name='fecha_inicio' class="form-control">
                        </div>
                        <label class="control-label col-md-3">Fecha de fin</label>
                        <div class="col-md-3 col-xs-11">
                            <input type="date" name='fecha_fin' class="form-control">
                        </div>
                    </div>
                    <div class="form-group ">
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
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Agregar corte</button>
            </div>
            </form>
        </div>
    </div>
</div>