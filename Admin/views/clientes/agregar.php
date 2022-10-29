<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear cliente</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;" id="success"><b>Felicidades!</b> Has agregado con éxito el cliente.</div>
                <div class="alert alert-danger" style="display: none;" id="wrong"><b>Oh no!</b> Cambie algunas cosas e intente enviar de nuevo.</div>
                <form class="form-horizontal style-form" id="FormCliente">
                    <h3>Datos generales</h3>
                    <hr>
                    <div class="form-group ">
                        <label for="firstname" class="control-label col-lg-2">Nombre Completo</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="firstname" name="nombre" type="text" />
                        </div>
                        <label for="username" class="control-label col-lg-2">No. NRA</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="nra" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="username" class="control-label col-lg-2">Telefono</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="telefono" type="text" />
                        </div>
                        <label for="username" class="control-label col-lg-2">Email</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="email" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="username" class="control-label col-lg-2">Area</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="area" type="text" />
                        </div>
                        <label class="control-label col-md-3">Fecha de Programación de corte</label>
                        <div class="col-md-3 col-xs-11">
                            <input type="date" name='fecha' class="form-control">
                        </div>
                    </div>
                    <h3>Datos Fiscales</h3>
                    <hr>
                    <div class="form-group ">
                        <label for="lastname" class="control-label col-lg-2">RFC</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="lastname" name="rfc" type="text" />
                        </div>
                        <label for="username" class="control-label col-lg-2">C.P</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="cp" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="username" class="control-label col-lg-2">Dirección</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="direccion" type="text" />
                        </div>
                    </div>
                    <h3>Datos del contacto</h3>
                    <hr>
                    <div class="form-group ">
                        <label for="lastname" class="control-label col-lg-2">Nombre</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="lastname" name="nombre_representante" type="text" />
                        </div>
                        <label for="username" class="control-label col-lg-2">Cargo</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="cargo" type="text" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="username" class="control-label col-lg-2">Télefono</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="tel_representante" type="text" />
                        </div>
                        <label for="username" class="control-label col-lg-2">E-mail</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="username" name="email_representante" type="text" />
                        </div>
                    </div>
                    <h3>Datos de Usuario</h3>
                    <hr>
                    <div class="form-group ">
                        <label for="lastname" class="control-label col-lg-2">Usuario</label>
                        <div class="col-sm-4">
                            <input class=" form-control" id="lastname" name="user" type="text" />
                        </div>
                        <label for="password" class="control-label col-lg-2">Contraseña</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="password" name="contra" type="password" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="confirm_password" class="control-label col-lg-2">Confirmar Contraseña</label>
                        <div class="col-sm-4">
                            <input class="form-control " id="confirm_password" name="recontra" type="password" />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Agregar cliente</button>
            </div>
            </form>
        </div>
    </div>
</div>