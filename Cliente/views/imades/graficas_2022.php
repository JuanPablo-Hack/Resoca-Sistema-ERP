<section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i> Reporte Imades</h3>
    <div class="col-lg-12 main-chart">
        <div class="border-head">
            <h3>Residuo Recolectado</h3>
        </div>
        <div class="custom-bar-chart">
            <ul class="y-axis">
                <li><span>10.000</span></li>
                <li><span>8.000</span></li>
                <li><span>6.000</span></li>
                <li><span>4.000</span></li>
                <li><span>2.000</span></li>
                <li><span>0</span></li>
            </ul>
            <div class="bar">
                <div class="title">ENE</div>
                <div class="value tooltips" data-original-title="<?php echo $calculo_enero ?>" data-toggle="tooltip" data-placement="top"><?php echo obtener_porcentaje_residuo(10000, $calculo_enero); ?>%</div>
            </div>
            <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="<?php echo $calculo_febrero ?>" data-toggle="tooltip" data-placement="top"><?php echo obtener_porcentaje_residuo(10000, $calculo_febrero); ?>%</div>
            </div>
            <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
            </div>
            <div class="bar ">
                <div class="title">ABR</div>
                <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
            </div>
            <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
            </div>
            <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
            </div>
            <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="0" data-toggle="tooltip" data-placement="top">0%</div>
            </div>
        </div>
        <div class="row mt">
            <div class="col-md-12 col-sm-12 mb">
                <div class="grey-panel pn donut-chart">
                    <div class="grey-header">
                        <h5>Residuos Generados</h5>
                    </div>
                    <canvas id="serverstatus01" height="120" width="120"></canvas>
                    <script>
                        var doughnutData = [{
                            value: <?php echo obtener_porcentaje_residuo($calculo_enero + $calculo_febrero, $calculo_enero); ?>,
                            color: "#FF6B6B",
                            tooltip: "Enero"
                        }, {
                            value: <?php echo obtener_porcentaje_residuo($calculo_enero + $calculo_febrero, $calculo_febrero); ?>,
                            color: "#FF5733",
                            tooltip: "Febrero",
                        }];
                        var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                    </script>
                    <div class="row">
                        <div class="col-sm-6 col-xs-6 goleft">
                            <p>Total<br />de Residuos:</p>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <h2><?php echo $calculo_enero + $calculo_febrero; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>