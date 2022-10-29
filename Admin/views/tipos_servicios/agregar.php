<?php
include 'php/conexion.php';
$sql2 = "SELECT  id,modelo FROM unidades";
$result2 = mysqli_query($conexion, $sql2);
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear tipo de servicio</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito la tipo de servicio.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="FormServicio">
                    <h3>Datos del Servicio</h3>
                    <hr>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">Tipo de Servicio</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="tipo">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="ccomment" class="control-label col-lg-2">Descripción</label>
                        <div class="col-sm-9">
                            <textarea class="form-control " id="ccomment" name="descripcion" required></textarea>
                        </div>
                    </div>
                    <h3>Datos de Personal</h3>
                    <hr>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Supervisor</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="supervisor">
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">Operador</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="operador">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Auxiliar</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="auxiliar">
                        </div>
                    </div>
                    <h3>Datos del vehículo del servicio</h3>
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
                    <h3>Datos del destino final</h3>
                    <hr>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nombre_destino">
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">Ubicacion</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="ubicacion">
                        </div>
                    </div>
                    <h3>Herramientas a utilizar</h3>
                    <hr>
                    <div class="form-group ">
                        <label for="ccomment" class="control-label col-lg-2">Descripción de Material
                        </label>
                        <div class="col-sm-9">
                            <textarea class="form-control " id="ccomment" name="descripcion_material" required></textarea>
                        </div>
                    </div>
                    <h3>Equipo de Seguridad Necesario</h3>
                    <hr>
                    <div class="form-group ">
                        <label for="ccomment" class="control-label col-lg-2">Descripción de Equipo
                        </label>
                        <div class="col-sm-9">
                            <textarea class="form-control " id="ccomment" name="descripcion_equipo" required></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Agregar tipo de servicio</button>
            </div>
            </form>
        </div>
    </div>
</div>