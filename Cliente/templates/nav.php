<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <a href="index.php" class="logo"><b>Grupo<span>SOCA</span></b></a>
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class="logout" href="php/logout.php">Cerrar Sesión</a></li>
        </ul>
    </div>
</header>
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="img/banner.png" class="img-circle" width="80"></a></p>
            <h5 class="centered">Cliente</h5>
            <li class="mt">
                <a class="active" href="index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Panel de Control</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-calendar"></i>
                    <span>Ordenes de Servicios</span>
                </a>
                <ul class="sub">

                    <li><a href="listar_orden.php">Bitacora</a></li>
                    <li><a href="listar_evidencias.php">Evidencias</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Cortes</span>
                </a>
                <ul class="sub">
                    <li><a href="listar_reportes.php">Mis cortes</a></li>



                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Manifiestos</span>
                </a>
                <ul class="sub">
                    <li><a href="listar_manifiesto.php">Mis manifiestos</a></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Acuses</span>
                </a>
                <ul class="sub">
                    <li><a href="listar_acuses.php">Mis acuses</a></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Reporte General</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>