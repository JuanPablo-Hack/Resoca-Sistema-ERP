<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="index.php" class="logo"><b>Grupo<span>SOCA</span></b></a>
    <!--logo end-->

    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class="logout" href="login.html">Cerrar Sesión</a></li>
        </ul>
    </div>
</header>
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="../assets/img/banner.png" class="img-circle" width="80"></a></p>
            <h5 class="centered">Trabajador</h5>
            <li class="mt">
                <a class="active" href="index.html">
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
                    <li><a href="calendar.html">Calendario</a></li>

                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-car"></i>
                    <span>Unidades</span>
                </a>
                <ul class="sub">



                    <li><a href="bitacora_combustible.php">Registrar combustible</a></li>

                    <li><a href="listar_combustible.php">Listar combustibles</a></li>

                </ul>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>