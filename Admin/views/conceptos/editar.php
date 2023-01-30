<div class="modal fade" id="Editartipos_concepto<?php echo $mostrar['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Editar concepto</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal style-form" action="php/catalogo_controller.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $mostrar['id'] ?>">
                    <input type="hidden" name="accion" value="editar">
                    <div class="form-group">
                        <label for="firstname" class="control-label col-lg-2">Nombre del Concepto</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="firstname" name="nombre" type="text" value="<?php echo $mostrar['nombre'] ?>" />
                        </div>
                        <label for="lastname" class="control-label col-lg-2">Clave</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="lastname" name="clave" type="text" value="<?php echo $mostrar['clave'] ?>" />
                        </div>
                    </div>
                    <br><br> <br>

                    <div class="form-group">
                        <label for="username" class="control-label col-lg-2">Precio</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="precio" type="text" value="<?php echo $mostrar['precio'] ?>" />
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