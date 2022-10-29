<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear unidad</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito la unidad.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="FormUnidad">
                    <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Modelo</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="cname" name="modelo" minlength="2" type="text" />
                        </div>
                        <label for="cname" class="control-label col-lg-2">Año</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="cname" name="ano" minlength="2" type="text" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="curl" class="control-label col-lg-2">Color</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="curl" type="text" name="color" />
                        </div>
                        <label for="curl" class="control-label col-lg-2">Placas</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="curl" type="text" name="placas" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="curl" class="control-label col-lg-2">No. economico</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="curl" type="text" name="no_economico" />
                        </div>
                        <label for="curl" class="control-label col-lg-2">Capacidad de Carga</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="curl" type="text" name="capacidad" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="curl" class="control-label col-lg-2">Tipo de unidad</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="curl" type="text" name="tipo_unidad" />
                        </div>
                        <label for="curl" class="control-label col-lg-2">Tipo de Combustible</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="curl" type="text" name="tipo_combustible" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="curl" class="control-label col-lg-2">No. de serie</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="curl" type="text" name="serie" />
                        </div>
                        <label for="ccomment" class="control-label col-lg-2">Descripción</label>
                        <div class="col-sm-4">
                            <textarea class="form-control " id="ccomment" name="descripcion"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Agregar unidad</button>
            </div>
            </form>
        </div>
    </div>
</div>