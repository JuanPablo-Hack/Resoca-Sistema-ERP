let miCanvas = document.querySelector("#canvas");
let lineas = [];
let correccionX = 0;
let correccionY = 0;
let pintarLinea = false;
let nuevaPosicionX = 0;
let nuevaPosicionY = 0;
let posicion = miCanvas.getBoundingClientRect();
correccionX = posicion.x;
correccionY = posicion.y;
miCanvas.width = 250;
miCanvas.height = 150;

function empezarDibujo() {
  pintarLinea = true;
  lineas.push([]);
}

function guardarLinea() {
  lineas[lineas.length - 1].push({
    x: nuevaPosicionX,
    y: nuevaPosicionY,
  });
}

function dibujarLinea(event) {
  event.preventDefault();
  if (pintarLinea) {
    let ctx = miCanvas.getContext("2d");
    // Estilos de linea
    ctx.lineJoin = ctx.lineCap = "round";
    ctx.lineWidth = 2;
    // Color de la linea
    ctx.strokeStyle = "#000000";
    // Marca el nuevo punto
    if (event.changedTouches == undefined) {
      // Versión ratón
      nuevaPosicionX = event.layerX;
      nuevaPosicionY = event.layerY;
    } else {
      // Versión touch, pantalla tactil
      nuevaPosicionX = event.changedTouches[0].pageX - correccionX;
      nuevaPosicionY = event.changedTouches[0].pageY - correccionY;
    }
    // Guarda la linea
    guardarLinea();
    // Redibuja todas las lineas guardadas
    ctx.beginPath();
    lineas.forEach(function (segmento) {
      ctx.moveTo(segmento[0].x, segmento[0].y);
      segmento.forEach(function (punto, index) {
        ctx.lineTo(punto.x, punto.y);
      });
    });
    ctx.stroke();
  }
}

function pararDibujar() {
  pintarLinea = false;
  guardarLinea();
}
miCanvas.addEventListener("touchstart", empezarDibujo, false);
miCanvas.addEventListener("touchmove", dibujarLinea, false);

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formConfirmar")
    .addEventListener("submit", confirmar);
});
async function confirmar(e) {
  e.preventDefault();
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
      confirmButtonText: "Si, agregar confirmación",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        var form = document.getElementById("formConfirmar");
        const image = miCanvas.toDataURL("image/png");
        const fd = new FormData(form);
        fd.append("imagen", image);
        fd.append("accion", "agregar");
        fetch("php/confirmacion_controller.php", {
          method: "POST",
          body: fd,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Agregado!",
                "La dirección ip ha sido agregado en la base de datos.",
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
              form.reset();
              setTimeout(function () {
                location.reload();
              }, 2000);
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
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formConfirmar2022")
    .addEventListener("submit", confirmar_2022);
});
async function confirmar_2022(e) {
  e.preventDefault();
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
      confirmButtonText: "Si, agregar confirmación",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        var form = document.getElementById("formConfirmar2022");
        const image = miCanvas.toDataURL("image/png");
        const fd = new FormData(form);
        fd.append("imagen", image);
        fd.append("accion", "agregar");
        fetch("php/confirmacion_controller.php", {
          method: "POST",
          body: fd,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Agregado!",
                "La dirección ip ha sido agregado en la base de datos.",
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
              form.reset();
              setTimeout(function () {
                location.reload();
              }, 2000);
            }
          });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire(
          "Cancelado",
          "Revise su información de nuevo",
          "error"
        );
      }
    });
}
