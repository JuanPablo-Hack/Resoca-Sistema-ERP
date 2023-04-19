document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("CrearEvidencia")
    .addEventListener("submit", crearEvidencia);
});
async function crearEvidencia(e) {
  e.preventDefault();
  var form = document.getElementById("CrearEvidencia");
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
      confirmButtonText: "Si, agregar evidencia",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        let data = new FormData(form);
        data.append("accion", "agregar");
        fetch("php/evidencias_controller_2022.php", {
          method: "POST",
          body: data,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Agregado!",
                "La orden ha sido agregado en la base de datos.",
                "success"
              );
              form.reset();
              setTimeout(function () {
                location.reload();
              }, 2000);
            } else {
              swalWithBootstrapButtons.fire(
                "Error",
                "Hemos tenido un error a la base de datos o la conexión.",
                "error"
              );
              // setTimeout(function() {
              //   location.reload();
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

function cambiar_conceptos() {
  var x = document.getElementById("concepto").value;
  switch (x) {
    case "1":
      document.getElementById("concepto_1").style.display = "inherit";
      document.getElementById("concepto_2").style.display = "none";
      document.getElementById("concepto_3").style.display = "none";
      document.getElementById("concepto_4").style.display = "none";
      document.getElementById("concepto_5").style.display = "none";
      break;
    case "2":
      document.getElementById("concepto_1").style.display = "inherit";
      document.getElementById("concepto_2").style.display = "inherit";
      document.getElementById("concepto_3").style.display = "none";
      document.getElementById("concepto_4").style.display = "none";
      document.getElementById("concepto_5").style.display = "none";
      break;
    case "3":
      document.getElementById("concepto_1").style.display = "inherit";
      document.getElementById("concepto_2").style.display = "inherit";
      document.getElementById("concepto_3").style.display = "inherit";
      document.getElementById("concepto_4").style.display = "none";
      document.getElementById("concepto_5").style.display = "none";
      break;
    case "4":
      document.getElementById("concepto_1").style.display = "inherit";
      document.getElementById("concepto_2").style.display = "inherit";
      document.getElementById("concepto_3").style.display = "inherit";
      document.getElementById("concepto_4").style.display = "inherit";
      document.getElementById("concepto_5").style.display = "none";
      break;
    case "5":
      document.getElementById("concepto_1").style.display = "inherit";
      document.getElementById("concepto_2").style.display = "inherit";
      document.getElementById("concepto_3").style.display = "inherit";
      document.getElementById("concepto_4").style.display = "inherit";
      document.getElementById("concepto_5").style.display = "inherit";
      break;
    case "0":
      document.getElementById("concepto_1").style.display = "none";
      document.getElementById("concepto_2").style.display = "none";
      document.getElementById("concepto_3").style.display = "none";
      document.getElementById("concepto_4").style.display = "none";
      document.getElementById("concepto_5").style.display = "none";
  }
}
