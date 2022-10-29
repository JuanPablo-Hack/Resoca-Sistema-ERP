<?php
include 'php/conexion.php';
$sql2 = "SELECT * FROM unidades";
$result2 = mysqli_query($conexion, $sql2);
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear mantenimiento</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito el mantenimiento.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="FormMantenimiento">
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
                        <label class="col-sm-2 col-sm-2 control-label">Nombre de Taller</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="taller">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">No. de Factura</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="factura">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Fecha de Proximo Servicio</label>
                        <div class="col-md-3 col-xs-11">
                            <input type="date" size="16" class="form-control" name="fecha">
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">Kilometraje</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="km">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ccomment" class="control-label col-lg-2">Descripción</label>
                        <div class="col-sm-9">
                            <textarea class="form-control " id="ccomment" name="descripcion"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Agregar mantenimiento</button>
            </div>
            </form>
        </div>
    </div>
</div>