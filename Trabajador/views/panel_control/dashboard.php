<section class="wrapper">
    <div class="row mt">
        <div class="col-md-6 col-sm-4 mb">
            <div class="grey-panel pn donut-chart">
                <div class="grey-header">
                    <h5>Analisis de Servicios</h5>
                </div>
                <canvas id="serverstatus01" height="120" width="120"></canvas>
                <script>
                    var doughnutData = [{
                            value: 70,
                            color: "#FF6B6B"
                        },
                        {
                            value: 30,
                            color: "#fdfdfd"
                        }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                </script>
                <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                        <p>Serivicios<br />Finalizados:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <h2>21%</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-4 mb">
            <div class="darkblue-panel pn">
                <div class="darkblue-header">
                    <h5>Unidades</h5>
                </div>
                <canvas id="serverstatus02" height="120" width="120"></canvas>
                <script>
                    var doughnutData = [{
                            value: 60,
                            color: "#1c9ca7"
                        },
                        {
                            value: 40,
                            color: "#f68275"
                        }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                </script>
                <p>Agosto 17, 2020</p>
                <footer>
                    <div class="pull-left">
                        <h5><i class="fa fa-hdd-o"></i> </h5>
                    </div>
                    <div class="pull-right">
                        <h5>60% Uso</h5>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-12 ds">
        <div class="donut-main">
            <h4>COMPLETED ACTIONS & PROGRESS</h4>
            <canvas id="newchart" height="130" width="130"></canvas>
            <script>
                var doughnutData = [{
                        value: 70,
                        color: "#4ECDC4"
                    },
                    {
                        value: 30,
                        color: "#fdfdfd"
                    }
                ];
                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
            </script>
        </div>
        <!--NEW EARNING STATS -->
        <div class="panel terques-chart">
            <div class="panel-body">
                <div class="chart">
                    <div class="centered">
                        <span>TODAY EARNINGS</span>
                        <strong>$ 890,00 | 15%</strong>
                    </div>
                    <br>
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
            </div>
        </div>
        <h4 class="centered mt">RECENT ACTIVITY</h4>
        <div class="desc">
            <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="details">
                <p>
                    <muted>Just Now</muted>
                    <br />
                    <a href="#">Paul Rudd</a> purchased an item.<br />
                </p>
            </div>
        </div>
        <div class="desc">
            <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="details">
                <p>
                    <muted>2 Minutes Ago</muted>
                    <br />
                    <a href="#">James Brown</a> subscribed to your newsletter.<br />
                </p>
            </div>
        </div>
        <div class="desc">
            <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="details">
                <p>
                    <muted>3 Hours Ago</muted>
                    <br />
                    <a href="#">Diana Kennedy</a> purchased a year subscription.<br />
                </p>
            </div>
        </div>
        <div class="desc">
            <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="details">
                <p>
                    <muted>7 Hours Ago</muted>
                    <br />
                    <a href="#">Brando Page</a> purchased a year subscription.<br />
                </p>
            </div>
        </div>
        <h4 class="centered mt">TEAM MEMBERS ONLINE</h4>
        <div class="desc">
            <div class="thumb">
                <img class="img-circle" src="img/ui-divya.jpg" width="35px" height="35px" align="">
            </div>
            <div class="details">
                <p>
                    <a href="#">DIVYA MANIAN</a><br />
                    <muted>Available</muted>
                </p>
            </div>
        </div>
        <div class="desc">
            <div class="thumb">
                <img class="img-circle" src="img/ui-sherman.jpg" width="35px" height="35px" align="">
            </div>
            <div class="details">
                <p>
                    <a href="#">DJ SHERMAN</a><br />
                    <muted>I am Busy</muted>
                </p>
            </div>
        </div>
        <div class="desc">
            <div class="thumb">
                <img class="img-circle" src="img/ui-danro.jpg" width="35px" height="35px" align="">
            </div>
            <div class="details">
                <p>
                    <a href="#">DAN ROGERS</a><br />
                    <muted>Available</muted>
                </p>
            </div>
        </div>
        <div class="desc">
            <div class="thumb">
                <img class="img-circle" src="img/ui-zac.jpg" width="35px" height="35px" align="">
            </div>
            <div class="details">
                <p>
                    <a href="#">Zac Sniders</a><br />
                    <muted>Available</muted>
                </p>
            </div>
        </div>
    </div>
    </div>
</section>