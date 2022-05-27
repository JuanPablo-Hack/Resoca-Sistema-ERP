<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'templates/head.php';
    include 'php/selects.php';
    $Row = mysqli_fetch_array(get_catalgo($_GET['id']));
    ?>
</head>

<body>
    <section id="container">
        <?php include 'templates/nav.php'; ?>
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> Editar Concepto de Catalogo</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <div class="form">
                                <form class="cmxform form-horizontal style-form" id="EditarCatalogo">
                                    <input name="id" type="hidden" value="<?php echo $Row['id'] ?>" />
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">Nombre del Concepto</label>
                                        <div class="col-sm-4">
                                            <input class=" form-control" id="firstname" name="nombre" type="text" value="<?php echo $Row['nombre'] ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-2">Clave</label>
                                        <div class="col-sm-4">
                                            <input class=" form-control" id="lastname" name="clave" type="text" value="<?php echo $Row['clave'] ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Precio</label>
                                        <div class="col-sm-4">
                                            <input class="form-control " id="username" name="precio" type="text" value="<?php echo $Row['precio'] ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-theme" type="submit">Guardar</button>
                                            <a href="listar_trabajador.php" class="btn btn-theme04" type="button">Cancelar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /form-panel -->
                    </div>
                    <!-- /col-lg-12 -->
                </div>
                <!-- /row -->
            </section>
            <!-- /wrapper -->
        </section>
        <?php include 'templates/footer.php'; ?>
    </section>
    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/lib/jquery.scrollTo.min.js"></script>
    <script src="../assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/lib/common-scripts.js"></script>
    <script src="../assets/lib/form-validation-script.js"></script>
    <script src="../assets/lib/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="js/controller.js"></script>
    <script src="js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document
                .getElementById("EditarCatalogo")
                .addEventListener("submit", editarCatalogo);
        });
        async function editarCatalogo(e) {
            e.preventDefault();
            var form = document.getElementById("EditarCatalogo");
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger",
                },
                buttonsStyling: false,
            });
            swalWithBootstrapButtons
                .fire({
                    title: "Estas seguro que la información es la correcta?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Si, actualizar este concepto",
                    cancelButtonText: "No, cancelar!",
                    reverseButtons: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        let data = new FormData(form);
                        data.append("accion", "editar");
                        fetch("php/catalogo_controller.php", {
                                method: "POST",
                                body: data,
                            })
                            .then((result) => result.text())
                            .then((result) => {
                                if (result == 1) {
                                    swalWithBootstrapButtons.fire(
                                        "Agregado!",
                                        "El concepto ha sido actualizado en la base de datos.",
                                        "success"
                                    );
                                    form.reset();
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
                                } else {
                                    swalWithBootstrapButtons.fire(
                                        "Error",
                                        "Hemos tenido un error a la base de datos o la conexión.",
                                        "error"
                                    );
                                    // setTimeout(function() {
                                    //     location.reload();
                                    // }, 2000);
                                }
                            });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            "Cancelado",
                            "Revise su información de nuevo",
                            "error"
                        );
                    }
                });
        }
    </script>

</body>

</html>