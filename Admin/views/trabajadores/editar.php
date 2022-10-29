<div class="modal fade" id="EditarTrabajador<?php echo $mostrar['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear trabajadores</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito el trabajador.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="FormTrabajador">
                    <div class="form-group ">
                        <label for="firstname" class="control-label col-lg-2">Nombre Completo</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="firstname" name="nombre" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="lastname" class="control-label col-lg-2">CURP</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="lastname" name="curp" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="username" class="control-label col-lg-2">RFC</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="username" name="rfc" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="username" class="control-label col-lg-2">NSS</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="username" name="nss" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="username" class="control-label col-lg-2">Cargo</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="username" name="cargo" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="username" class="control-label col-lg-2">Usuario</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="username" name="user" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="password" class="control-label col-lg-2">Contraseña</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="password" name="contra" type="password" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="confirm_password" class="control-label col-lg-2">Confirmar Contraseña</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="confirm_password" name="recontra" type="password" />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Agregar trabajador</button>
            </div>
            </form>
        </div>
    </div>
</div>