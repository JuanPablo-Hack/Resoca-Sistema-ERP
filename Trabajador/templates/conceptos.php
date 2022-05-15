<?php
function concepto_vista($num_conceptos, $arreglo)
{
    switch ($num_conceptos) {
        case 1:
            $porciones = explode(",", $arreglo);
            echo '<div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cantidad de Conceptos Recolectados</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="1" readonly>
                    </div>
                </div>';
            echo '<div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="' . $porciones[0] . '" readonly>
                    </div>
                </div>';
            echo '<div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="' . $porciones[1] . ' kg" readonly>
                    </div>
                </div>';
            break;
        case 2:
            $porciones = explode(",", $arreglo);
            echo '<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Cantidad de Conceptos Recolectados</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="2" readonly>
                        </div>
                    </div>';
            echo '<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="' . $porciones[0] . '" readonly>
                        </div>
                    </div>';
            echo '<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="' . $porciones[1] . ' kg" readonly>
                        </div>
                    </div>';
            echo '<div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="' . $porciones[2] . '" readonly>
                    </div>
                </div>';
            echo '<div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="' . $porciones[3] . ' kg" readonly>
                    </div>
                </div>';
            break;
        case 3:
            $porciones = explode(",", $arreglo);
            echo '<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Cantidad de Conceptos Recolectados</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="3" readonly>
                                </div>
                            </div>';
            echo '<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="' . $porciones[0] . '" readonly>
                                </div>
                            </div>';
            echo '<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="' . $porciones[1] . ' kg" readonly>
                                </div>
                            </div>';
            echo '<div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="' . $porciones[2] . '" readonly>
                            </div>
                        </div>';
            echo '<div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="' . $porciones[3] . ' kg" readonly>
                            </div>
                        </div>';
            echo '<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="' . $porciones[4] . '" readonly>
                        </div>
                    </div>';
            echo '<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="' . $porciones[5] . ' kg" readonly>
                        </div>
                    </div>';
            break;
        case 4:
            $porciones = explode(",", $arreglo);
            echo '<div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Cantidad de Conceptos Recolectados</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="4" readonly>
                                    </div>
                                </div>';
            echo '<div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="' . $porciones[0] . '" readonly>
                                    </div>
                                </div>';
            echo '<div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="' . $porciones[1] . ' kg" readonly>
                                    </div>
                                </div>';
            echo '<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="' . $porciones[2] . '" readonly>
                                </div>
                            </div>';
            echo '<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="' . $porciones[3] . ' kg" readonly>
                                </div>
                            </div>';
            echo '<div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="' . $porciones[4] . '" readonly>
                            </div>
                        </div>';
            echo '<div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="' . $porciones[5] . ' kg" readonly>
                            </div>
                        </div>';
            echo '<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="' . $porciones[6] . '" readonly>
                        </div>
                    </div>';
            echo '<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="' . $porciones[7] . ' kg" readonly>
                        </div>
                    </div>';
            break;
        case 5:
            $porciones = explode(",", $arreglo);
            echo '<div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Cantidad de Conceptos Recolectados</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="5" readonly>
                                        </div>
                                    </div>';
            echo '<div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="' . $porciones[0] . '" readonly>
                                        </div>
                                    </div>';
            echo '<div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="' . $porciones[1] . ' kg" readonly>
                                        </div>
                                    </div>';
            echo '<div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="' . $porciones[2] . '" readonly>
                                    </div>
                                </div>';
            echo '<div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="' . $porciones[3] . ' kg" readonly>
                                    </div>
                                </div>';
            echo '<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="' . $porciones[4] . '" readonly>
                                </div>
                            </div>';
            echo '<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="' . $porciones[5] . ' kg" readonly>
                                </div>
                            </div>';
            echo '<div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="' . $porciones[6] . '" readonly>
                            </div>
                        </div>';
            echo '<div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="' . $porciones[7] . ' kg" readonly>
                            </div>
                        </div>';
            echo '<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tipo de Concepto Recolectados</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="' . $porciones[8] . '" readonly>
                        </div>
                    </div>';
            echo '<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Cantidad Recolectada</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="' . $porciones[9] . ' kg" readonly>
                        </div>
                    </div>';
            break;
    }
}
