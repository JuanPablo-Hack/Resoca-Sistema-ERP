const $canvas = document.querySelector("#canvas"),
  $btnLimpiar = document.querySelector("#btnLimpiar"),
  $btnEnviar = document.querySelector("#btnEnviar");
const contexto = $canvas.getContext("2d");
const COLOR_PINCEL = "black";
const COLOR_FONDO = "white";
const GROSOR = 2;
let xAnterior = 0,
  yAnterior = 0,
  xActual = 0,
  yActual = 0;
const obtenerXReal = (clientX) =>
  clientX - $canvas.getBoundingClientRect().left;
const obtenerYReal = (clientY) => clientY - $canvas.getBoundingClientRect().top;
let haComenzadoDibujo = false; // Bandera que indica si el usuario está presionando el botón del mouse sin soltarlo

const limpiarCanvas = () => {
  // Colocar color blanco en fondo de canvas
  contexto.fillStyle = COLOR_FONDO;
  contexto.fillRect(0, 0, $canvas.width, $canvas.height);
};
limpiarCanvas();
$btnLimpiar.onclick = limpiarCanvas;

// Lo demás tiene que ver con pintar sobre el canvas en los eventos del mouse
$canvas.addEventListener("mousedown", (evento) => {
  // En este evento solo se ha iniciado el clic, así que dibujamos un punto
  xAnterior = xActual;
  yAnterior = yActual;
  xActual = obtenerXReal(evento.clientX);
  yActual = obtenerYReal(evento.clientY);
  contexto.beginPath();
  contexto.fillStyle = COLOR_PINCEL;
  contexto.fillRect(xActual, yActual, GROSOR, GROSOR);
  contexto.closePath();
  // Y establecemos la bandera
  haComenzadoDibujo = true;
});

$canvas.addEventListener("mousemove", (evento) => {
  if (!haComenzadoDibujo) {
    return;
  }
  // El mouse se está moviendo y el usuario está presionando el botón, así que dibujamos todo

  xAnterior = xActual;
  yAnterior = yActual;
  xActual = obtenerXReal(evento.clientX);
  yActual = obtenerYReal(evento.clientY);
  contexto.beginPath();
  contexto.moveTo(xAnterior, yAnterior);
  contexto.lineTo(xActual, yActual);
  contexto.strokeStyle = COLOR_PINCEL;
  contexto.lineWidth = GROSOR;
  contexto.stroke();
  contexto.closePath();
});
["mouseup", "mouseout"].forEach((nombreDeEvento) => {
  $canvas.addEventListener(nombreDeEvento, () => {
    haComenzadoDibujo = false;
  });
});

// $btnEnviar.onclick = async () => {
//   // Convertir la imagen a Base64 y ponerlo en el enlace
//   var form = document.getElementById("formConfirmar");
//   const image = $canvas.toDataURL("image/png");
//   const fd = new FormData(form);
//   fd.append("imagen", image); // Se llama "imagen", en PHP lo recuperamos con $_POST["imagen"]
//   const respuestaHttp = await fetch("php/confirmacion.php", {
//     method: "POST",
//     body: fd,
//   });
//   const nombreImagenSubida = await respuestaHttp.json();
//   console.log(
//     "La imagen ha sido enviada y tiene el nombre de: " + nombreImagenSubida
//   );
// };

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formConfirmar")
    .addEventListener("submit", confirmar);
});

async function confirmar(e) {
  e.preventDefault();
  var form = document.getElementById("ip_Form");
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
        const image = $canvas.toDataURL("image/png");
        const fd = new FormData(form);
        fd.append("imagen", image);
        fetch("php/confirmacion.php", {
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
              // form.reset();
              // setTimeout(function () {
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
