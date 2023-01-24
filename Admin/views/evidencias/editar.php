<div class="modal fade" id="EditarEvidencias<?php echo $mostrar['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Editar Evidencia</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito el concepto.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="EditarEvidencia">
                    <input class=" form-control" id="firstname" name="id" type="hidden" value="<?php echo $mostrar['id']; ?>" />
                    <div class="form-group">
                        <label for="firstname" class="control-label col-lg-2">No. Orden de Servicio</label>
                        <div class="col-sm-8">
                            <input class=" form-control" id="firstname" name="folio" type="text" value="<?php echo $mostrar['folio']; ?>" />
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=" form-group">
                        <label for="username" class="control-label col-lg-2">Ticket</label>
                        <div class="col-sm-8">
                            <input class="form-control " id="username" name="ticket" type="text" value="<?php echo $mostrar['ticket']; ?>" />
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="username" class="control-label col-lg-2">Concepto y cantidad</label>
                        <div class="col-sm-8">
                            <input class="form-control " id="username" name="cantidad" type="text" value="<?php echo $mostrar['arreglo']; ?>" />
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="username" class="control-label col-lg-2">Comentarios</label>
                        <div class="col-sm-8">
                            <input class="form-control " id="username" name="comentarios" type="text" value="<?php echo $mostrar['comentarios']; ?>" />
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="username" class="control-label col-lg-2">Fecha</label>
                        <div class="col-sm-8">
                            <input class="form-control " id="username" name="fecha" type="date" value="<?php echo $mostrar['creado']; ?>" />
                        </div>
                    </div>
                    <br>
                    <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </form>
        </div>
    </div>
</div>