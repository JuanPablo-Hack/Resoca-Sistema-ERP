//======================================================================
// VARIABLES
//======================================================================
let miCanvas = document.querySelector("#canvas");
let lineas = [];
let correccionX = 0;
let correccionY = 0;
let pintarLinea = false;
// Marca el nuevo punto
let nuevaPosicionX = 0;
let nuevaPosicionY = 0;

let posicion = miCanvas.getBoundingClientRect();
correccionX = posicion.x;
correccionY = posicion.y;

miCanvas.width = 250;
miCanvas.height = 150;

//======================================================================
// FUNCIONES
//======================================================================

/**
 * Funcion que empieza a dibujar la linea
 */
function empezarDibujo() {
  pintarLinea = true;
  lineas.push([]);
}

/**
 * Funcion que guarda la posicion de la nueva línea
 */
function guardarLinea() {
  lineas[lineas.length - 1].push({
    x: nuevaPosicionX,
    y: nuevaPosicionY,
  });
}

/**
 * Funcion dibuja la linea
 */
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

/**
 * Funcion que deja de dibujar la linea
 */
function pararDibujar() {
  pintarLinea = false;
  guardarLinea();
}

//======================================================================
// EVENTOS
//======================================================================

// Eventos raton
miCanvas.addEventListener("mousedown", empezarDibujo, false);
miCanvas.addEventListener("mousemove", dibujarLinea, false);
miCanvas.addEventListener("mouseup", pararDibujar, false);

// Eventos pantallas táctiles
miCanvas.addEventListener("touchstart", empezarDibujo, false);
miCanvas.addEventListener("touchmove", dibujarLinea, false);


// // $btnEnviar.onclick = async () => {
// //   // Convertir la imagen a Base64 y ponerlo en el enlace
// //   var form = document.getElementById("formConfirmar");
// //   const image = $canvas.toDataURL("image/png");
// //   const fd = new FormData(form);
// //   fd.append("imagen", image); // Se llama "imagen", en PHP lo recuperamos con $_POST["imagen"]
// //   const respuestaHttp = await fetch("php/confirmacion.php", {
// //     method: "POST",
// //     body: fd,
// //   });
// //   const nombreImagenSubida = await respuestaHttp.json();
// //   console.log(
// //     "La imagen ha sido enviada y tiene el nombre de: " + nombreImagenSubida
// //   );
// // };

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formConfirmar")
    .addEventListener("submit", confirmar);
});

async function confirmar(e) {
  e.preventDefault();
  console.log("Convertir");
//   const image = $canvas.toDataURL("image/png");
//   var form = document.getElementById("formConfirmar");

//   const swalWithBootstrapButtons = Swal.mixin({
//     customClass: {
//       confirmButton: "btn btn-success",
//       cancelButton: "btn btn-danger",
//     },
//     buttonsStyling: false,
//   });

//   swalWithBootstrapButtons
//     .fire({
//       title: "Estas seguro que la información es la correcta?",
//       icon: "warning",
//       showCancelButton: true,
//       confirmButtonText: "Si, agregar confirmación",
//       cancelButtonText: "No, cancelar!",
//       reverseButtons: true,
//     })
//     .then((result) => {
//       if (result.isConfirmed) {
//         var form = document.getElementById("formConfirmar");
//         const image = $canvas.toDataURL("image/png");
//         const fd = new FormData(form);
//         fd.append("imagen", image);
//         fd.append("accion", "agregar");
//         fetch("php/confirmacion_controller.php", {
//           method: "POST",
//           body: fd,
//         })
//           .then((result) => result.text())
//           .then((result) => {
//             if (result == 1) {
//               swalWithBootstrapButtons.fire(
//                 "Agregado!",
//                 "La dirección ip ha sido agregado en la base de datos.",
//                 "success"
//               );
//               form.reset();
//               setTimeout(function () {
//                 location.reload();
//               }, 2000);
//             } else {
//               swalWithBootstrapButtons.fire(
//                 "Error",
//                 "Hemos tenido un error a la base de datos o la conexión.",
//                 "error"
//               );
//               form.reset();
//               setTimeout(function () {
//                 location.reload();
//               }, 2000);
//             }
//           });
//       } else if (
//         /* Read more about handling dismissals below */
//         result.dismiss === Swal.DismissReason.cancel
//       ) {
//         swalWithBootstrapButtons.fire(
//           "Cancelado",
//           "Revise su información de nuevo",
//           "error"
//         );
//       }
//     });
}

