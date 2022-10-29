<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear concepto</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito el concepto.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="FormCatalogo">
                    <div class="form-group">
                        <label for="firstname" class="control-label col-lg-2">Nombre del Concepto</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="firstname" name="nombre" type="text" />
                        </div>
                        <label for="lastname" class="control-label col-lg-2">Clave</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="lastname" name="clave" type="text" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="control-label col-lg-2">Precio</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="precio" type="text" />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Agregar concepto</button>
            </div>
            </form>
        </div>
    </div>
</div>