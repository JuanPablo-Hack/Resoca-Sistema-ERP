<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Registro de Confirmación de Servicio</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <form class="form-horizontal style-form" enctype="multipart/form-data" id="formConfirmar2022">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Folio Relacionado</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="folio" value="<?php echo $folio; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nombre de la persona que autoriza</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Cargo de la persona que autoriza</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="cargo" required>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Subir del imagen del patio (Sin Basura)</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="form-control" id="image" name="foto1" multiple>
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTA!</span>
                                <span>
                                    No se te olvide adjuntar todas las fotos de las evidencias del servicio.
                                </span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Subir Imágenes del Procesos (Recolección de Basura)</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="form-control" id="image" name="foto2" multiple>
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTA!</span>
                                <span>
                                    No se te olvide adjuntar todas las fotos de las evidencias del servicio.
                                </span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Subir del imagen del patio (Con Basura)</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="form-control" id="image" name="foto3" multiple>
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTA!</span>
                                <span>
                                    No se te olvide adjuntar todas las fotos de las evidencias del servicio.
                                </span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Subir imagen del Vehículo (Cargado con Basura)</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="form-control" id="image" name="foto4" multiple>
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTA!</span>
                                <span>
                                    No se te olvide adjuntar todas las fotos de las evidencias del servicio.
                                </span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Firma de conformidad</label>
                            <div class="col-md-9">
                                <canvas id="canvas" style="border: 1px solid #000;  width: 250px; height: 150px;"></canvas>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-theme">Confirmar</button>
                                <button class="btn btn-theme04" id="btnLimpiar">Cancelar</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
</section>