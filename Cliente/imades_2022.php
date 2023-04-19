<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'templates/head.php'; ?>
</head>

<body>
    <section id="container">
        <?php include 'templates/nav.php'; ?>
        <?php include 'views/imades/menu.php'; ?>
        <?php include 'php/graficas_2022.php';
        $calculo_enero = obtener_residuo_total('2022-01-01', '2022-01-31');
        $calculo_febrero = obtener_residuo_total('2022-02-01', '2022-02-31'); ?>
        <section id="main-content">
            <?php include 'views/imades/graficas_2022.php'; ?>
        </section>
        <?php include 'templates/footer.php'; ?>
    </section>
    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/lib/jquery.scrollTo.min.js"></script>
    <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/lib/raphael/raphael.min.js"></script>
    <script src="../assets/lib/morris/morris.min.js"></script>
    <script src="../assets/lib/common-scripts.js"></script>
    <script src="../assets/lib/morris-conf.js"></script>
</body>

</html>