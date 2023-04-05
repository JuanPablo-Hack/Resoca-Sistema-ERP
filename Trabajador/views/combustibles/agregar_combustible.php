<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Crear Bitaroca de Combustible</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <form class="form-horizontal style-form" id="FormCombustible">

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
                        <div class="form-group">
                            <label class="control-label col-md-3">Fecha de carga</label>
                            <div class="col-md-3 col-xs-11">
                                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                                    <input type="text" readonly="" value="01-01-2014" size="16" class="form-control" name="fecha">
                                    <span class="input-group-btn add-on">
                                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                                <span class="help-block">Select date</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Km inicial</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="km_inicial">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Km final</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="km_final">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tipo de Servicio</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="tipo_servicio">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Litros de Carga</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="litros">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">No.Factura</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_factura">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Operador</label>
                            <div class="col-sm-4">
                                <select class="form-control" name='operador'>
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
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Importe</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="importe">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-theme" type="submit">Crear</button>
                                <a href="listar_combustible.php" class="btn btn-theme04" type="button">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
</section>